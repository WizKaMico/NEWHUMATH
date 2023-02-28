<!-- Add New -->
<div class="modal fade" id="addquestion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add Question</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="question.php">
				<div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label modal-label">QUESTION :</label>
					</div>
					<div class="col-sm-12">
						<input type="text" class="form-control" name="question" required="">
						<input type="hidden" class="form-control" name="qid" value="<?php echo $q; ?>" required="" readonly="">
					</div>
				</div>
			
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="add" class="btn btn-primary" style="background-color:#1ddd9f; border-color:#1ddd9f;"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
			</form>
            </div>

        </div>
    </div>
</div>