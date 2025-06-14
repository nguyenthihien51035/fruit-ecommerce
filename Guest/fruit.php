<!DOCTYPE html>
<html>
<?php
session_start();
include('head_guest.php');
include('../Model/product_model.php');
$getdata = new data_product();
$limit = 6; // Số sản phẩm mỗi trang
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
if ($page < 1) $page = 1;

// Tính toán vị trí bắt đầu của sản phẩm trong truy vấn SQL
$start = ($page - 1) * $limit;

// Lấy danh sách sản phẩm theo trang
$select = $getdata->select_product_pagination($start, $limit);

// Lấy tổng số sản phẩm để tính số trang
$total_products = $getdata->count_products();
$total_pages = ceil($total_products / $limit);
?>

<body>
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

  <!-- end nav section -->

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
        // $select = $getdata->select_product();
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
      <!-- Phân trang -->
      <div class="pagination">

        <?php for ($i = 1; $i <= $total_pages; $i++) { ?>
          <a href="?page=<?php echo $i; ?>" class="<?php echo ($i == $page) ? 'active' : ''; ?>">
            <?php echo $i; ?>
          </a>
        <?php } ?>

      </div>
  </section>


  <!-- end fruit section -->

  <!-- info section -->
  <?php
  include('footer_guest.php');
  ?>

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>

</body>

</html>
<style>
  .pagination {
    text-align: center;
    padding: 20px 0;
    display: flex;
    justify-content: center;
  }

  .pagination a {
    padding: 8px 16px;
    margin: 2px;
    text-decoration: none;
    background: #007bff;
    color: white;
    border-radius: 5px;
  }

  .pagination a.active {
    background: #f3f3f3;
    color: black;
  }
</style>