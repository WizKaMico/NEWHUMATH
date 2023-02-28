<!--  -->
<div class="modal fade" id="editanswer_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">EDIT ANSWER</h4></center>
            </div>
            <form method="POST" action="edit_answer.php">   
            <div class="modal-body">

            <div class="row form-group">

                    <div class="col-sm-3">
                        <label class="control-label modal-label">EDIT SELECTION ANSWER  :</label>
                    </div>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" name="answer" value="<?php echo $row['answer']; ?>" required="">
                        <input type="hidden" class="form-control" name="answer_id" value="<?php echo $row['id']; ?>" required="" readonly="">
                        <input type="hidden" class="form-control" name="qid" value="<?php echo $q; ?>" required="" readonly="">
                    </div>
                </div>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                 <button type="submit" name="add" class="btn btn-primary" style="background-color:#1ddd9f; border-color:#1ddd9f;"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
            </div>
            </form>

        </div>
    </div>
</div>
