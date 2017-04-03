
<div class="container-fluid">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="index.php">すごい</a>
	</div>

	<div class="collapse navbar-collapse" id="myNavbar">	
		<ul class="nav navbar-nav">
			<li class="active"><a href="home.php">Home</a></li>
			<li><a href="visualnovel.php">Visual Novel</a></li>
			<!-- characters -->
			<li><a href="characters.php">Characters</a></li>
			

		</ul>



		<ul	class="nav navbar-nav navbar-right">	
			<li><a href="#" data-toggle="modal" data-target="#registermodal">
			<span class="glyphicon glyphicon-user"></span> Register</a></li>

			<li>
			<a href="#" data-toggle="modal" data-target="#loginmodal">
			<span class="glyphicon glyphicon-log-in"></span> Login</a>
			</li>

			

			

				<?php if(isset($_SESSION['username'])){

				?>

				<li><a href="parts/logout.php">Logout</a></li>
				<?php } else {echo "";}
				?>

			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="">
				<span class="glyphicon glyphicon-search"></span></a>
				<ul class="dropdown-menu">
					<input type="text" placeholder="Search keyword.." id="myInput" onkeyup="filterFunction()">

					<li>Others</li>
					
				</ul>
			</li>
		</ul>
	</div>
</div>	

	