<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
include('head.php');
?>

<body>
    <div id="wrapper">
        <?php
        include('head_top.php');
        ?>
        <!-- /. NAV TOP  -->
        <?php
        include('head_nav.php');
        ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Basic Forms</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                SINGUP FORM
                            </div>
                            <div class="panel-body">
                                <form role="form" action="../Controller/admin_controller.php" method="POST" enctype="multipart/form-data">>
                                    <div class="form-group">
                                        <label>Enter Full Name</label>
                                        <input class="form-control" type="text" name="txtFullname">
                                        <p class="help-block">Help text here.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Enter Password</label>
                                        <input class="form-control" type="password" name="txtPassword">
                                        <p class="help-block">Help text here.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Re Type Password </label>
                                        <input class="form-control" type="password" n name="txtRePass">
                                        <p class="help-block">Help text here.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Avatar </label>
                                        <input class="form-control" type="file" name="txtfile">
                                    </div>

                                    <button type="submit" class="btn btn-danger" name="btnregister">Register Now </button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.ROW-->
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <div id="footer-sec">
        &copy; 2014 YourCompany | Design By : <a href="http://www.binarytheme.com/" target="_blank">BinaryTheme.com</a>
    </div>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>

</body>

</html>