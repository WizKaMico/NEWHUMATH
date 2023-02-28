<!-- Add New -->
<div class="modal fade" id="addtopic" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">ADD A TOPIC</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add_resource_topic.php">
				<div class="row form-group">
					
					<div class="col-sm-12">
						<input type="hidden" class="form-control" name="rid" value="<?php echo $rid; ?>" required>
					    <label class="control-label modal-label">TOPIC NAME</label>
						<input type="text" class="form-control" name="topic_name" required>
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