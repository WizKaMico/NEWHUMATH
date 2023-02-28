    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3 class="cta-title">CALCULUS</h3>
            <p class="cta-text"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="index.php?view=LOGIN">REGISTER</a>
          </div>
        </div>

      </div>

    </section><!-- End Call To Action Section -->

     <section id="advanced-features">

        <?php
              include_once('connection/connection.php');
              $sql = "SELECT * FROM calculus_content";

              //use for MySQLi-OOP
              $query = $conn->query($sql);
              while($row = $query->fetch_assoc()){
              ?>
     <div class="features-row section-bg" data-aos="fade-up">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <img class="advanced-feature-img-right wow fadeInRight" src="ADMIN/pages/calculus/<?php echo $row['photo']; ?>" alt="" style="width:50%; height:300px;">
              <div>
                <h2><?php echo $row['title']; ?></h2>
                <p><?php echo $row['description']; ?></p>
              
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>

    </section>