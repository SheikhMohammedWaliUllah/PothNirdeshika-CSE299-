<?php
$conn = new mysqli('localhost','root','','project299');
if($conn->connect_error){
    die('Connection: Failed'.$conn->connect_error);
} else {  
    $query = "select * from signup"; 
    $result = mysqli_query($conn, $query); 
}
?>
<!DOCTYPE html> 
<html> 
<head> 
    <title>Fetch Data From Database</title> 
    <style>
        /* CSS styles for the button */
        .back-button {
            position: fixed;
            top: 0;
            left: 0;
            margin: 10px;
            background-color: #3EC61D;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            font-size: 16px;
            border-radius: 4px;
        }

        /* CSS hover effect */
        .back-button:hover {
            background-color: #36E756;
        }
    </style>
</head> 
<body> 
    <table align="center" border="1px" style="width:600px; line-height:40px;"> 
        <tr> 
            <th colspan="5"><h2>User Record</h2></th> 
        </tr> 
        <tr> 
            <th>Phone No</th> 
            <th>User Name</th>  
            <th>Email add</th> 
            <th>Password</th> 
        </tr> 
        
        <?php while($rows=mysqli_fetch_assoc($result)) { ?> 
        <tr>
            <td><?php echo $rows['PhoneNo']; ?></td> 
            <td><?php echo $rows['UserName']; ?></td> 
            <td><?php echo $rows['Email']; ?></td> 
            <td><?php echo $rows['Password']; ?></td>
        </tr> 
        <?php } ?> 
    </table> 

    <!-- Back button with CSS class -->
    <button class="back-button" onclick="location.href='adminNew1.php'">Go Back</button>
</body> 
</html>
