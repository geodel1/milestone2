<div>
	<button type="button" class="btn btn-info btn-lg center-block glyphicon glyphicon-plus col-xs-12 col-sm-4" data-toggle="modal" data-target="#add<?php echo $id; ?>" ; 
	>ADD 
	</button><!-- modal start -->
	<div class="modal fade" id="add<?php echo $id; ?>" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h3 class="modal-title">Add Character</h3>
				</div>

				<div class="modal-body">
					<form class="form-group" method="POST" action='parts/addcharacter.php?id=<?php echo $id; ?>'>
						<div class="form-group">
							<label for="name">Name:</label>
							<input class="textcolor form-control" type="text" name="name" >
							
						</div>
						<div class="form-group">
							<label for="alias">Alias:</label>
							<input class="textcolor form-control" type="text" name="alias" >
						</div>
						<div class="form-group">
							<label for="description">Description:</label>
							<input class="textcolor form-control" type="text" name="description" >
						</div>
						<div class="form-group">
							<label for="talents">Talents:</label>
							<input class="textcolor form-control" type="text" name="talents" >
						</div>
						<div class="form-group">
							<label for="price">Gender:</label>
							<input class="textcolor form-control" type="text" name="gender" >
						</div>
						<div class="form-group">
							<label for="likes">Likes:</label>
							<input class="textcolor form-control" type="text" name="likes" >
						</div>
						<div class="form-group">
							<label for="dislikes">Dislikes:</label>
							<input class="textcolor form-control" type="text" name="dislikes" >
						</div>
						<div class="form-group">
							<label for="image">Image:</label>
							<input class="textcolor form-control" type="text" name="image" >
						</div>
						<button class="btn btn-default" type="submit" name="add">Add Character</button>
					</form>
				</div>
			    <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			    </div>
			</div>
		</div>
	</div><!-- modal end -->
</div>