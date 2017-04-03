<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
			include('connection.php');
			
			if($_POST['password']==$_POST['pw2']){
				$username = $_POST['username'];
				$password = sha1($_POST['password']);
				$sql = "INSERT INTO users (username,password,role) VALUES ('$username','$password','regular')";
				$result = mysqli_query($conn,$sql);
				if($result){
					session_start();
					$_SESSION['message'] = "Registration Successful";
					header('location:../home.php');
				}
			}
		}

?>
