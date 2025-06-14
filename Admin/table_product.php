<?php
include('../Model/product_model.php');
$get_data = new data_product();
$select = $get_data->select_product();
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<?php
include('head.php');
?>

<body>
    <div id="wrapper">
        <?php include('head_top.php') ?>
        <!-- /. NAV TOP  -->
        <?php include('head_nav.php') ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Data Table</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text.
                        </h1>

                    </div>

                    <!-- /. ROW  -->
                    <div class="col-md-12">
                        <!--    Context Classes  -->
                        <div class="panel panel-default">

                            <div class="panel-heading">
                                Danh sách sản phẩm
                            </div>

                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Tên sản phẩm</th>
                                                <th>Số lượng</th>
                                                <th>Hình ảnh</th>
                                                <th>Thể loại</th>
                                                <th>Ngày nhập</th>
                                                <th>Giá</th>
                                                <th>Mô tả</th>
                                                <th>Sửa</th>
                                                <th>Xóa</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($select as $see) { ?>
                                                <tr>
                                                    <td> <?php echo $see['id_product']; ?></td>
                                                    <td> <?php echo $see['TenSanPham']; ?></td>
                                                    <td> <?php echo $see['SoLuongSanPham']; ?></td>
                                                    <td> <img src="../Update/<?php echo $see['HinhAnhSanPham']; ?>" width="50"
                                                            height="50"> </td>
                                                    <td> <?php echo $see['TheLoaiSanPham']; ?> </td>
                                                    <td> <?php echo $see['NgayNhapSanPham']; ?></td>
                                                    <td> <?php echo $see['GiaSanPham']; ?></td>
                                                    <td> <?php echo $see['MoTaSanPham']; ?></td>
                                                    <td>
                                                        <a href="product_update.php?edit=<?php echo $see['id_product']; ?>"
                                                            onclick="return confirm('Bạn có chắc muốn sửa chứ?')">
                                                            Sửa
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="product_delete.php?del=<?php echo $see['id_product']; ?>"
                                                            onclick="return confirm('Bạn có chắc muốn xóa chứ?')">
                                                            Xóa
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!--  end  Context Classes  -->
                    </div>
                </div>
            </div>
            <!-- /. ROW  -->

        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- /. FOOTER  -->
    <?php
    include('footer.php');
    ?>


</body>

</html>