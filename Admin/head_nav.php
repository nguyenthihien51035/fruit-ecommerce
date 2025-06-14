<?php
session_start();
?>
<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li>
                <div class="user-img-div">
                    <img src="../Update/<?php echo $_SESSION['AdminAvatar']; ?>" class="img-thumbnail">
                    <div class="inner-text">
                        <?php
                        echo "<p align='right'>Xin chào " . $_SESSION['AdminUser'] . "</p>";
                        ?>
                        <br />
                        <small>Đăng Nhập Gần Nhất: 1 Giờ Trước</small>
                    </div>
                </div>

            </li>


            <li>
                <a class="active-menu" href="indexx.php"><i class="fa fa-dashboard "></i>Dashboard</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-yelp "></i>Danh sách bảng<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="product.php"><i class="fa fa-edit "></i>Thêm sản phẩm</a>
                    </li>
                    <li>
                        <a href="table_product.php"><i class="fa fa-table"></i>Danh sách sản phẩm</a>
                    </li>
                    <li>
                        <a href="category.php"><i class="fa fa-edit "></i>Thêm danh mục sản phẩm</a>
                    </li>
                    <li>
                        <a href="table_category.php"><i class="fa fa-table"></i>Danh mục sản phẩm</a>
                    </li>
                    <li>
                        <a href="select_order.php"><i class="fa fa-table"></i>Danh sách đơn hàng</a>
                    </li>
                    <li>
                        <a href="contact.php"><i class="fa fa-send "></i>Danh Sách Cần Hỗ Trợ</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="logout.php"><i class="fa fa-sign-in "></i>Logout Page</a>
            </li>
        </ul>

    </div>

</nav>