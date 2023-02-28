<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">REGISTER A ADMIN</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add.php">
				
				<div class="row form-group">
					<div class="col-sm-12">
						<label class="control-label modal-label">FIRSTNAME :</label>
						<input type="text" class="form-control" name="fname" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-12">
						<label class="control-label modal-label">LASTNAME :</label>
						<input type="text" class="form-control" name="lname" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-12">
						<label class="control-label modal-label">EMAIL :</label>
						<input type="email" class="form-control" name="email" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-12">
						<label class="control-label modal-label">PASSWORD :</label>
						<input type="password" class="form-control" name="password" required>
					</div>
				</div>
				

            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
			</form>
            </div>

        </div>
    </div>
</div>