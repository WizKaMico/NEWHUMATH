    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3 class="cta-title">TEAM</h3>
            <p class="cta-text"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="index.php?view=LOGIN">REGISTER</a>
          </div>
        </div>

      </div>
    </section><!-- End Call To Action Section -->

      <!-- ======= Team Section ======= -->
    <section id="team" class="section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3 class="section-title">Our Team</h3>
          <span class="section-divider"></span>
          <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>
        <div class="row">

            <?php
              include_once('connection/connection.php');
              $sql = "SELECT * FROM team_content";

              //use for MySQLi-OOP
              $query = $conn->query($sql);
              while($row = $query->fetch_assoc()){
              ?>
          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="ADMIN/pages/team/<?php echo $row['photo']; ?>" alt=""></div>
              <h4><?php echo $row['name']; ?></h4>
              <span><?php echo $row['role']; ?></span>
             
            </div>
          </div>
        <?php } ?>

        
        </div>

      </div>
    </section><!-- End Team Section -->