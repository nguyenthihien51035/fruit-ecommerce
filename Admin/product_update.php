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
                        <h1 class="page-head-line">Product Forms</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text.
                        </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                Sản phẩm
                            </div>
                            <div class="panel-body">
                                <?php
                                include('../Model/product_model.php');
                                $get_data = new data_product();
                                $select = $get_data->select_product_id($_GET['edit']);
                                foreach ($select as $see)
                                ?>
                                <form role="form" action="../Controller/product_controller.php?edit=<?php echo $_GET['edit'] ?>" method="POST"
                                    enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Tên sản phẩm</label>
                                        <input class="form-control" type="text" name="txttensp"
                                            value="<?php echo $see['TenSanPham']; ?>">
                                        <p class="help-block">Nhập tên vào đây.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Số lượng sản phẩm</label>
                                        <input class="form-control" type="text" name="txtsl"
                                            value="<?php echo $see['SoLuongSanPham']; ?>">
                                        <p class="help-block">Nhập số lượng sản phẩm vào đây.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Hình ảnh sản phẩm</label>
                                        <input class="form-control" type="file" name="txthinhanh">
                                        <img src="../Update/<?php echo $see['HinhAnhSanPham']; ?>" width="50px"
                                            height="50px">
                                        <p class="help-block">Chọn hình ảnh sản phẩm.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Thể loại sản phẩm</label>
                                        <select class="form-control" name="category_id">
                                            <option value="" disabled>-- Chọn danh mục --</option>
                                            <?php
                                            include('../Model/category_model.php');
                                            $get_data = new data_category();
                                            $categories = $get_data->select_category_name();
                                            while ($row = mysqli_fetch_assoc($categories)) {
                                                echo '<option>' . $row['tendanhmuc'] . '</option>';
                                            }

                                            // while ($row = mysqli_fetch_assoc($categories)) {
                                            //     $selected = ($row['TenDanhMuc'] == $see['TheLoaiSanPham']) ? "selected" : "";
                                            //     echo "<option value='{$row['TenDanhMuc']}' $selected>" . htmlspecialchars($row['TenDanhMuc'], ENT_QUOTES, 'UTF-8') . "</option>";
                                            // }

                                            ?>
                                        </select>
                                        <p class="help-block">Chọn thể loại sản phẩm.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Ngày nhập sản phẩm</label>
                                        <input class="form-control" type="date" name="txtdate"
                                            value="<?php echo $see['NgayNhapSanPham']; ?>">
                                        <p class="help-block">Chọn ngày nhập sản phẩm.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Giá sản phẩm</label>
                                        <input class="form-control" type="text" name="txtgia"
                                            value="<?php echo $see['GiaSanPham']; ?>">
                                        <p class="help-block">Nhập giá sản phẩm vào đây.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Mô tả sản phẩm</label>
                                        <textarea class="form-control" rows="3" name="txtmota"><?php echo isset($see['MoTaSanPham']) ? $see['MoTaSanPham'] : ''; ?></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-info" name="btn_edit_product">Cập nhật </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">

                    </div>
                    <!--/.ROW-->

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