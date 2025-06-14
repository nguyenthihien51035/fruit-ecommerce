<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include('head.php'); ?>

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
                        <h1 class="page-head-line">CATEGORY FORM</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text.
                        </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                Danh mục sản phẩm
                            </div>
                            <div class="panel-body">
                                <form role="form" method="POST" action="../Controller/category_controller.php">
                                    <div class="form-group">
                                        <label>Tên danh mục</label>
                                        <input class="form-control" type="text" name="txttencate">
                                        <p class="help-block">Nhập tên danh mục ở đây.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Mô tả</label>
                                        <textarea class="form-control" rows="3" name="txtmotacate"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-info" name="btn_cate">Thêm danh mục </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <?php include('footer.php'); ?>
</body>

</html>