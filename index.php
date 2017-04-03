<?php
	session_start();

?>
<!DOCTYPE HTML>

<html>
<head>
	<title>Battle royal</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
	<div id="background" class="container-fluid col-md-12 col-sm-12 col-xs-12">



		<nav class="navbar navbar-inverse navbar-fixed-top">
			
			<?php  require_once('parts/navigation.php');
			?>
			
		</nav>
		<!-- </div> -->

		<?php require('parts/modallogin.php'); 
			  require('parts/modalregister.php');
		?>


		<div class="container col-sm-12 col-md-12 col-xs-12">

			

			<div id="body" >
				
					
				<div class="section container">
					<div id="caption">
						<img src="images/battleroyal2.gif">	
						<div class="caption">
							<h3>Monokuma on loose to create havoc.</h3>
							<h5>Students were gathered to experience an environment full of murderous intent and deceptions.</h5>
							<h5>Choose your character.</h5>
							<h3>Judgment calls!</h3>
						</div>

					</div>
					
				</div>
			
			</div>

		</div>

		<div class="container-fluid col-sm-12 col-md-12 col-xs-12">
			<div id="footer">
				
				<?php require_once('parts/footer.php');
				?>
				
			</div>
		</div>

	</div>
</body>
</html>