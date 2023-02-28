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
         
        <!-- task-block -->
        <div class="task-block" style="background-color:#1ddd9f;">
          
          <!-- task-card 1-->
         
          <div class="task-card" style="background-color:white;">
            <div class="task-header">
              <h3 style="margin-top:20px;">SITE CONTENT EDITOR</h3>
            </div>
            <br />
            <hr>
            <div class="bs-tabs">
              <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">HOME</button>
                  <button class="nav-link" id="nav-calculus-tab" hx-get="/calculus" hx-target="#nav-calculus" data-bs-toggle="tab" data-bs-target="#nav-calculus" type="button" role="tab" aria-controls="nav-calculus" aria-selected="false">CALCULUS</button>
                  <button class="nav-link" id="nav-team-tab" hx-get="/team" hx-target="#nav-team" data-bs-toggle="tab" data-bs-target="#nav-team" type="button" role="tab" aria-controls="nav-team" aria-selected="false">TEAM</button>
                  <button class="nav-link" id="nav-inquiry-tab" hx-get="/inquiry" hx-target="#nav-inquiry" data-bs-toggle="tab" data-bs-target="#nav-inquiry" type="button" role="tab" aria-controls="nav-inquiry" aria-selected="false">SITE INQUIRY</button>
                   <button class="nav-link" id="nav-announcement-tab" hx-get="/announcement" hx-target="#nav-announcement" data-bs-toggle="tab" data-bs-target="#nav-announcement" type="button" role="tab" aria-controls="nav-announcement" aria-selected="false">ANNOUNCEMENT</button>
                 
                </div>
              </nav>
              <div class="tab-content m-5" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                  <iframe src="pages/home/" style="width:100%; border:none; height:600px;"></iframe>
                </div>
                <div class="tab-pane fade" id="nav-calculus" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                  <iframe src="pages/calculus/" style="width:100%; border:none; height:600px;"></iframe>
                </div>
                <div class="tab-pane fade" id="nav-team" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                  <iframe src="pages/team/" style="width:100%; border:none; height:600px;"></iframe>
                </div>
                <div class="tab-pane fade" id="nav-inquiry" role="tabpanel" aria-labelledby="nav-inquiry-tab" tabindex="0">
                  <iframe src="pages/inquiry/" style="width:100%; border:none; height:600px;"></iframe>
                </div>
                <div class="tab-pane fade" id="nav-announcement" role="tabpanel" aria-labelledby="nav-announcement-tab" tabindex="0">
                  <iframe src="pages/annoucement/" style="width:100%; border:none; height:600px;"></iframe>
                </div>
              
              </div>
            </div>

              
          
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