<?php
session_start();
if(isset($_POST['name'])){
	$name = $_POST['name'];
	$phoneNo = $_POST['phoneNo'];
	$dateOfBirth = $_POST['dateOfBirth'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$cPassword = $_POST['cPassword'];

	if($password != $cPassword){
		$_SESSION['pass_alert'] = '1';
		echo "Not Done";
		header('location: sns/index.php');
	}
	else{
	//Database Connection Code
	$conn = new mysqli('localhost','root','','project299');
	if($conn->connect_error){
		die('Connection	: Failed'.$conn->connect_error);
	}else{
		$checkEmail = "SELECT * FROM signup where email = '$email'";
		$resCheckEmail = mysqli_query($conn, $checkEmail);
		$checkPhone = "SELECT * FROM signup where PhoneNo = '$phoneNo'";
		$resCheckPhone = mysqli_query($conn, $checkPhone);
		$emailUniqueCounter = mysqli_num_rows($resCheckEmail);
		$phoneUniqueCounter = mysqli_num_rows($resCheckPhone);
		if($emailUniqueCounter>0){
			$_SESSION['email_alert'] = '1';
			echo "Email/Phone No. already exists";
			header('location: sns/index.php');
		}else if($phoneUniqueCounter>0){
			$_SESSION['phone_alert'] = '1';
			echo "Phone No. already exists";
			header('location: sns/index.php');
		}
		else{
		$stmt = $conn->prepare("insert into signup(PhoneNo, UserName, DateofBirth, Email, Password) values(?,?,?,?,?)");
		$stmt->bind_param("sssss",$phoneNo,$name, $dateOfBirth, $email, $password);
		$stmt->execute();
		echo "DONE";
		$stmt->close();
		$conn->close();
		$_SESSION['login_alert'] = '1';
		// header('location: login.php');
		header('location: sns/index.php');
		}
	}
}
}
?>

<!--

	$connection = mysqli_connect("localhost","root","","project299");
	$sql = "INSERT INTO 'signup'('PhoneNo', 'UserName', 'DateofBirth', 'Email', 'Password') VALUES ('$phoneNo','$name','$dateOfBirth','$email','$password')"
	$result = mysqli_query($connection, $sql);
	if($result == true){
		echo "<h1>DONE!!!</h1>";
	}
}
-->