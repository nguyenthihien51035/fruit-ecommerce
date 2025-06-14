<?php
session_start();
?>

<?php
include('../Model/product_model.php');
$getdata = new data_product();
?>

<!DOCTYPE html>
<html>

<?php
include('head_guest.php');
?>

<body>
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

  <!-- shop section -->

  <section class="shop_section layout_padding">
    <div class="container">
      <div class="box">
        <?php
        $select = $getdata->select_product_1();
        foreach ($select as $se_f) {
        ?>
          <div class="detail-box">
            <h2>
              Fruit shop
            </h2>
            <p>
              There are many variations of passages of Lorem Ipsum available
            </p>
          </div>
          <div class="img-box">
            <img src="../Update/<?php echo $se_f['HinhAnhSanPham'] ?>" style="width:400px;height:400px">
          </div>
          <div class="btn-box">
            <a href="order.php?order=<?php echo $se_f['id_product'] ?>">
              Mua Hàng
            </a>
          </div>
        <?php } ?>
      </div>
    </div>
  </section>

  <!-- end shop section -->

  <!-- about section -->

  <section class="about_section">
    <div class="container-fluid">
      <div class="row">
        <?php
        $select = $getdata->select_product_2();
        foreach ($select as $se_f) {
        ?>
          <div class="col-md-6 px-0">
            <div class="img-box">
              <img src="../Update/<?php echo $se_f['HinhAnhSanPham'] ?>" style="width:450px;height:450px">
            </div>
          </div>
          <div class="col-md-5">
            <div class="detail-box">
              <div class="heading_container">
                <hr>
                <h2>
                  <?php echo $se_f['TenSanPham'] ?>
                </h2>
              </div>
              <p>
                <?php echo ' Mô tả: ' . $se_f['MoTaSanPham'] ?> <br>
              </p>
              <a href="details.php?edit=<?php echo $se_f['id_product'] ?>">
                Xem Chi Tiết
              </a>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- fruit section -->
  <section class="fruit_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <hr>
        <h2>
          Fresh Fruit
        </h2>
      </div>
    </div>
    <div class="container-fluid">

      <div class="fruit_container">
        <?php
        $select = $getdata->select_product();
        foreach ($select as $se_f) {
        ?>
          <div class="box">
            <img src="../Update/<?php echo $se_f['HinhAnhSanPham'] ?>" style="width:400px;height:400px">
            <div class="link_box">
              <h5>
                <?php echo $se_f['TenSanPham'] ?>
              </h5>
              <a href="details.php?edit=<?php echo $se_f['id_product'] ?>">
                Chi tiết sản phẩm
              </a>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </section>


  <!-- end fruit section -->


  <!-- client section -->


  <section class="client_section layout_padding">
    <div class="container ">
      <div class="heading_container">
        <h2>
          What Syas Cutomer
        </h2>
        <hr>
      </div>
      <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="client_container layout_padding-top">
              <?php
              $select_fruit = $getdata->select_product_1();
              foreach ($select_fruit as $se_fruit) {
              ?>
                <div class="img-box">
                  <img src="../Update/<?php echo $se_fruit['HinhAnhSanPham']; ?>" alt="Product Image">
                </div>
                <div class="detail-box">
                  <h5>
                    <?php echo $se_fruit['TenSanPham']; ?>
                  </h5>
                  <p>
                    <img src="images/left-quote.png" alt="">
                    <span>
                      <?php echo $se_fruit['MoTaSanPham']; ?>
                    </span>
                    <img src="images/right-quote.png" alt=""> <br>
                    <strong>Thể loại: </strong> <?php echo $se_fruit['TheLoaiSanPham']; ?> <br>
                    <strong>Ngày nhập: </strong> <?php echo $se_fruit['NgayNhapSanPham']; ?> <br>
                    <strong>Giá: </strong> <?php echo number_format($se_fruit['GiaSanPham'], 0, ',', '.'); ?> VND <br>
                    <strong>Số lượng: </strong> <?php echo $se_fruit['SoLuongSanPham']; ?> <br>
                  </p>
                <?php } ?>
                </div>
            </div>
          </div>

          <!-- Display second product (select_product_2) -->
          <div class="carousel-item">
            <div class="client_container layout_padding-top">
              <?php
              $select_fruit_2 = $getdata->select_product_2();
              foreach ($select_fruit_2 as $se_fruit) {
              ?>
                <div class="img-box">
                  <img src="../Update/<?php echo $se_fruit['HinhAnhSanPham']; ?>" alt="Product Image">
                </div>
                <div class="detail-box">
                  <h5>
                    <?php echo $se_fruit['TenSanPham']; ?>
                  </h5>
                  <p>
                    <img src="images/left-quote.png" alt="">
                    <span>
                      <?php echo $se_fruit['MoTaSanPham']; ?>
                    </span>
                    <img src="images/right-quote.png" alt=""> <br>
                    <strong>Thể loại: </strong> <?php echo $se_fruit['TheLoaiSanPham']; ?> <br>
                    <strong>Ngày nhập: </strong> <?php echo $se_fruit['NgayNhapSanPham']; ?> <br>
                    <strong>Giá: </strong> <?php echo number_format($se_fruit['GiaSanPham'], 0, ',', '.'); ?> VND <br>
                    <strong>Số lượng: </strong> <?php echo $se_fruit['SoLuongSanPham']; ?> <br>
                  </p>
                </div>
              <?php } ?>
            </div>
          </div>

          <!-- Display third product (select_product_3) -->
          <div class="carousel-item">
            <div class="client_container layout_padding-top">
              <?php
              $select_fruit_3 = $getdata->select_product_3();
              foreach ($select_fruit_3 as $se_fruit) {
              ?>
                <div class="img-box">
                  <img src="../Update/<?php echo $se_fruit['HinhAnhSanPham']; ?>" alt="Product Image">
                </div>
                <div class="detail-box">
                  <h5>
                    <?php echo $se_fruit['TenSanPham']; ?>
                  </h5>
                  <p>
                    <img src="images/left-quote.png" alt="">
                    <span>
                      <?php echo $se_fruit['MoTaSanPham']; ?>
                    </span>
                    <img src="images/right-quote.png" alt=""> <br>
                    <strong>Thể loại: </strong> <?php echo $se_fruit['TheLoaiSanPham']; ?> <br>
                    <strong>Ngày nhập: </strong> <?php echo $se_fruit['NgayNhapSanPham']; ?> <br>
                    <strong>Giá: </strong> <?php echo number_format($se_fruit['GiaSanPham'], 0, ',', '.'); ?> VND <br>
                    <strong>Số lượng: </strong> <?php echo $se_fruit['SoLuongSanPham']; ?> <br>
                  </p>
                </div>
              <?php } ?>
            </div>
          </div>

        </div>

        <!-- Carousel controls -->
        <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">
          <span class="sr-only">Next</span>
        </a>
      </div>

    </div>
  </section>

  <!-- end client section -->


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