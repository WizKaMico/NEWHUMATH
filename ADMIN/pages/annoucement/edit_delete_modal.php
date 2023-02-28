<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">EDIT ANNOUNCEMENT</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit.php">
				<input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">ANNOUNCEMENT:</label>
					</div>
					<div class="col-sm-12">
						<input type="text" class="form-control" name="announcement" value="<?php echo $row['announcement']; ?>" required="">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">STATUS:</label>
					</div>
					<div class="col-sm-12">
						<select class="form-control" name="status" required="">
							<option value="<?php echo $row['status']; ?>"><?php echo $row['status']; ?> (CURRENT)</option>
							<option value="ACTIVE">ACTIVE</option>
							<option value="IN-ACTIVE">IN-ACTIVE</option>
						</select>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">TYPE:</label>
					</div>
					<div class="col-sm-12">
						<select class="form-control" name="type" required="">
							<option value="<?php echo $row['type']; ?>"><?php echo $row['type']; ?> (CURRENT)</option>
							<option value="MARQUEE">MARQUEE</option>
							<option value="PROMPT">PROMPT</option>
						</select>
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
<div class="modal fade" id="delete_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Delete Annoucement</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Are you sure you want to Delete</p>
				<h2 class="text-center"><?php echo $row['announcement']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" style="background-color:#1ddd9f; border-color:#1ddd9f;"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>