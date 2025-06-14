<!DOCTYPE html>
<html>

<?php
session_start();
?>

<?php
include('head_guest.php');
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
            include('../Model/product_model.php');
            $getdata = new data_product();
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

<?php
include('footer_guest.php');
?>
<!-- footer section -->


<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/custom.js"></script>

</body>

</html>