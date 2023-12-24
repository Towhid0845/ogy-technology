<!DOCTYPE html>
<html lang="en">

<?php include("./component/head.php"); ?>

<body>

  <!-- navbar part start -->
  <?php include("./component/menu.php"); ?>
  <!-- navbar part end -->


  <!-- breadcrumb part start -->
  <?php include("./component/breadcrumb.php"); ?>
  <!-- breadcrumb part end -->

  <!-- projects part start -->
  <section class="contact-page">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mx-auto">
          <div class="contact--title text-center">
            <span class="common--subtitle">Contact Info</span>
            <h2 class="common--title">Our Contact Information
            </h2>
          </div>
        </div>
      </div>
      <div class="contact-info">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
            <div class="contact-box">
              <div class="contact-box-icon">
                <i class="fas fa-map-marker-alt"></i>
              </div>
              <div class="contact-box-content">
                <h4 class="contact-box-title">Our Location</h4>
                <p class="contact-box-description">xyz, Dhaka, Bangladesh</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
            <div class="contact-box">
              <div class="contact-box-icon">
                <i class="fas fa-headset"></i>
              </div>
              <div class="contact-box-content">
                <h4 class="contact-box-title">Our Contact</h4>
                <p class="contact-box-description">+ (88) 1234-567-8900</p>
                <p class="contact-box-description">+ (88) 1234-567-8901</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <div class="contact-box">
              <div class="contact-box-icon">
                <i class="far fa-envelope"></i>
              </div>
              <div class="contact-box-content">
                <h4 class="contact-box-title">Mail Us</h4>
                <p class="contact-box-description">info@peacefulthemes.com</p>
                <p class="contact-box-description">info2@peacefulthemes.com</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="contact-form">
        <div class="row">
          <div class="col-12 col-lg-5">
            <div class="image">
              <img src="./images/pr-4.jpg" alt="not found">
            </div>
          </div>
          <div class="col-12 col-lg-7 ps-sm-0 ps-lg-5 pt-5 pt-lg-0">
            <div class="form-title">
              <span class="common--subtitle">let's talk</span>
              <h2 class="common--title">Get In Touch
              </h2>
              <p class="description">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
            </div>
            <form class="contact-us-form pt-4">
              <div class="row">
                <div class="col-lg-12">
                  <input type="text" placeholder="Full Name">
                </div>
                <div class="col-lg-6 col-md-6">
                  <input type="email" placeholder="Email Address">
                </div>
                <div class="col-lg-6 col-md-6">
                  <select class="nice-select">
                    <option>select one</option>
                    <option>News First</option>
                    <option>Best Selling</option>
                    <option>Best Rated</option>
                  </select>
                </div>
                <div class="col-lg-12">
                  <textarea cols="40" rows="10" placeholder="Message"></textarea>
                </div>
                <div class="col-lg-12">
                  <a href="" class="common--button animate__animated" data-animation-in="animate__fadeInUp" data-delay-in="1">Send Message</a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- projects part end -->

  <!-- map part start -->
  <div class="map">
    <div class="pq-map">
      <!-- <iframe loading="lazy" src="https://maps.google.com/maps?q=London%20Eye%2C%20London%2C%20United%20Kingdom&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near" title="London Eye, London, United Kingdom" aria-label="London Eye, London, United Kingdom"></iframe> -->
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116833.83187883983!2d90.33728804060513!3d23.780975728310533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2sDhaka!5e0!3m2!1sen!2sbd!4v1700124202563!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
  <!-- map part end -->



  <!-- footer part start -->
  <?php include("./component/footer.php"); ?>
  <!-- footer part end -->


  <!-- all js link -->
  <?php include("./component/script.php"); ?>
</body>

</html>