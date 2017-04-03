<?php 

	include('connection.php');
	mysqli_set_charset($conn,"UTF8");

	$name = mysqli_real_escape_string($conn, $_REQUEST['name']);
	$alias = mysqli_real_escape_string($conn, $_REQUEST['alias']);
	$description = mysqli_real_escape_string($conn, $_REQUEST['description']);
	$talents = mysqli_real_escape_string($conn, $_REQUEST['talents']);
	$gender = mysqli_real_escape_string($conn, $_REQUEST['gender']);
	$likes = mysqli_real_escape_string($conn, $_REQUEST['likes']);
	$dislikes = mysqli_real_escape_string($conn, $_REQUEST['dislikes']);
	$image = mysqli_real_escape_string($conn, $_REQUEST['image']);


	$sql = "INSERT INTO characters (name,alias,description,talents,gender,likes,dislikes,image) VALUES ('$name','$alias','$description','$talents','$gender','$likes','$dislikes','$image')";
	
	if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
	} else{
	    echo "ERROR: Could not able to execute $sql. ".mysqli_error($conn);
	}

	mysqli_close($conn);

	header("Location:../characters.php");

?>


