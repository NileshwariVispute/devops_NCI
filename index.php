<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC"); // using mysqli_query instead
?>

<html>
<head>	
	<title>HomePage</title>
</head>

<body style="background-color:darkcyan">
<a href="add.html" style="color:white;font-weight:900">Add New Booking</a><br/><br/>

	<table width='80%' border=0>
    <tbody style="background-color: white; box-shadow: 110px black;border: 1px solid white;padding: 10px;box-shadow: 5px 10px #888888;">
	<tr bgcolor='#CCCCCC'>
		<td>Name</td>
		<td>Number of people</td>   
		<td>Email</td>
		<td>Update</td>
	</tr>
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['name']."</td>";
		echo "<td>".$res['age']."</td>";
		echo "<td>".$res['email']."</td>";	
		echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</tbody>
	</table>
</body>
</html>
