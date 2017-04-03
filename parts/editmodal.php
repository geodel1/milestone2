<div>
	<button type="button" class="btn btn-default glyphicon glyphicon-edit col-xs-12 col-sm-4" data-toggle="modal" data-target="#edit<?php echo $id; ?>">Edit</button><!-- modal start -->
	<div class="modal fade" id="edit<?php echo $id; ?>" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h3 class="modal-title">Edit <?php echo "$name "; ?>Character</h3>
				</div>

				<div class="modal-body">
					<form class="form-group" method="POST" action='parts/edit.php?id=<?php echo $id; ?>'>
						<div class="form-group">
							<label for="name">Name:</label>
							<input class="textcolor form-control" type="text" name="name" value="<?php echo $name; ?>">
							
						</div>
						<div class="form-group">
							<label for="alias">Alias:</label>
							<input class="textcolor form-control" type="text" name="alias" value="<?php echo $alias; ?>">
						</div>
						<div class="form-group">
							<label for="description">Description:</label>
							<input class="textcolor form-control" type="text" name="description" value="<?php echo $description; ?>">
						</div>
						<div class="form-group">
							<label for="talents">Talents:</label>
							<input class="textcolor form-control" type="text" name="talents" value="<?php echo $talents; ?>">
						</div>
						<div class="form-group">
							<label for="price">Gender:</label>
							<input class="textcolor form-control" type="text" name="gender" value="<?php echo $gender; ?>">
						</div>
						<div class="form-group">
							<label for="likes">Likes:</label>
							<input class="textcolor form-control" type="text" name="likes" value="<?php echo $likes; ?>">
						</div>
						<div class="form-group">
							<label for="dislikes">Dislikes:</label>
							<input class="textcolor form-control" type="text" name="dislikes" value="<?php echo $dislikes; ?>">
						</div>
						<div class="form-group">
							<label for="image">Image:</label>
							<input class="textcolor form-control" type="text" name="image" value="<?php echo $image; ?>">
						</div>
						<button class="btn btn-default" type="submit" name="save">Save Changes</button>
					</form>
				</div>
			    <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			    </div>
			</div>
		</div>
	</div><!-- modal end -->
</div>