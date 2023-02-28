<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['rid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">EDIT RESOURCE</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit_resources.php">
				<input type="hidden" class="form-control" name="rid" value="<?php echo $row['rid']; ?>">
				<div class="row form-group">	
					<div class="col-sm-12">
					    <label class="control-label modal-label">RESOURCE</label>
						<input type="text" class="form-control" name="resource_name" value="<?php echo $row['resource_name']; ?>"  required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-12">
						<label class="control-label modal-label">RESOURCE DESCRIPTION :</label>
						<textarea class="form-control" name="resource_description"  required=""><?php echo $row['resource_description']; ?></textarea>
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="edit" class="btn btn-success" style="background-color:#1ddd9f; border-color:#1ddd9f;"><span class="glyphicon glyphicon-check"></span> Update</a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['rid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">DELETE RESOURCE</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Are you sure you want to Delete</p>
				<h2 class="text-center"><?php echo $row['resource_description']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="delete_resource.php?rid=<?php echo $row['rid']; ?>" class="btn btn-danger" style="background-color:#1ddd9f; border-color:#1ddd9f;"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>