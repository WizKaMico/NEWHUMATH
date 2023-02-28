<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">ADD ANNOUNCEMENT</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add.php">
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">ANNOUNCEMENT:</label>
					</div>
					<div class="col-sm-12">
						<input type="text" class="form-control" name="announcement" required="">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">STATUS:</label>
					</div>
					<div class="col-sm-12">
						<select class="form-control" name="status" required="">
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
							<option value="MARQUEE">MARQUEE</option>
							<option value="PROMPT">PROMPT</option>
						</select>
					</div>
				</div>
				
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="add" class="btn btn-primary" style="background-color:#1ddd9f; border-color:#1ddd9f;"><span class="glyphicon glyphicon-floppy-disk"></span>SAVE</a>
			</form>
            </div>

        </div>
    </div>
</div>