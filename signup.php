<?php
session_start();
$message = '';
if(isset($_SESSION['email_alert'])){
    $message = 'Email address already registered';

}
if(isset($_SESSION['pass_alert'])){
    $message = 'Passwords didnt match!!';
}
if(isset($_SESSION['phone_alert'])){
    $message = 'Phone No. already registered';

}

?>

<!DOCTYPE html>
<html>



<head>
<title> SignUp</title>
<link rel="stylesheet" type="text/css" href="style(Signup.css">
</head>
<body>
    <!-- <form onsubmit="checkentry()" action="getData.php" method="POST">
        <h1>SignUp</h1>
        <h2><?php echo $message ?> </h2>
        <input type="text" name="name" id ="name" placeholder="Username" required> <br>
        <input type="Phone no." name="phoneNo" id="phoneNo" placeholder="Phone no." required> <br>
        <input type="Date of Birth" name="dateOfBirth" id="dateOfBirth" placeholder="Date of Birth" required><br>
        <input type="Email" name="email" id="email" placeholder="Email" required><br>
        <input type="Password" name="password" class="password" id="password" placeholder="Password" required><br>
        <input type="Password" class="cPassword" name="cPassword" id="cPassword" placeholder="Confirm Password" required><br>
        <button class="button" type="submit" value="submit" >SignUp</button>
        <h4>If you already signed up, you can try to login <a href="login.php">Click Here</a></h4>
        <h4>If you want to sign up using google <a href="index.php">Click Here</a></h4>
        
    </form> -->

    <div class="Signup-box">
          <h2>SignUp</h2>
          <h2><?php echo $message ?> </h2>
          <form onsubmit="checkentry()" action="getData.php" method="POST">
      
            <div class="user-box">
              <input type="text" name="name" id ="name" placeholder="Username" required>
              <label>Username</label>
            </div>
      
            <div class="user-box">
        <input type="Phone no." name="phoneNo" id="phoneNo" placeholder="Phone no." required> <br>
              
              <label>Phone no</label>
            </div>
      
            <div class="user-box">
        <input type="Date of Birth" name="dateOfBirth" id="dateOfBirth" placeholder="Date of Birth" required><br>
              
              <label>Date of Birth</label>
            </div>
      
            <div class="user-box">
            <input type="Email" name="email" id="email" placeholder="Email" required>
              <label>Email</label>
            </div>
      
            <div class="user-box">
            <input type="password" name="password" class="password" id="password" placeholder="Password" required>
              <label>Password</label>
            </div>
      
            <div class="user-box">
            <input type="password" class="cPassword" name="cPassword" id="cPassword" placeholder="Confirm Password" required>
              <label>Confirm Password</label>
            </div>
            <button class="button" type="submit" value="submit" >SignUp</button>
            <a href="#">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
                  
            </a>
          </form>
        </div> 
    <script type="text/javascript">
    // function checkentry(){
    // var pass = document.getElementById("password");
    // var cPass = document.getElementById("cpassword");
    // if(pass == cPass){
    //     alert("Password Matched!!!");
    // }else {
    //     alert("Password didn't match!!");
    //     return false;
    // }
    // return true;
    // }

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
</body>
</html>