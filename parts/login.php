<?php
	$message = "";
	session_start();
	if (isset($_SESSION['message'])) {
		$message = "<div class='alert alert-success'>".$_SESSION['message']."</div>";
		unset($_SESSION['message']);
		
	}

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		include('connection.php');
		$username = $_POST['username'];
		$password = sha1($_POST['password']);
		$sql = "SELECT * FROM user WHERE username = '$username'
		AND password = '$password'";
		echo $sql;
		$result = mysqli_query($conn,$sql);

		if(mysqli_num_rows($result)){
			session_start();
			$_SESSION['message'] = "Login Successful";
			$_SESSION['username'] = $username;
			$_SESSION['role'] = $row['role'];
			header('location:../home.php');				
		}
	}






?>