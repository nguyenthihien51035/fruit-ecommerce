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
              Register
            </h2>
          </div>
        </div>
      </div>

      <div class="layout_padding2-top">
        <div class="row">
          <div class="col-lg-4 offset-lg-4 col-md-1 offset-md-1">
            <form role="form" method="POST" action="../Controller/user_controller.php">
              <div class="contact_form-container">
                <div>
                  <div>
                    Full Name
                    <input type="text" name="txtUser" />
                  </div>
                  <div>
                    Password
                    <input type="password" name="txtPassword" />
                  </div>
                  <div>
                    Re Password
                    <input type="password" name="txtRePassword" />
                  </div>
                  <div>
                    Gender <br>
                    <input type="radio" name="txtGender" value="Nam">Nam
                    <input type="radio" name="txtGender" value="Nữ" class="spacing">Nữ
                  </div>
                  <div>
                    Avatar
                    <input class="form-control" type="file" name="txtfile">
                  </div>
                  <div>
                    Email
                    <input type="email" name="txtEmail" />
                  </div>
                  <div>
                    <button type="submit" name="txtregister">
                      Send
                    </button>
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
<style>
  /* Giữ kiểu mặc định của radio button */
  input[type="radio"] {
    width: 16px;
    /* Điều chỉnh kích thước nếu cần */
    height: 16px;
    /* Điều chỉnh kích thước nếu cần */
    border: 2px solid #000;
    /* Đường viền mặc định */
    cursor: pointer;
    /* Con trỏ chuột khi hover vào nút */
    margin-right: 5px;
  }

  input[type="radio"]:checked {
    background-color: #000;
    /* Màu nền khi nút radio được chọn */
  }

  /* Tạo khoảng cách 50px chỉ cho nút radio "Nữ" */
  input[type="radio"].spacing {
    margin-left: 50px;
    /* Tạo khoảng cách 50px cho nút "Nữ" */
  }
</style>