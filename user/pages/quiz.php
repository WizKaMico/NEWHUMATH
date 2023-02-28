 
<?php 

$id = $_GET['qid'];
$rresult=mysqli_query($conn, "SELECT * FROM `resource_topic` WHERE id = '$id'");
$rrow=mysqli_fetch_array($rresult);



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
         <h3 style="margin-left:35px;"><a style="text-decoration:none;" href="#"><?php echo strtoupper($rrow['topic_name']); ?> QUIZ</a>  </h3> 
        <!-- task-block -->
        <div class="task-block" style="background-color:#1ddd9f;">
          
         
          <div class="task-card" style="background-color:white;">
          
            <hr>
             <iframe src="pages/questions/?id=<?php echo $id; ?>&uid=<?php echo $row['user_id']; ?>" style="width:100%; height:500px;"></iframe>
          
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
            <h5>LEGEND</h5>
          <p class="graphtag">
            <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle cx="4" cy="4" r="3" stroke="#effa19" stroke-width="2" />
            </svg>
            IN PROGRESS
          </p>
          <p class="graphtag">
            <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle cx="4" cy="4" r="3" stroke="#0ed60b" stroke-width="2" />
            </svg>
            COMPLETED
          </p>
          <div class="graph">
            
          </div>
        </div>
      </div>
      <!-- deals block ends-->

      <!-- task-graph block -->
      <div class="task">
        <div class="panelHeader d-flex">
          <h3>SUMMARY OF PERFORMANCE</h3>
          <p class="viewSelect">Show: <span class="viewChose">This month</span></p>
        </div>
        <!-- panelHeader -->
        <div class="task-graph">
        
         
        </div>
      </div>
      <!-- task-graph block ends-->
    </div>
    <!-- second block ends -->