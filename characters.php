<?php

function get_title(){
	echo "Characters page";
}

function display_content(){
	include('parts/connection.php');
	mysqli_set_charset($conn,"UTF8");

	$sql = "SELECT DISTINCT gender FROM characters";
	$result = mysqli_query($conn,$sql);

	echo "<form method='post' action=''>";
	echo "<select name='gender'>";
	echo "<option>All</option>";
	while($row = mysqli_fetch_assoc($result)){
		$gender = $row['gender'];
		if(isset($_POST['gender']) && $_POST['gender']==$gender)
			echo "<option selected>$gender</option>";
		else
			echo "<option>$gender</option>";
	}
	echo "</select> <input type='submit' name='search' value='Search'>";
	echo "</form><br>";

	if(isset($_POST['search']) && $_POST['gender']!="All"){
		$gender = $_POST['gender'];
		$sql = "SELECT * FROM characters
		WHERE gender = '$gender'";
	}else
		$sql = "SELECT * FROM characters";

	$result = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_assoc($result)){
		$id = $row['id'];
		$name = $row['name'];
		$alias = $row['alias'];
		$description = $row['description'];
		$talents = $row['talents'];
		$gender = $row['gender'];
		$likes = $row['likes'];
		$dislike = $row['dislikes'];
		$image = $row['image'];


		echo "<div class= 'col-sm-4 col-md-4 col-xs4'> ";
		echo "<div class= 'thumbnail'>";
		echo "<div class='item_image'><img src='$image'></div>";

		echo "<h3>$name</h3> <h5>$alias</h5> $description <br> $talents";
		//echo "<br><a href='editmodal.php?id=$id'><button>Edit</button></a>
		require('parts/editmodal.php');
		echo "<a href='parts/deletecharacters.php?id=$id'><button type='button' class='btn btn-default glyphicon glyphicon-trash'>Delete</button></a>";

		echo "<div style='clear:both'></div>";

		echo "</div>";
		echo "</div>";
	}
	echo "<div class= 'col-sm-4 col-md-4 col-xs4'> ";
		echo "<div class= 'thumbnail'>";
		
		require('parts/addcharacterform.php');
	
		

		echo "<div style='clear:both'></div>";

		echo "</div>";
		echo "</div>";


}


require_once('template.php');

?>