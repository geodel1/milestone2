
			<!-- modal-content log-in -->
			<div class="modal fade" id="loginmodal" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

				<div class="modal-dialog">
				<div class="loginmodal-container">
					<h1>Login to Your Account</h1><br>
				  	<form method='post' action='parts/login.php'>
						<input type="text" name="username" placeholder="Username">
						<input type="password" name="password" placeholder="Password">
						<input type="submit" name="login" class="login loginmodal-submit" value="Login">
				  	</form>
				
				  	<div class="login-help">
				     <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button> 
				     <a href="" style="color:black;">Register</a> -
				     <a href="#" style="color:black;">Forgot password</a>
				    </div>

				</div>
				</div>
			</div>