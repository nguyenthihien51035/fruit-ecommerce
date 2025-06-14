<?php
include('../Model/category_model.php');
$get_data = new data_category();
$select = $get_data->select_category();
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<?php
include('head.php');
?>

<body>
    <div id="wrapper">
        <?php include('head_top.php'); ?>
        <!-- /. NAV TOP  -->
        <?php include('head_nav.php'); ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Data Table</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <!--   Kitchen Sink -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Danh mục sản phẩm
                            </div>

                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Tên danh mục</th>
                                                <th>Mô tả</th>
                                                <th>Sửa</th>
                                                <th>Xóa</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($select as $see) { ?>
                                                <tr>
                                                    <td> <?php echo $see['id_category']; ?></td>
                                                    <td> <?php echo $see['TenDanhMuc']; ?></td>
                                                    <td> <?php echo $see['MoTa']; ?></td>
                                                    <td>
                                                        <a href="category_update.php?edit=<?php echo $see['id_category']; ?>"
                                                            onclick="return confirm('Bạn có chắc muốn sửa chứ?')">
                                                            Sửa
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="category_delete.php?del=<?php echo $see['id_category']; ?>"
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