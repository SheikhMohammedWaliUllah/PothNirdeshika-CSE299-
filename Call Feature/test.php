
<!DOCTYPE html>
<html>
<head>
  <title>WebRTC Voice Call</title>
</head>
<body>
  <h1>WebRTC Voice Call</h1>
  
  <button id="startButton" disabled>Start Call</button>
  <button id="hangupButton" disabled>Hang Up</button>
  
  <script>
    var localStream;
    var remoteStream;
    var pc1;
    var pc2;
    
    // Get access to the user's microphone
    navigator.mediaDevices.getUserMedia({ audio: true })
      .then(function(stream) {
        localStream = stream;
        
        var startButton = document.getElementById('startButton');
        startButton.disabled = false;
        
        startButton.onclick = startCall;
      })
      .catch(function(error) {
        console.log('Error accessing microphone:', error);
      });
    
    // Create peer connections and add stream
    function startCall() {
      pc1 = new RTCPeerConnection();
      pc2 = new RTCPeerConnection();
      
      pc1.onicecandidate = function(event) {
        if (event.candidate) {
          pc2.addIceCandidate(event.candidate);
        }
      };
      
      pc2.onicecandidate = function(event) {
        if (event.candidate) {
          pc1.addIceCandidate(event.candidate);
        }
      };
      
      pc2.ontrack = function(event) {
        remoteStream = event.streams[0];
        
        var remoteAudio = new Audio();
        remoteAudio.srcObject = remoteStream;
        remoteAudio.play();
        
        var hangupButton = document.getElementById('hangupButton');
        hangupButton.disabled = false;
        
        hangupButton.onclick = hangupCall;
      };
      
      localStream.getTracks().forEach(function(track) {
        pc1.addTrack(track, localStream);
      });
      
      pc1.createOffer()
        .then(function(offer) {
          pc1.setLocalDescription(offer);
          pc2.setRemoteDescription(offer);
          
          pc2.createAnswer()
            .then(function(answer) {
              pc2.setLocalDescription(answer);
              pc1.setRemoteDescription(answer);
            })
            .catch(function(error) {
              console.log('Error creating answer:', error);
            });
        })
        .catch(function(error) {
          console.log('Error creating offer:', error);
        });
    }
    
    // Hang up the call
    function hangupCall() {
      pc1.close();
      pc2.close();
      
      var hangupButton = document.getElementById('hangupButton');
      hangupButton.disabled = true;
    }
  </script>
</body>
</html>