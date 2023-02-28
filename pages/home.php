 <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div class="hero-text" data-aos="zoom-out">
      <h2>Welcome to HUMATHINIK</h2>
      <p>An Investment in Knowledge Pays, the best interest</p>
      <p style="font-size:10px;">LEARN DIFFERENTIAL CALCULUS TO THE NEXT LEVEL</p>
      <a href="#more-features" class="btn-get-started scrollto">Get Started</a>
    </div>

  <!--   <div class="product-screens">

      <div class="product-screen-1" data-aos="fade-up" data-aos-delay="400">
        <img src="assets/img/product-screen-1.png" alt="">
      </div>

      <div class="product-screen-2" data-aos="fade-up" data-aos-delay="200">
        <img src="assets/img/product-screen-2.png" alt="">
      </div>

      <div class="product-screen-3" data-aos="fade-up">
        <img src="assets/img/product-screen-3.png" alt="">
      </div>

    </div> -->

  </section><!-- End Hero Section -->

  <main id="main">


       <!-- ======= More Features Section ======= -->
    <section id="more-features" class="section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h3 class="section-title">WHAT OUR WEBSITE CAN DO FOR YOU ? </h3>
          <span class="section-divider"></span>
          <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>

        <div class="row gy-4">

          <?php
              include_once('connection/connection.php');
              $sql = "SELECT * FROM home_content WHERE tag = 'WEBSITE CAN DO FOR YOU'";

              //use for MySQLi-OOP
              $query = $conn->query($sql);
              while($row = $query->fetch_assoc()){
          ?>

          <div class="col-lg-4">
            <div class="box">
              <div class="icon"><i class="<?php echo $row['link']; ?>"></i></div>
              <h4 class="title"><a href="#"><?php echo $row['title']; ?></a></h4>
              <p class="description"><?php echo $row['description']; ?></p>
            </div>
          </div>

        <?php } ?>

         

        </div>
      </div>
    </section><!-- End More Features Section -->

    <!-- ======= Featuress Section ======= -->
    <section id="features">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 offset-lg-4">
            <div class="section-header">
              <h3 class="section-title"><a href="index.php?view=<?php echo 'HOW IT WORKS'; ?>" style="text-decoration:none;">HOW IT WORKS</a></h3>
              <span class="section-divider"></span>
            </div>
          </div>

          <div class="col-lg-4 col-md-5 features-img">
            <img src="assets/img/product-features.png" alt="" data-aos="fade-right">
          </div>

          <div class="col-lg-8 col-md-7 ">

            <div class="row">

              <?php
              include_once('connection/connection.php');
              $sql = "SELECT * FROM home_content WHERE tag = 'HOW IT WORKS'";

              //use for MySQLi-OOP
              $query = $conn->query($sql);
              while($row = $query->fetch_assoc()){
              ?>

              <div class="col-lg-6 col-md-6 box" data-aos="fade-up">
                <div class="icon"><i class="<?php echo $row['link']; ?>"></i></div>
                <h4 class="title"><a href="#"><?php echo $row['title']; ?></a></h4>
                <p class="description"><?php echo $row['description']; ?></p>
              </div>

               <?php } ?>
            

            
            </div>

          </div>

        </div>

      </div>

    </section><!-- End Featuress Section -->

    <!-- ======= Advanced Featuress Section ======= -->
    <section id="advanced-features">

      <div class="features-row section-bg" data-aos="fade-up">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <img class="advanced-feature-img-right wow fadeInRight" src="assets/img/advanced-feature-3.jpg" alt="">
              <div>
                <h2>WE ARE COMMITTED</h2>
                <h3>We Will Help You Understand Differential Calculus</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="features-row" data-aos="fade-up">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <img class="advanced-feature-img-left" src="assets/img/advanced-feature-2.jpg" alt="">
              <div>
                <h2>TOPICS TO LEARN</h2>
                <i class="bi bi-calculator"></i>
                <p>LIMIT AND CONTINUITY OF A FUNCTION</p>
                <br />
                <i class="bi bi-bar-chart"></i>
                <p>DIFFERENTIATION OF ALGEBRAIC FUNCTION</p>
                <br />
                <i class="bi bi-percent"></i>
                <p>DIFFERENTIATION OF TRANSCENDENTAL FUNCTIONS</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3 class="cta-title">HUMATHINIK</h3>
            <p class="cta-text"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="index.php?view=LOGIN">REGISTER</a>
          </div>
        </div>

      </div>
    </section><!-- End Call To Action Section -->

    

    <!-- ======= Contact Section ======= -->
    <section id="contact">
      <div class="container" data-aos="fade-up">
        <div class="row">

          <div class="col-lg-4 col-md-4">
            <div class="contact-about">
              <h3>HUMATHINIK</h3>
              <p>Cras fermentum odio eu feugiat. Justo eget magna fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="info">
              <div>
                <i class="bi bi-geo-alt"></i>
                <p>A108 Adam Street<br>New York, NY 535022</p>
              </div>

              <div>
                <i class="bi bi-envelope"></i>
                <p>info@example.com</p>
              </div>

              <div>
                <i class="bi bi-phone"></i>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>
          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <form action="pages/action/action1.php" method="POST" class="email-form">
                <div class="row">
                  <div class="form-group col-lg-6">
                    <input type="text" name="fname" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  </div>
                  <div class="form-group col-lg-6 mt-3 mt-lg-0">
                    <input type="email" name="email" class="form-control"  id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                </div>
                <br>
                <hr />
                <div class="text-center"><button type="submit" name="add" style="background: linear-gradient(45deg, #1de099, #1dc8cd);
                border: 0;
                border-radius: 20px;
                padding: 8px 30px;
                color: #fff;">Send Message</button></div>
              </form>
            </div>
          </div>


        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->