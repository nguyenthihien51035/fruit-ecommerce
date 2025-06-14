<?php
include('../Model/product_model.php');
$data = new data_product();
$result1 = $data->select_product_id($_GET['edit']);
?>

<?php
session_start();
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


    <!-- client section -->

    <section class="client_section layout_padding">
        <div class="container ">
            <div class="heading_container">
                <h2>
                    Chi tiết sản phẩm
                </h2>
                <hr>
            </div>
            <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <?php
                        while ($se_pro = mysqli_fetch_array($result1)) {
                        ?>
                            <div class="client_container layout_padding-top">
                                <div class="img-box">
                                    <img src="../Update/<?php echo $se_pro['HinhAnhSanPham']; ?>" alt="">
                                </div>
                                <div class="detail-box">
                                    <h5>
                                        <?php
                                        echo $se_pro['TenSanPham'];
                                        ?>
                                    </h5>
                                    <p>
                                        <img src="images/left-quote.png" alt="">
                                        <span>
                                            Thông tin sản phẩm
                                        </span>
                                        <img src="images/right-quote.png" alt=""> <br>
                                        <?php echo ' Mã: ' . $se_pro['id_product'] ?> <br>
                                        <?php echo ' Tên: ' . $se_pro['TenSanPham'] ?> <br>
                                        <?php echo ' Số lượng: ' . $se_pro['SoLuongSanPham'] ?> <br>
                                        <?php echo ' Danh Mục: ' . $se_pro['TheLoaiSanPham'] ?> <br>
                                        <?php echo ' Ngày nhập: ' . $se_pro['NgayNhapSanPham'] ?> <br>
                                        <?php echo ' Giá: ' . $se_pro['GiaSanPham'] ?> <br>
                                        <?php echo ' Mô tả: ' . $se_pro['MoTaSanPham'] ?> <br>
                                    <div class="centerItem">
                                        <div class="btnMuaHang">
                                            <a href="order.php?order=<?php echo $se_pro['id_product'] ?>" class="ClickBtn"> Đặt Hàng</a>
                                        </div>
                                    </div>
                                    </p>
                                </div>
                            </div>
                        <?php } ?>
                    </div>


                </div>

            </div>

        </div>
    </section>

    <!-- end client section -->

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
    .centerItem {
        width: 100% !important;
        display: flex !important;
        justify-content: center !important;

    }

    .btnMuaHang {
        display: flex !important;
        justify-content: center !important;
        align-items: center !important;
        width: 130px !important;
        height: 40px !important;
        border-radius: 6px !important;
        margin-top: 30px !important;
        background-color: #f89e12 !important;
    }

    .ClickBtn {
        padding: 0 10px;
        color: #fff;
    }
</style>

</html>