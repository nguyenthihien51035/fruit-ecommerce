<?php
session_start();
include('../Model/product_model.php');
$getdata = new data_product();
$select = $getdata->select_product();
?>

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

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container-fluid">
      <div class="row">
        <?php
        foreach ($select as $se_f) {
        ?>
          <div class="col-md-6 px-0">
            <div class="img-box">
              <img src="../Update/<?php echo $se_f['HinhAnhSanPham'] ?>">
            </div>
          </div>
          <div class="col-md-5">
            <div class="detail-box">
              <div class="heading_container">
                <hr>
                <h2>
                  <?php echo $se_f['TenSanPham'] ?>
                </h2>
                <?php echo ' Mã: ' . $se_f['id_product'] ?> <br>
                <?php echo ' Tên: ' . $se_f['TenSanPham'] ?> <br>
                <?php echo ' Số lượng: ' . $se_f['SoLuongSanPham'] ?> <br>
                <?php echo ' Danh Mục: ' . $se_f['TheLoaiSanPham'] ?> <br>
                <?php echo ' Ngày nhập: ' . $se_f['NgayNhapSanPham'] ?> <br>
                <?php echo ' Giá: ' . $se_f['GiaSanPham'] ?> <br>
                <?php echo ' Mô tả: ' . $se_f['MoTaSanPham'] ?> <br>
              </div>
              <a href="order.php?order=<?php echo $se_f['id_product'] ?>">
                Mua Hàng
              </a>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- info section -->

  <?php
  include('footer_guest.php');
  ?>


  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>
</body>

</html>