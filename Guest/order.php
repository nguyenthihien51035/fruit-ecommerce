<?php
ob_start();
session_start();
// Nếu chưa đăng nhập, lưu URL hiện tại và chuyển hướng đến trang login
if (!isset($_SESSION['User'])) {
  $_SESSION['redirect_after_login'] = $_SERVER['REQUEST_URI']; // Lưu trang hiện tại
  header("Location: login.php"); // Chuyển hướng đến trang đăng nhập
  exit();
}
?>

<?php
include('../Model/product_model.php');
$get_data = new data_product();
$select = $get_data->select_product_id($_GET['order']);
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
  <!-- end nav section -->
  <section class="contact_section layout_padding">
    <div class="container-fluid">
      <div class="row">
        <div class="offset-lg-2 col-md-10 offset-md-1">
          <div class="heading_container">
            <hr>
            <h2>
              Order
            </h2>
          </div>
        </div>
      </div>

      <div class="layout_padding2-top">
        <div class="row">
          <div class="offset-lg-2 col-md-10 offset-md-1">
            <form method="POST" action="../Controller/order_controller.php" enctype="multipart/form-data">
              <input type="hidden" name="id_product" value="<?php echo $_GET['order']; ?>">
              <table class="table table-stripper">
                <tr>
                  <td>Tên hàng</td>
                  <td>Hình ảnh</td>
                  <td>Đơn giá</td>
                  <td colspan="3">Số lượng (nhập số lượng bạn muốn mua)</td>
                  <td></td>
                </tr>
                <?php foreach ($select as $se_fruit) { ?>
                  <tr>
                    <td><?php echo $se_fruit['TenSanPham']; ?></td>
                    <td>
                      <img src="../Update/<?php echo $se_fruit['HinhAnhSanPham']; ?>" style="width:100px; height:100px">
                    </td>
                    <td id="product-price"><?php echo $se_fruit['GiaSanPham']; ?> VND</td>
                    <td>
                      <input type="number" name="txtnumber" id="txtnumber" style="width: 100px;"
                        value="<?php echo isset($_GET['updated_quantity']) ? $_GET['updated_quantity'] : 1; ?>"> <br>
                      <span>Số lượng tối đa còn:
                        <span id="stock-remaining">
                          <?php echo isset($_GET['updated_stock']) ? $_GET['updated_stock'] : $se_fruit['SoLuongSanPham']; ?>
                        </span>
                      </span>
                    </td>
                    <td>
                      <input type="submit" name="txtup" value="Update">
                    </td>
                    <td>
                      <input type="submit" name="txtdel" value="Delete">
                    </td>
                  </tr>
                <?php } ?>
                <td></td>
                </tr>
                </tr>
                <td colspan="3" align="center">Tổng tiền</td>
                <td colspan="3">
                  <span id="total-price">
                    <?php echo isset($_GET['updated_total']) ? $_GET['updated_total'] : $se_fruit['GiaSanPham']; ?> VND
                  </span>
                </td>
              </table>
              <div>
                <center><button type="submit" class="btn btn-info" name="txtSubmit">Xác nhận</button></center>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- end info section -->


  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>

</body>

</html>
<!-- Thư viện jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    $('input[name="txtnumber"]').on('input', function() {
      let unitPrice = parseFloat($('#product-price').text()); // Giá sản phẩm
      let quantity = parseInt($(this).val()); // Số lượng nhập vào
      let stock = parseInt($('#stock-remaining').text()); // Số lượng tồn kho hiện tại

      if (isNaN(quantity) || quantity <= 0) {
        quantity = 1;
        $(this).val(1);
      } else if (quantity > stock) {
        quantity = stock;
        $(this).val(stock);
      }

      let total = unitPrice * quantity;
      $('#total-price').text(total.toLocaleString('vi-VN') + ' VND');
    });
  });
</script>