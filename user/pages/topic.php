 
<?php 
$id = $_GET['id'];
$rresult=mysqli_query($conn, "select * from resources LEFT JOIN resource_topic ON resources.rid = resource_topic.rid where resource_topic.id='$id'");
$rrow=mysqli_fetch_array($rresult);

$rid = $_GET['rid'];
$userid = $row['user_id'];
$status = "IN PROGRESS";
 $check_resource    = mysqli_query($conn, "SELECT * FROM resource__topic_into WHERE userid='$userid' and  rid='$rid' and tid = '$id'");
      $num_row  = mysqli_num_rows($check_resource);
 
      if ($num_row > 0)
      {

      }
      else
      {
         mysqli_query($conn,"INSERT INTO resource__topic_into (rid, tid, userid, status) VALUES ('$rid', '$id', '$userid', '$status')");  
      }


if(isset($_POST['submit']))
{
      $id = $_GET['id'];
      $rid = $_GET['rid'];
      $userid = $row['user_id'];

      $check_resource    = mysqli_query($conn, "SELECT * FROM resource__topic_into WHERE userid='$userid' and  rid='$rid' and tid = '$id' AND status = 'IN PROGRESS'");
      $num_row  = mysqli_num_rows($check_resource);
 
      if ($num_row > 0)
      {
           mysqli_query($conn,"UPDATE resource__topic_into SET status = 'COMPLETE' WHERE userid='$userid' and  rid='$rid' and tid = '$id'");  
      }
      else
      {
         
      }

}
?>
 <!-- first block -->
    <div class="first">
      <!-- task-calendar block -->
      <div class="task-calendar">
        <!-- task header -->
        <div class="taskhead">
          <div class="taskhead-header d-flex">
            <p class="taskCopmlete">WELCOME BACK! <?php echo strtoupper($row['fname']); ?> <?php echo strtoupper($row['lname']); ?> <span style='font-size:20px;'>&#128075;</span></p>
          </div>
        </div>
        <!-- taskhead ends -->
         <h3 style="margin-left:35px;"><a style="text-decoration:none;" href="index.php?view=RESOURCE&rid=<?php echo $rrow['rid']; ?>"><?php echo strtoupper($rrow['resource_name']); ?></a> >> <?php echo strtoupper($rrow['topic_name']); ?>  <form action="#" method="POST"><button class="task-status complete" name="submit" style="width:30%;">SUBMIT COMPLETE &#128190;</button></form>  </h3> 
        <!-- task-block -->
        <div class="task-block" style="background-color:#1ddd9f;">
          
         
          <div class="task-card" style="background-color:white;">
          
            <hr>
            <?php 

            $check_image=mysqli_query($conn, "SELECT * FROM `topic_image` WHERE tid = '$id'");
            $cim=mysqli_fetch_array($check_image);

            $check_file=mysqli_query($conn, "SELECT * FROM `file` WHERE tid = '$id'");
            $cif=mysqli_fetch_array($check_file);

              
             ?>

             <?php if(!empty($cim['id']) && empty($cif['id'])){ ?>

             <iframe src="pages/slides/?id=<?php echo $id; ?>" style="width:100%; height:500px;"></iframe>
              
             <?php } else if(empty($cim['id']) && !empty($cif['id'])) { ?>
             
              <iframe src="../ADMIN/pages/topic/<?php echo $cif['file']; ?>" style="width:100%; height:500px;"></iframe>

                <?php } else if(!empty($cim['id']) && !empty($cif['id'])) { ?>
             
              <iframe src="../ADMIN/pages/topic/<?php echo $cif['file']; ?>" style="width:100%; height:500px;"></iframe>

             <?php } else { ?>

           

             <?php } ?> 

            <div class="task-footer">
              
             

              <br />
            </div>
          </div>
        
          <!-- task card 1 ends-->

        
        </div>
        <!-- task-block ends-->
      </div>
      <!-- task-calendar block ends -->
    </div>
    <!-- first block ends -->

    