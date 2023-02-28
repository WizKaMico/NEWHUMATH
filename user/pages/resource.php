 
<?php 
      $rid = $_GET['rid'];
      $userid = $row['user_id'];
      $status = 'IN-PROGRESS';
      $rresult=mysqli_query($conn, "select * from resources where rid='$rid'");
      $rrow=mysqli_fetch_array($rresult);

      $check_resource    = mysqli_query($conn, "SELECT * FROM resource_into WHERE userid='$userid' and  rid='$rid'");
      $num_row  = mysqli_num_rows($check_resource);
 
      if ($num_row > 0)
      {

      }
      else
      {
         mysqli_query($conn,"INSERT INTO resource_into (rid, userid, status) VALUES ('$rid', '$userid', '$status')");  
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
         <h3 style="margin-left:35px;"><a style="text-decoration:none;" href="index.php?view=HOME"><?php echo strtoupper($rrow['resource_name']); ?></a> | <?php echo strtoupper($rrow['resource_description']); ?></h3>   
        <!-- task-block -->
        <div class="task-block" style="background-color:#1ddd9f;">
          
          <!-- task-card 1-->
            <?php
                             include_once('../connection/connection.php');
                            //COUNT TOPIC AND DONE
                             $myprog=mysqli_query($conn, "select *,COUNT(id) as total from resource__topic_into where rid='$rid' AND userid ='$userid'");
                             $mcheck=mysqli_fetch_array($myprog);

                             $totaltpic=mysqli_query($conn, "select *,COUNT(id) as total from resource_topic where rid='$rid'");
                             $precheck=mysqli_fetch_array($totaltpic);

                            /* echo $mcheck['total']; 
                             echo $precheck['total'];*/

                             if($mcheck['total'] == $precheck['total'])
                            {
                                  mysqli_query($conn,"UPDATE resource_into SET status = 'COMPLETED' WHERE rid = '$rid' AND  userid = '$userid'");   
                                  
                            }
                             else
                            {
                                   
                            }

                           
                            $sql = "SELECT * FROM resource_topic WHERE rid = '$rid'";
                            $query = $conn->query($sql);
                            while($row = $query->fetch_assoc()){

                             $id = $row['id']; 
                             $progress=mysqli_query($conn, "select * from resource__topic_into where tid='$id' AND userid ='".$userid."'");
                             $prow=mysqli_fetch_array($progress);





         ?>
          <div class="task-card" style="background-color:white;">
            <div class="task-header">
              <h3><?php echo strtoupper($row['topic_name']); ?></h3>
              <a href="index.php?view=TOPIC&id=<?php echo $row['id']; ?>&rid=<?php echo $rid; ?>" style="text-decoration:none;"><p class="task-type">VIEW TOPIC</p></a>
            </div>
            <br />
            <hr>
             
          
            <div class="task-footer">
              
             

              <?php if(!empty($prow['id'])){ ?>  
              <p class="task-status complete" style="font-size: 8px;"><?php echo $prow['status']; ?> <?php if($prow['status'] == 'IN PROGRESS'){ ?>&#128064;<?php } else { ?> &#9989; <?php } ?></p>
               <?php } else { ?>
              <p class="task-status complete" style="font-size: 8px;">NO PROGRESS &#128683;</p>
            <?php } ?>
              <br />
            </div>
          </div>
          <?php } ?>
          <!-- task card 1 ends-->

        
        </div>
        <!-- task-block ends-->
      </div>
      <!-- task-calendar block ends -->
    </div>
    <!-- first block ends -->
