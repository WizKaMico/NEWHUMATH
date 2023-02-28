<!--  -->
<div class="modal fade" id="addanswer_<?php echo $row['qq']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">ADD QUESTION SELECTION</h4></center>
            </div>
            <form method="POST" action="add_answer.php">   
            <div class="modal-body">

            <div class="row form-group">

                    <div class="col-sm-3">
                        <label class="control-label modal-label">ANSWER  :</label>
                    </div>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" name="answer" required="">
                        <input type="hidden" class="form-control" name="question_id" value="<?php echo $row['qq']; ?>" required="" readonly="">
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





<!--  -->
<div class="modal fade" id="addsolution_<?php echo $row['qq']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">ADD SOLUTION TO  QUESTION</h4></center>
            </div>
            <form method="POST" action="update_question_answer.php">   
            <div class="modal-body">

            <div class="row form-group">

                    <div class="col-sm-3">
                        <label class="control-label modal-label">ANSWER  :</label>
                    </div>
                    <div class="col-sm-12">
                        <select class="form-control" name="add_solution" required="">
                            <?php 

                            $question_selection = "SELECT * FROM topic_assesment_answers WHERE question_id = '".$row['qq']."'";

                            //use for MySQLi-OOP
                            $conupdate = $conn->query($question_selection);
                            while($urow = $conupdate->fetch_assoc()){

                            ?>

                            <option value="<?php echo $urow['id']; ?>"><?php echo $urow['answer']; ?></option>

                        <?php } ?>

                        </select>
                        <input type="hidden" class="form-control" name="question_id" value="<?php echo $row['qq']; ?>" required="" readonly="">
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




<!--  -->
<div class="modal fade" id="editquestion_<?php echo $row['qq']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">EDIT QUESTION</h4></center>
            </div>
            <form method="POST" action="edit_question.php">   
            <div class="modal-body">

            <div class="row form-group">

                    <div class="col-sm-3">
                        <label class="control-label modal-label">QUESTION  :</label>
                    </div>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" value="<?php echo $row['question']; ?>" name="question" required="">
                        <input type="hidden" class="form-control" name="question_id" value="<?php echo $row['qq']; ?>" required="" readonly="">
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
