<!-- modal-content for register -->
			<div class="modal fade" id="registermodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >

    	  		<div class="modal-dialog">
					<div class="loginmodal-container">
						<h1>
							Register
						</h1><br>
					  	<form method='post' action='parts/register.php'>
							<input type="text" name="username" placeholder="Username">
							<input type="password" name="password" placeholder="Password">
							<input type="password" name="pw2" placeholder="Confirm Password">
							<input type="submit" 
							name="register"
							class="login loginmodal-submit" value="Register">
					  	</form>
					
					  	<div class="login-help">
						    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel
						    </button>
						   
						</div>

					</div>
				</div>
		 	</div>