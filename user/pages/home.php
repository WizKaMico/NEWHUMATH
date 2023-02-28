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
         <h3 style="margin-left:35px;">TRANSCRIPT</h3>   
        <!-- task-block -->
     
        <div class="task-block" style="background-color:#1ddd9f;">
        <table id="myTable" class="table">
          <thead>
            <th>TRANSCRIPT</th>
          </thead>
          <tbody>
           
          <!-- task-card 1-->
            <?php
            $userid = $row['user_id'];
                            include_once('../connection/connection.php');
                            $sql = "SELECT * FROM resources";
                            $query = $conn->query($sql);
                            while($row = $query->fetch_assoc()){

                             $rid = $row['rid']; 
                             $progress=mysqli_query($conn, "select * from resource_into where rid='$rid' AND userid ='".$userid."'");
                             $prow=mysqli_fetch_array($progress);

         ?>
          <tr>
              <td>
          <div class="task-card" style="background-color:white;">
            <div class="task-header">
              <h3><?php echo strtoupper($row['resource_name']); ?> | <?php echo strtoupper($row['resource_description']); ?></h3>
              <a href="index.php?view=RESOURCE&rid=<?php echo $row['rid']; ?>" style="text-decoration:none;"><p class="task-type">OPEN</p></a>
            </div>
            <br />
            <hr>
              <?php
                            $rid = $row["rid"];
                            $sql1 = "SELECT * FROM `resource_topic` WHERE rid = '$rid'";
                            $query1 = $conn->query($sql1);
                            $i = 0; 
                            while($trow = $query1->fetch_assoc()){
                            $i++;
              ?>
            <p class="task-date"><span><?php echo $i; echo'.'; echo $trow['id']; ?> </span><?php echo $trow['topic_name']; ?></p>
            <br />
             <?php } ?>
          
            <div class="task-footer">
              
             

              <?php if(!empty($prow['id'])){ ?>  
              <p class="task-status complete" style="font-size: 8px;"><?php echo $prow['status']; ?> &#128064;</p>
               <?php } else { ?>
              <p class="task-status complete" style="font-size: 8px;">NO PROGRESS &#128683;</p>
            <?php } ?>
              <br />
              <br />
            </div>
          </div>
            </td>
         </tr>
          <?php } ?>
          <!-- task card 1 ends-->

      
        </tbody>
        </table>
        </div>
        
        <!-- task-block ends-->
      </div>
      <!-- task-calendar block ends -->
    </div>
    <!-- first block ends -->

    <!-- second block -->
    <div class="second d-flex">
      <!-- deals block -->
      <div class="deals">
        <!-- panelHeader -->
        <div class="panelHeader d-flex">
          <h3>MY PROGRESS</h3>
          <p class="viewSelect">Show: <span class="viewChose">Monthly</span></p>
        </div>
        <!-- deals image block -->
        <div class="deals-graph">
          
        </div>
         <div class="graph" style="margin-top:-10px;">
            <iframe src="pages/calendar/" style="width:100%; height:320px; border:none;" scrolling="no"></iframe>
          </div>
      </div>
      <!-- deals block ends-->

      <!-- task-graph block -->
      <div class="task">
        <div class="panelHeader d-flex">
          <h3>SUMMARY OF PERFORMANCE</h3>
        </div>
        <!-- panelHeader -->
           <!-- task-card 1-->
            <?php
                           
                            include_once('../connection/connection.php');
                            $sql1 = "SELECT * FROM resources LEFT JOIN resource_into ON resources.rid = resource_into.rid WHERE resource_into.userid = '$userid'";
                            $query1 = $conn->query($sql1);
                            while($xrow = $query1->fetch_assoc()){

                            

           ?>
          <div class="task-card" style="background-color:white;">
            <div class="task-header">
              <h5><?php echo strtoupper($xrow['resource_name']); ?> | <?php echo strtoupper($xrow['resource_description']); ?></h5>
            </div>
            <br />
            <hr>
             
            <div class="task-footer">
              
             

             
              <p class="task-status complete" style="font-size: 8px;"><?php echo $xrow['status']; ?> &#128064;</p>
              
              <br />
              <br />
            </div>
          </div>
          <?php } ?>
          <!-- task card 1 ends-->
      </div>
      <!-- task-graph block ends-->
    </div>
    <!-- second block ends -->