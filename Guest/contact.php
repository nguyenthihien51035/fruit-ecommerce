<!DOCTYPE html>
<html>
<?php
include('head_guest.php');
?>
<?php
session_start();
?>

<div class="hero_area">
  <!-- header section strats -->
  <div class="brand_box">
    <a class="navbar-brand" href="index.php">
      <span>
        Ninom
      </span>
    </a>
  </div>
  <!-- end header section -->
  <!-- slider section -->
  <section class=" slider_section position-relative">
    <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="img-box">
            <img src="images/slider-img.jpg" alt="">
          </div>
        </div>
        <div class="carousel-item">
          <div class="img-box">
            <img src="images/slider-img.jpg" alt="">
          </div>
        </div>
        <div class="carousel-item">
          <div class="img-box">
            <img src="images/slider-img.jpg" alt="">
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>
  <!-- end slider section -->
</div>

<!-- nav section -->

<?php
include('head_nav_guest.php');
?>
<!-- end nav section -->


<!-- contact section -->
<section class="contact_section layout_padding">
  <div class="container-fluid">
    <div class="row">
      <div class="offset-lg-2 col-md-10 offset-md-1">
        <div class="heading_container">
          <hr>
          <h2>
            Request A call back
          </h2>
        </div>
      </div>
    </div>

    <div class="layout_padding2-top">
      <div class="row">
        <div class="col-lg-4 offset-lg-2 col-md-5 offset-md-1">
          <form action="../Controller/contact_controller.php" method="POST" enctype="multipart/form-data">
            <div class="contact_form-container">
              <div>
                <div>
                  <input type="text" placeholder="Full Name" name="txtUser" />
                </div>
                <div>
                  <input type="email" placeholder="Email" name="txtEmail" />
                </div>
                <div>
                  <input type="text" placeholder="Phone Number" name="txtPhone" />
                </div>
                <div>
                  <input type="text" class="message_input" placeholder="Message" name="txtMessage" />
                </div>
                <div>
                  <button type="submit" name="btncontact">
                    Send
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-6 px-0">
          <div class="map_container">
            <div class="map-responsive">
              <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end contact section -->


<!-- info section -->
<?php
include('footer_guest.php');
?>
<!-- footer section -->


<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/custom.js"></script>

</body>

</html>