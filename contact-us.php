<!DOCTYPE html>
<html lang="en">

<?php include("./component/head.php"); ?>

<body>

  <!-- navbar part start -->
  <?php include("./component/menu.php"); ?>
  <!-- navbar part end -->


  <!-- breadcrumb part start -->
  <section class="bread-crumb">
    <div class="overlay">
      <div class="container">
        <div class="text text-center">
          <h3>Contact Us</h3>
          <ul class="list-unstyled">
            <li>
              <a href="index.html"><i class="fas fa-home"></i> Home</a>
            </li>
            <li>Contact Us</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb part end -->


  <!-- contact part start -->
  <section id="contact_us">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3 col-md-12 col-sm-12 col-12">
          <div class="section_heading">
            <h3>Contact with us</h3>
            <h2>Get in touch with us & stay updates</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="contact_area_left">
            <div class="contact_left_item">
              <div class="contact_left_icon">
                <img src="./images/icon/map_color.png" alt="icon">
              </div>
              <div class="contact_left_text">
                <h3>Address:</h3>
                <p>334, Sher-A-Bangla Road (1st floor), <br /> Khulna-9100, Bangladesh.</p>
              </div>
            </div>
            <div class="contact_left_item">
              <div class="contact_left_icon">
                <img src="./images/icon/email-color.png" alt="icon">
              </div>
              <div class="contact_left_text">
                <h3>Email:</h3>
                <a href="mailto:aosed_khulna@yahoo.com">aosed_khulna@yahoo.com</a>
              </div>
            </div>
            <div class="contact_left_item">
              <div class="contact_left_icon">
                <img src="./images/icon/phon-color.png" alt="icon">
              </div>
              <div class="contact_left_text">
                <h3>Phone number:</h3>
                <a href="tel:+01-123-456-789">+880244110711</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="contact_form_Wrapper">
            <h3>Leave us a message</h3>
            <form action="#!" id="contact_form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your full name*" required />
              </div>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Your email address*" required />
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject**" required />
              </div>
              <div class="form-group">
                <textarea class="form-control" rows="6" placeholder="Message*" required></textarea>
              </div>
              <div class="contact_submit_form">
                <button class="btn btn_theme btn_md">Send message</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- contact part end -->

  <!-- Contact Map Area -->
  <section id="contact_full_map" class="section_padding_bottom">
    <!-- <div class="contact_content_boxed">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-12 col-12">
            <div class="about_top_boxed bg_one">
              <div class="about_top_boxed_icon">
                <img src="./images/icon/msg.png" alt="img">
              </div>
              <div class="about_top_boxed_text">
                <p>Chat with live</p>
                <h3>Chat with our <br /> live experts</h3>
                <a href="contact.html">Chat now</a>
              </div>
              <div class="about_top_boxed_vector">
                <img src="./images/icon/round.png" alt="img">
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 col-12">
            <div class="about_top_boxed bg_two">
              <div class="about_top_boxed_icon">
                <img src="./images/icon/hand-round.png" alt="img">
              </div>
              <div class="about_top_boxed_text">
                <p>Become a partner</p>
                <h3>Enhance your helping hand for peoples</h3>
                <a href="make-donation.html">Join now</a>
              </div>
              <div class="about_top_boxed_vector">
                <img src="./images/icon/round.png" alt="img">
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 col-12">
            <div class="about_top_boxed bg_three">
              <div class="about_top_boxed_icon">
                <img src="./images/icon/qa.png" alt="img">
              </div>
              <div class="about_top_boxed_text">
                <p>Ask your questin</p>
                <h3>Ask your any question and get updates</h3>
                <a href="contact.html">Ask now</a>
              </div>
              <div class="about_top_boxed_vector">
                <img src="./images/icon/round.png" alt="img">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 px-0">
          <div class="contact_map_area">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d117687.71976105255!2d89.556547!3d22.81205!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff900276034217%3A0x5e6a8b064727e128!2sAOSED-An%20Organization%20for%20Socio-Economic%20Development!5e0!3m2!1sen!2sus!4v1703064631502!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Contact Map Area -->



  <!-- footer part start -->
  <?php include("./component/footer.php"); ?>
  <!-- footer part end -->


  <!-- all js link -->
  <?php include("./component/script.php"); ?>
</body>

</html>