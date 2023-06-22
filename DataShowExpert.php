<?php
$conn = new mysqli('localhost','root','','education');
	if($conn->connect_error){
		die('Connection	: Failed'.$conn->connect_error);
	}else{  
        $query="select * from colleges"; 
        $result= mysqli_query($conn,$query); 
}
?>
<!DOCTYPE html> 
<html> 
	<head> 
		<title> Fetch Data From Database </title> 
	</head> 
	<body> 
	<table align="center" border="1px" style="width:600px; line-height:40px;"> 
	<tr> 
		<th colspan="6"><h2>Experts Record</h2></th> 
		</tr> 
			  <th> ID </th> 
			  <th> Name </th> 
			  <th> Address </th> 
			  <th> Phone No </th> 
              <th> latitude </th> 
              <th> Longitude </th> 
			  
		</tr> 
		
		<?php while($rows=mysqli_fetch_assoc($result)) 
		{ 
		?> 
		<tr> <td><?php echo $rows['id']; ?></td> 
		<td><?php echo $rows['name']; ?></td> 
		<td><?php echo $rows['address']; ?></td> 
		<td><?php echo $rows['type']; ?></td> 
        <td><?php echo $rows['lat']; ?></td>
        <td><?php echo $rows['lng']; ?></td>
        
		</tr> 
	<?php 
               } 
          ?> 

	</table> 
	</body> 
	</html>