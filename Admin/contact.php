<?php
include('../Model/contact_model.php');
$data = new data_contact();
$result = $data->select_contact();
?>

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
                        <h1 class="page-head-line">Data Table</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text.
                        </h1>

                    </div>
                </div>

                <div class="row">

                    <div class="col-md-12">
                        <!--    Bordered Table  -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Danh Sách Liên Hệ
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive table-bordered">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>FullName</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Message</th>
                                                <th>Seen Mail</th>
                                                <th>Xóa</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($se_pro = mysqli_fetch_array($result)) {
                                            ?>
                                                <tr>
                                                    <td> <?php echo $se_pro['id_contact']; ?></td>
                                                    <td> <?php echo $se_pro['Fullname']; ?></td>
                                                    <td> <?php echo $se_pro['Email']; ?></td>
                                                    <td> <?php echo $se_pro['Phonenumber']; ?> </td>
                                                    <td> <?php echo $se_pro['Message']; ?></td>
                                                    <td>
                                                        <a
                                                            href="mail.php?email=<?php echo $se_pro['Email']; ?>">
                                                            Gửi
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="../Controller/contact_controller.php?del=<?php echo $se_pro['id_contact']; ?>"
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
                        <!--  End  Bordered Table  -->
                    </div>
                </div>
                <!-- /. ROW  -->

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <?php
    include('footer.php');
    ?>


</body>

</html>