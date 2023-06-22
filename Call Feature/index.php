<!DOCTYPE html>
<html>
<head>
  <title>Calling</title>
  <link rel="stylesheet" href="site.css">
  <style>
    #button-go-back {
      position: absolute;
      top: 10px;
      left: 10px;
      padding: 10px 20px;
      font-size: 18px;
      background-color: #444241;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    
    #button-go-back:hover {
      background-color: #070707;
    }
  </style>
</head>

<body>
  <button id="button-go-back" onclick="goBack()">Go Back</button>

  <div id="controls">
    <div id="info">
      <p class="instructions">Twilio Client</p>
      <div id="client-name"></div>
      <div id="output-selection">
        <label>Ringtone Devices</label>
        <select id="ringtone-devices" multiple></select>
        <label>Speaker Devices</label>
        <select id="speaker-devices" multiple></select><br/>
        <a id="get-devices">Seeing unknown devices?</a>
      </div>
    </div>
    <div id="call-controls">
      <p class="instructions">Make a Call:</p>
      <input id="phone-number" type="text" placeholder="Enter a phone # or client name" />
      <button id="button-call">Call</button>
      <button id="button-hangup">Hangup</button>
      <div id="volume-indicators">
        <label>Mic Volume</label>
        <div id="input-volume"></div><br/><br/>
        <label>Speaker Volume</label>
        <div id="output-volume"></div>
      </div>
    </div>
    <div id="log"></div>
  </div>

  <script type="text/javascript"
  src="twilio.min.js"></script>  <script src="jquery.min.js"></script>
  <script src="quickstart.js"></script>
  <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/649328accc26a871b023e714/1h3fddoqu';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

  <script type="text/javascript" src="twilio.min.js"></script>  
  <script src="jquery.min.js"></script>
  <script src="quickstart.js"></script>
  <script>
    function goBack() {
      window.history.back();
    }
  </script>
</body>
</html>
