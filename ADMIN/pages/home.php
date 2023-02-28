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
         <h3 style="margin-left:35px;">CURRENT REGISTERED USERS</h3>   
        <!-- task-block -->
        <div class="task-block" style="background-color:#1ddd9f;">
          
          <!-- task-card 1-->
         
          <div class="task-card" style="background-color:white;">
            <div class="task-header">
              <h3 style="margin-top:20px;">EVENT CALENDAR</h3>
            </div>
            <br />
            <hr>
             <iframe src="pages/calendar/" style="width:100%; height:500px; border:none;" scrolling="no"></iframe>

              
          
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
          <h3>STUDENTS</h3>
          <p class="viewSelect">Show: <span class="viewChose">Monthly</span></p>
        </div>
        <!-- deals image block -->
        <div class="deals-graph">
          
        </div>
         <div class="graph" style="margin-top:-10px;">
             <iframe src="pages/piechart/" style="width:100%; height:300px; border:none;" scrolling="no"></iframe>
          </div>
      </div>
      <!-- deals block ends-->

    
    </div>
    <!-- second block ends -->