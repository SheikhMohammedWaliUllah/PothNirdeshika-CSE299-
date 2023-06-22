<?php
$message = '';
$conn = mysqli_connect("localhost","root", "","admininfo") or die("Connection Failed");
if(!empty($_POST['submit']))
{
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $query = "select user,pass from admin where user ='$user' and pass = '$pass'";
    $result = mysqli_query($conn,$query);
    $flag = mysqli_num_rows($result);
    if($flag > 0){
        echo "DONE";
        header('location: adminNew.php');
    }else{
      $message = 'user/pass incorrect'; 
      // echo '<span style="color:#AFA;text-align:left;"> NOT DONE </span>';
    }
}



?>








<!DOCTYPE html>
<html>
<head>
  <title>Login with Google</title>
  <link rel="stylesheet" type="text/css" href="adminlogin.css">
  
  

  <style>
    body {
            font-family: Arial, sans-serif;
            background-image: url('path.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
    
        .container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
    
        h1 {
            text-align: center;
            margin-top: 150px;
            color: #7d7 ;
        }
        h4 {
           
           
            color: white ;
        }
    .navbar {
      width: 100%;
      padding-bottom: 700px;
      padding-left: 100px;
      margin: auto;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .navbar .logo {
      width: 70px;
      margin-top: -10px;
      cursor: pointer;
    }

      .navbar ul {
	     list-style: none;
	     display: flex;
  }

    .navbar ul li {
      list-style: none;
      display: inline-block;
      margin: 20px;
    }

    .navbar ul li a {
      text-decoration: none;
      text-transform: uppercase;
      color: rgb(179, 182, 0);
      font-weight: 600;
      padding: 15px;
    }

    li a:hover {
      background: white;
      transition: 0.5s;
    }

    .navbar a:hover {
      color: black;
    }
  </style>
</head>
<body>
<div class="navbar">
        <img class="logo" src="logo.jpg">
        <ul>
            <li><a id="homeButton" href="homepage.php">HOME</a></li>
            <li><a id="aboutButton" href="about.php">ABOUT</a></li>
            <li><a id="adminButton" href="adminlogin.php ">ADMIN</a></li>
            <li><a id="userButton" href="sns/index.php">USER</a></li>
        </ul>
    </div>
  <div class="container">
   
    <h2>Login</h2>
     <h4><?php echo $message ?></h4>
    <div id="g_id_onload"
         data-client_id="YOUR_GOOGLE_CLIENT_ID"
         data-callback="handleCredentialResponse">
    </div>
    <div id="g_id_signin"></div>
    <form id="login-form" method="POST">
      <div class="form-group">
        <input type="text" id="user" name="user" required>
        <label for="email">Username</label>
      </div>
      <div class="form-group">
        <input type="password" id="pass" name="pass" required>
        <label for="password">Password</label>
      </div>
      
      <button type="submit" class="btn" id="submit" value="submit" name="submit">Sign in</button>
      <p class="or">or</p>
      <button type="button" class="btn google-btn" onclick="signInWithGoogle()">
        <img src="google-icon.png" alt="Google Icon" class="google-icon">
        Sign in with Google
      </button>
    </form>
  </div>
  <?php unset($message) ?>
</body>
</html>

    