<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add New</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">TOPIC:</label>
					</div>
					<div class="col-sm-10">
						<select class="form-control" name="tid" required="">
							<?php 
							include_once('../../../connection/connection.php');
							$sql = "SELECT *, resource_topic.id as chid FROM resource_topic LEFT JOIN topic_assesment ON resource_topic.id = topic_assesment.tid";

							//use for MySQLi-OOP
							$query = $conn->query($sql);
							while($row = $query->fetch_assoc()){
							?>
							<?php if($row['tid'] == null){ ?>
							<option value="<?php echo $row['chid']; ?>"><?php echo $row['topic_name']; ?></option>
						    <?php } else { ?>
							<?php } ?>
						    <?php } ?>
						</select>
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