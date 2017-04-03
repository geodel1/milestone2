<?php

$id = $_GET['id'];
require('connection.php');

$sql = "DELETE FROM characters WHERE id = '$id'";
mysqli_query($conn,$sql);


header("Location:../characters.php");

?>
