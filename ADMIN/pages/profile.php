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
         <h3 style="margin-left:35px;">MY PROFILE</h3>   
        <!-- task-block -->
        <div class="task-block" style="background-color:#1ddd9f;">
          
          <!-- task-card 1-->
         
          <div class="task-card" style="background-color:white;">
            <div class="task-header">
            </div>
            <br />
            <hr>
             
             <iframe src="pages/profile/index.php?user_id=<?php echo $row['user_id']; ?>" style="width:100%; height:720px; border:none; overflow: hidden;" scrolling="no"></iframe>
          
            <div class="task-footer">
              
             

            
              <br />
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
            <iframe src="pages/calendar/" style="width:100%; height:280px; border:none;" scrolling="no"></iframe>
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