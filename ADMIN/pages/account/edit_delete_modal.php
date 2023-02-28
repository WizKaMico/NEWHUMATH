<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['user_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">EDIT INFORMATION</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit.php">
				<input type="hidden" class="form-control" name="user_id" value="<?php echo $row['user_id']; ?>">
				<div class="row form-group">
					
					<div class="col-sm-12">
					    <label class="control-label modal-label">STUDENT NUMBER :</label>
						<input type="number" class="form-control" name="student_no" value="<?php echo $row['student_no']; ?>" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-12">
						<label class="control-label modal-label">FIRSTNAME :</label>
						<input type="text" class="form-control" name="fname" value="<?php echo $row['fname']; ?>" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-12">
						<label class="control-label modal-label">LASTNAME :</label>
						<input type="text" class="form-control" name="lname" value="<?php echo $row['lname']; ?>" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-12">
						<label class="control-label modal-label">EMAIL :</label>
						<input type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-12">
						<label class="control-label modal-label">GENDER :</label>
						<select class="form-control" name="gender" required="">
							<option value="<?php echo strtoupper($row['gender']); ?>"><?php echo strtoupper($row['gender']); ?> (CURRENT)</option>
							<option value="MALE">MALE</option>
							<option value="FEMALE">FEMALE</option>
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
<div class="modal fade" id="delete_<?php echo $row['user_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">DELETE ACCOUNT</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Are you sure you want to Delete</p>
				<h2 class="text-center"><?php echo $row['fname'].' '.$row['lname']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="delete.php?user_id=<?php echo $row['user_id']; ?>&email=<?php echo $row['email'];  ?>" class="btn btn-danger" style="background-color:#1ddd9f; border-color:#1ddd9f;"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>