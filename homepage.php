<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>পথ নির্দেশিকা</title>
    <link rel="stylesheet" href="homepage.css">
</head>
<body>
    <div class="banner">
        <video autoplay loop muted plays-inline>
            <source src="homepage_video.mp4" type="video/mp4">
        </video>
        <div class="navbar">
            <img class="logo" src="logo.jpg">
            <ul>
                <li><a id="homeButton" href="homepage.php">HOME</a></li>
                <li><a id="aboutButton" href="about.php">ABOUT</a></li>
                <li><a id="adminButton" href="adminlogin.php ">ADMIN</a></li>
                <li><a id="userButton" href="sns/index.php">USER</a></li>
            </ul>
        </div>
        <div class="content">
            <h1>Welcome to Poth Nirdeshika</h1>
            <div>
                <button id="suggestionsButton" type="button" onclick="goToFormPage()">SUGGESTIONS</button>
            </div>
        </div>
    </div>

    <script>
        function goToFormPage() {
            window.location.href = "form.php";
        }
    </script>
</body>
</html>
