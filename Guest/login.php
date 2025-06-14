<!DOCTYPE html>
<html>

<?php
include('head_guest.php');
?>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <div class="brand_box">
      <a class="navbar-brand" href="index.html">
        <span>
          Ninom
        </span>
      </a>
    </div>
    <!-- end header section -->
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
              Login
            </h2>
          </div>
        </div>
      </div>

      <div class="layout_padding2-top">
        <div class="row">
          <div class="col-lg-4 offset-lg-4 col-md-1 offset-md-1">
            <form action="../Controller/user_controller.php" method="POST" enctype="multipart/form-data">
              <div class="contact_form-container">
                <div>
                  <div>
                    <input type="text" placeholder="Full Name" name="txtUser" />
                  </div>
                  <div>
                    <input type="password" placeholder="Password" name="txtPassword" />
                  </div>
                  <div>
                    <a href="../Guest/contact.php">Forget Password ?</a>
                  </div>
                  <div>
                    <button type="submit" name="btnlogin">
                      Login Now
                    </button>
                  </div>
                  <hr>
                  <div>
                    Not Register ?
                    <a href="../Guest/register.php"> Click here</a>
                    or go to
                    <a href="../Guest/index.php"> Home</a>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->


  <?php
  include('footer_guest.php');
  ?>
  <!-- footer section -->


  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>

</body>

</html>

<style>
  a {
    color: blue;
    text-decoration: none;
  }

  a:hover {
    color: orange;
  }
</style>