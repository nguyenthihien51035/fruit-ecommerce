<?php
ob_start();
session_start();

// Kiểm tra nếu chưa đăng nhập, chuyển hướng đến trang đăng nhập
if (!isset($_SESSION['User'])) {
  echo "<script>alert('Bạn phải đăng nhập để kiểm tra đơn hàng!'); window.location.href='login.php';</script>";
  exit();
}

// Kiểm tra file order_model.php có tồn tại không
if (!file_exists('../Model/order_model.php')) {
  die("Lỗi: Không tìm thấy file `order_model.php`. Kiểm tra lại đường dẫn.");
}
include('../Model/order_model.php');

// Lấy danh sách đơn hàng của người dùng
$get_data = new data_order();
$select = $get_data->get_order($_SESSION['User'], $_SESSION['ID_Product']);
?>

<!DOCTYPE html>
<html lang="vi">

<?php
include('head_guest.php');
?>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <div class="brand_box">
      <a class="navbar-brand" href="../Guest/index.php">
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

  <section class="contact_section layout_padding">
    <div class="container-fluid">
      <div class="row">
        <div class="offset-lg-2 col-md-10 offset-md-1">
          <div class="heading_container">
            <hr>
            <h2>
              Check Order
            </h2>
          </div>
        </div>
      </div>

      <div class="layout_padding2-top">
        <div class="row">
          <div class="offset-lg-2 col-md-10 offset-md-1">
            <form method="POST" action="" enctype="multipart/form-data">
              <table class="table table-stripper">
                <?php if (mysqli_num_rows($select) > 0) { ?>
                  <?php foreach ($select as $se_fruit)  ?>
                  <tr>
                    <th>Tên Khách hàng:</th>
                    <td><?php echo $_SESSION['User']; ?></td>
                  </tr>
                  <tr>
                    <th>Địa chỉ:</th>
                    <td>Hà Nội</td> <!-- Cần lấy từ CSDL nếu có -->
                  </tr>
                  <tr>
                    <th>Tên sản phẩm:</th>
                    <td><?php echo $se_fruit['TenSanPham']; ?></td>
                  </tr>
                  <tr>
                    <th>Số lượng:</th>
                    <td><?php echo $se_fruit['number_order']; ?></td>
                  </tr>
                  <tr>
                    <th>Đơn giá:</th>
                    <td><?php echo number_format($se_fruit['GiaSanPham'], 0, ',', '.') . " VND"; ?></td>
                  </tr>
                  <tr>
                    <th>Tổng tiền:</th>
                    <td><?php echo number_format($se_fruit['total'], 0, ',', '.') . " VND"; ?></td>
                  </tr>
                  <tr>
                    <th>Trạng thái:</th>
                    <td>
                      <?php echo ($se_fruit['status_or'] == 0) ? "Đặt hàng thành công!" : "Đã chuyển hàng"; ?>
                    </td>
                  </tr>
              </table>

              <div class="thank-you">
                Cảm ơn bạn đã mua hàng. Mua tiếp nhấn <a href="index.php">vào đây</a>
              </div>

            <?php } else { ?>
              <p style="text-align:center; font-size:18px; color:red;">Bạn chưa có đơn hàng nào!</p>
            <?php } ?>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>
</body>

</html>