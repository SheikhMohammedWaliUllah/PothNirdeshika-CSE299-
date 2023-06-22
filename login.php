<?php
session_start();
$message = '';
if(isset($_SESSION['login_alert'])){
    $message = 'Data Inserted. You can login now!!';

}

?>

 <!DOCTYPE html>
<html>
<head>
        <link rel="stylesheet" href="signup.css">
        <title> Login</title>
</head>
<body>
    <form action="checkData.php" method="POST">
        <h1>Login Page</h1>
        <h4> <?php echo $message?> </h4>
        <label for="Email">Email Address:</label>
        <input type="Email" name="email" placeholder="Email"> <br>
        <label for="Password">Password:</label>
        <input type="Password" name="password" placeholder="Password"> <br>
        <button type="submit" name ="login" value="login">Login</button>
        <h4>If you didn't sign up yet, you can try to sign up <a href="signup.php">Click Here</a></h4>
        
    </form>
    <?php unset($_SESSION['login_alert']) ?>
</body>
</html>




                