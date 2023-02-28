<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">ADD HOME CONTENT</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">TAG:</label>
					</div>
					<div class="col-sm-12">
						<select class="form-control" name="tag" required="">
							<option value="WEBSITE CAN DO FOR YOU">WEBSITE CAN DO FOR YOU</option>
							<option value="HOW IT WORKS">HOW IT WORKS</option>
						</select>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">TITLE:</label>
					</div>
					<div class="col-sm-12">
						<input type="text" class="form-control" name="title" required="">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">LINK:</label>
					</div>
					<div class="col-sm-12">
						<input type="text" class="form-control" name="link" required="">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label modal-label">DESCRIPTION:</label>
					</div>
					<div class="col-sm-12">
						<textarea class="form-control" name="description" required=""></textarea>
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="add" class="btn btn-primary" style="background-color:#1ddd9f; border-color:#1ddd9f;"><span class="glyphicon glyphicon-floppy-disk"></span>UPLOAD</a>
			</form>
            </div>

        </div>
    </div>
</div>