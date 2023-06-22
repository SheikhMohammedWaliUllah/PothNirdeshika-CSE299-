<?php
$conn = new mysqli('localhost','root','','expertlocation');
	if($conn->connect_error){
		die('Connection	: Failed'.$conn->connect_error);
	}else{  
    if(isset($_POST['Insert'])){
    $id= $_POST['id'];
    $name = $_POST['name'];
    $lat = $_POST['lat'];
    $lng = $_POST['lng'];
    $phone = $_POST['phone'];
    //checking if the data is already available
    $query1 = "SELECT * FROM markers WHERE name='$name' AND phone='$phone'";
    $result1 = mysqli_query($conn,$query1);
    if(mysqli_num_rows($result1) == 0){
    $query = "INSERT INTO markers (id, name, phone, lat, lng , type) VALUE ('$id','$name','$phone','$lat','$lng', 'expert')"; 
    $result = mysqli_query($conn,$query);
    if($result === false){
      echo "<script> alert('Error in insertion'); </script>";
    }else{
      echo "<script> alert('Inserted Succesfully'); </script>";
    }
    }else{
      echo "<script> alert('Data already exists'); </script>";
    }
    }

    //deleting data
    if(isset($_POST['Delete'])){
      $id= $_POST['id'];
      $name = $_POST['name'];
      $phone = $_POST['phone'];
      $lat = $_POST['lat'];
      $lng = $_POST['lng'];
      //checking if the data is already available
      $query1 = "SELECT * FROM markers WHERE name='$name' AND phone='$phone'";
      $result1 = mysqli_query($conn,$query1);
      if(mysqli_num_rows($result1) > 0){
      $query = "DELETE FROM markers WHERE name='$name' AND phone='$phone'"; 
      $result = mysqli_query($conn,$query);
      if($result === false){
        echo "<script> alert('Error in deletion'); </script>";
      }else{
        echo "<script> alert('deleted Succesfully'); </script>";
      }
      }else{
        echo "<script> alert('Data doesn't exists'); </script>";
      }
      }

  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Insert Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 20px;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    form {
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      max-width: 400px;
      width: 100%;
      display: flex;
      flex-direction: column;
    }

    .form-row {
      display: flex;
      align-items: center;
      margin-bottom: 10px;
    }

    .form-row label {
      width: 100px;
      margin-right: 10px;
      text-align: right;
    }

    input[type="text"] {
      flex: 1;
      padding: 8px;
      border-radius: 4px;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    .submit-container {
      display: flex;
      justify-content: center; /* Center the buttons horizontally */
      align-items: center; /* Center the buttons vertically */
      margin-top: 10px;
    }

    .submit-container input[type="submit"],
    .submit-container a,
    .submit-container button {
      background-color: #4CAF50;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      margin-right: 10px; /* Added margin to create space between buttons */
      text-decoration: none; /* Added to remove underline from "Go back to login" button */
    }

    .submit-container input[type="submit"]:hover,
    .submit-container a:hover,
    .submit-container button:hover {
      background-color: #45a049;
    }

    .top-right-button {
      position: absolute;
      top: 10px;
      right: 10px;
    }
    .top-left-button {
      position: absolute;
      top: 10px;
      left: 10px;
    }
  </style>
</head>
<body>
  <form method="post">
    <div class="form-row">
      <label for="id">ID:</label>
      <input type="text" id="id" name="id" required>
    </div>

    <div class="form-row">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
    </div>

    <div class="form-row">
      <label for="address">Address:</label>
      <input type="text" id="address" name="address" required>
    </div>

    <div class="form-row">
      <label for="latitude">Latitude:</label>
      <input type="text" id="latitude" name="lat" required>
    </div>

    <div class="form-row">
      <label for="longitude">Longitude:</label>
      <input type="text" id="longitude" name="lng" required>
    </div>

    <div class="form-row">
      <label for="phone">Phone No.:</label>
      <input type="text" id="phone" name="phone" required>
    </div>

    <div class="submit-container">
      <input type="submit" value="Insert" name="Insert">
      <input type="submit" value="Delete" name="Delete">
      <a href="adminNew1.php" class="top-left-button">Go back</a>
      <button onclick="location.href='adminNew1.php'" class="top-right-button">Expert Info</button>
    </div>
  </form>
</body>
</html>
