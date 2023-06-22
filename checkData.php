
<?php
    session_start();
    $conn = mysqli_connect("localhost","root", "","project299") or die("Connection Failed");
    if(!empty($_POST['login']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $query = "select email,password from signup where email ='$email' and password = '$password'";
        $result = mysqli_query($conn,$query);
        $flag = mysqli_num_rows($result);
        if($flag > 0){
            // echo "DONE";
            header('location: user.php');
        }else{
            $_SESSION['login_alert'] = '1';
            header('location: sns/index.php');
        }
    }



?>