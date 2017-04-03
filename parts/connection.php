<?php
	$host = 'localhost';
	$username = 'root';
	$password = '';
	$database = 'milestone2';
	$conn =mysqli_connect($host,$username,$password,$database);
	if (!$conn) 
		die("Connection failed:".mysqli_connect_error());
	else
		echo "";
	echo "<br>";


// run queries
// $sql = "SELECT * FROM songs";
// $result = mysqli_query($conn,$sql);
// print_r($result);
// echo "<br>";

// to convert to associative array

// while ($row =mysqli_fetch_assoc($result)){
// 	print_r($row);
// 	echo "<br>";
// }

// while ($row =mysqli_fetch_assoc($result)){
// 	echo $row['id']."  ".$row ['title']."<br>";
// }


?>
