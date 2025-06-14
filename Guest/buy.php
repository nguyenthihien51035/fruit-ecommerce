<?php
include('../Model/product_model.php');
$data = new data_product();
$id = $_GET['idproduct'];
$result1 = $data->productDetails($id);
?>

<?php
session_start();
?>

<!DOCTYPE html>
<html>

<?php
include("head_guest.php");
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
                            Đặt hàng
                        </h2>
                    </div>
                </div>
            </div>

            <div class="layout_padding2-top">
                <div class="row">
                    <div class="col-lg-3 offset-lg-3 col-md-5 offset-md-1">

                    </div>
                    <div class="col-lg-4 offset-lg-4 col-md-5 offset-md-1">
                        <form role="form" action="../Controller/muahang_insert.php" method="POST"
                            enctype="multipart/form-data">
                            <div class="contact_form-container">
                                <?php
                                while ($se_pro = mysqli_fetch_array($result1)) {
                                ?>
                                    <div>
                                        <div class="ttsp">
                                            <span>
                                                Thông tin sản phẩm
                                            </span>
                                        </div>
                                        <div class="img-box">
                                            <img src="../Update/<?php echo $se_pro['HinhAnhSanPham']; ?>" width="100"
                                                height="100" alt="">
                                        </div> <br>
                                        <?php echo ' Mã: ' . $se_pro['id_product'] ?> <br>
                                        <?php echo ' Tên: ' . $se_pro['TenSanPham'] ?> <br>
                                        <?php echo ' Số lượng: ' . $se_pro['SoLuongSanPham'] ?> <br>
                                        <?php echo ' Danh Mục: ' . $se_pro['TheLoaiSanPham'] ?> <br>
                                        <?php echo ' Ngày nhập: ' . $se_pro['NgayNhapSanPham'] ?> <br>
                                        <?php echo ' Giá: ' . $se_pro['GiaSanPham'] ?> <br>
                                        <?php echo ' Mô tả: ' . $se_pro['MoTaSanPham'] ?> <br>
                                        <?php echo ' Thành Tiền: ' . $se_pro['ThanhTien'] ?> <br>
                                        <hr>
                                        <div class="ThongTinCenter" style="margin-top: 30px;">
                                            <span>Thông tin khách hàng</span>
                                        </div>
                                        <div>
                                            <label for="">Họ và Tên</label>
                                            <input type="text" placeholder="Nhập họ tên" name="txtHoTenKH" />
                                        </div>
                                        <div>
                                            <label for="">Số điện thoại</label>
                                            <input type="text" placeholder="Nhập số điện thoại" name="txtSDTKH" />
                                        </div>
                                        <div>
                                            <label for="">Địa chỉ</label>
                                            <input type="text" placeholder="Nhập địa chỉ" name="txtDiaChiKH" />
                                        </div>
                                        <div div id="trangThaiDiv" style="display: none;">
                                            <label for="">Trạng thái</label>
                                            <select name="txtTrangThaiKH">
                                                <option value="Chưa xác nhận" selected>Chưa xác nhận</option>
                                                <option value="Đã xác nhận">Đã xác nhận</option>
                                            </select>
                                        </div>
                                        <div style="display: none;">
                                            <label for="">Mã sản phẩm</label>
                                            <input type="text" placeholder="Account" name="txtMaSPKH"
                                                value="<?php echo $se_pro['id_product'] ?>" readonly />
                                            <label for="">Lưu ý: Khách hàng khi mua hàng hãy xem kĩ mã sản phẩm trước khi
                                                mua</label>
                                        </div>
                                        <div>
                                            <button type="submit" name="btnMuaHang">
                                                Mua
                                            </button>
                                        </div>
                                    </div>
                                <?php } ?>
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

<style>
    .ThongTinCenter {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        font-size: 20px;
        margin-bottom: 15px;
    }

    .ttsp {
        font-size: 25px;
        width: 100%;
        font-size: 20px;
        margin-bottom: 15px;
    }
</style>

</html>