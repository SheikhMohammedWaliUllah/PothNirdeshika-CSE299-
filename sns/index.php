<?php
session_start();
$message = '';
$message2 = '';
if(isset($_SESSION['email_alert']))
{
    $message = 'Email address already registered';

}
if(isset($_SESSION['pass_alert']))
{
    $message = 'Passwords didnt match!!';
}
if(isset($_SESSION['phone_alert']))
{
    $message = 'Phone No. already registered';

}
if(isset($_SESSION['login_alert']))
{
    $message2 = 'User/pass incorrect';

}
?>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login page</title>
  <link rel="stylesheet" href="styles.css"/>
  <link rel="stylesheet" href="homepage.php">
  <script src="https://kit.fontawesome.com/7b39153ed3.js" crossorigin="anonymous"></script>
  <style>
    .navbar {
      width: 90%;
      padding-bottom: 55px;
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
            <li><a id="homeButton" href="../homepage.php">HOME</a></li>
            <li><a id="aboutButton" href="../about.php">ABOUT</a></li>
            <li><a id="adminButton" href="../adminlogin.php">ADMIN</a></li>
            <li><a id="userButton" href="../sns/index.php">USER</a></li>
        </ul>
    </div>


  <div class="container" id="container">

    <!-- sign Up form section start-->
    <div class="form sign_up">

      <form onsubmit="checkentry()" action="../getData.php" method="POST">
        <!-- heading -->
        <h1>Create An Account</h1>
        <h2><?php echo $message ?></h2>
        <!-- social media icons -->
        <div class="social-container">
          <a href="#"><i class="fa-brands fa-facebook"></i></a>
          <a href="#"><i class="fa-brands fa-google"></i></a>
          <a href="#"><i class="fa-brands fa-linkedin"></i></a>
        </div>
        <span>Use email for registration</span>

        <!-- input fields start -->
        <input type="text" name="name" id ="name" placeholder="Username" required>
        <input type="Phone no." name="phoneNo" id="phoneNo" placeholder="Phone no." required>
        <input type="Date of Birth" name="dateOfBirth" id="dateOfBirth" placeholder="Date of Birth" required>
        <input type="Email" name="email" id="email" placeholder="Email">
        <input type="password" name="password" class="password" id="password" placeholder="Password" required>
        <input type="password" class="cPassword" name="cPassword" id="cPassword" placeholder="Confirm Password" required>
        <button class="button" type="submit" value="submit">Create Account</button>
        <!-- input fields end -->

      </form>
    </div>
    <!-- signUp form section end-->


    <!-- signin form section start-->
    <div class="form sign_in">
      <form action="../checkData.php" method="POST">
        <!-- heading -->
        <h1>Login</h1>
        <h2><?php echo $message2 ?></h2>
        <!-- social media icons -->
        <div class="social-container">
          <a href="#"><i class="fa-brands fa-facebook"></i></a>
          <a href="http://localhost/PF299/"><i class="fa-brands fa-google"></i></a>
          <a href="#"><i class="fa-brands fa-linkedin"></i></a>
        </div>
        <span>Login with your Account</span>

        <!-- input fields start -->
        <input type="Email" name="email" placeholder="Email"> <br>
        <input type="Password" name="password" placeholder="Password">
        <span>Forgot your <span class="forgot">password?</span></span>
        <button type="submit" name ="login" value="login">Login</button>
        <!-- input fields end -->
      </form>
    </div>
    <!-- sign in form section end-->

    <!-- overlay section start-->
    <div class="overlay-container">
      <div class="overlay">
        <div class="overlay-pannel overlay-left">
          <h1>Already have an account</h1>
          <p>Please Login</p>
          <button id="signIn" class="overBtn">Sign In</button>
        </div>
        <div class="overlay-pannel overlay-right">
          <h1>Create Account</h1>
          <p>Start Your Journey with Us</p>
          <button id="signUp" class="overBtn">Sign Up</button>
        </div>
      </div>
    </div>
    <!-- overlay section start-->
  </div>
  <script src="./app.js"></script>
  <script type="text/javascript">

  function checkentry() {
        var pass = document.getElementById("password").value;
        var cPass = document.getElementById("cpassword").value;
        if (pass == cPass) {
            alert("Password Matched!!!");
        } else {
            alert("Password didn't match!!");
            return false;
        }
        return true;
    }
    </script>
    <?php unset($_SESSION['email_alert']) ?>
    <?php unset($_SESSION['pass_alert']) ?>
    <?php unset($_SESSION['phone_alert']) ?>
    <?php unset($_SESSION['login_alert']) ?>
</body>

</html>