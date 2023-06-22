<!DOCTYPE html>
<html>
<head>
  <title>Form Page</title>
  <style>
    body {
      background-image: url("path.jpg");
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
    }

    .back-button {
      background-color: #C1EA19;
      color: black;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .back-button:hover {
      background-color: #FFFFFF;
    }
  </style>
</head>
<body>
    <!-- Back Button -->
    <button class="back-button" onclick="goBack()">Go Back</button>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>

    <!-- Form Middle Align -->
    <div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdE0w66_HKrbMcZTJdANxZQL3BSPHIyKaJLcBhszIEFDd14Gw/viewform?embedded=true" width="640" height="751" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
    </div>
</body>
</html>
