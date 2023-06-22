<?php
$conn = new mysqli('localhost','root','','expertlocation');
	if($conn->connect_error){
		die('Connection: Failed'.$conn->connect_error);
	}else{  
        $query="select * from markers"; 
        $result= mysqli_query($conn,$query); 
}
?>
<!DOCTYPE html> 
<html> 
<head> 
	<title>Fetch Data From Database</title> 
	<style>
		body {
			margin: 0;
			padding: 0;
		}

		.container {
			margin: 20px;
		}

		.button-container {
			position: fixed;
			top: 0;
			left: 0;
			margin: 20px;
			display: flex;
			align-items: center;
		}

		.button-container button {
			background-color: #3EC61D;
			color: black;
			padding: 10px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			transition: background-color 0.3s ease;
		}

		.button-container button:hover {
			background-color: #36E756;
		}
	</style>
</head> 
<body> 
	<div class="container">
		<table align="center" border="1px" style="width:600px; line-height:40px;"> 
			<tr> 
				<th colspan="6"><h2>Experts Record</h2></th> 
			</tr> 
			<tr> 
				<th>ID</th> 
				<th>Name</th> 
				<th>Address</th> 
				<th>Phone No</th> 
				<th>Latitude</th> 
				<th>Longitude</th> 
			</tr> 
			
			<?php while($rows=mysqli_fetch_assoc($result)) { ?> 
				<tr>
					<td><?php echo $rows['id']; ?></td> 
					<td><?php echo $rows['name']; ?></td> 
					<td><?php echo $rows['phone']; ?></td> 
					<td><?php echo $rows['type']; ?></td> 
					<td><?php echo $rows['lat']; ?></td>
					<td><?php echo $rows['lng']; ?></td>
				</tr> 
			<?php } ?> 
		</table>
	</div>

	<div class="button-container">
		<button type="button" onclick="location.href='adminNew1.php'">Go Back</button>
	</div>
</body> 
</html>
