<?php


if(isset($_POST['save'])){
	$id = $_GET['id'];
	require('connection.php');
	$name = $_POST['name'];
	$alias = $_POST['alias'];
	$description = $_POST['description'];
	$talents = $_POST['talents'];
	$gender = $_POST['gender'];
	$likes = $_POST['likes'];
	$dislikes = $_POST['dislikes'];
	$image = $_POST['image'];



	$sql = "UPDATE characters SET name = '$name', alias = '$alias', description = '$description', talents = '$talents', gender = '$gender', likes = '$likes', dislikes = '$dislikes', image = '$image' WHERE id = '$id'";
	mysqli_query($conn,$sql);
}




header("Location:../characters.php");




?>