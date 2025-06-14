<?php
include('head.php');
include "../Model/order_model.php";

$get_data = new data_order();

// Lấy ID đơn hàng từ URL
if (isset($_GET['id'])) {
    $id_order = $_GET['id'];
    $order = $get_data->get_order_id($id_order);
} else {
    echo "<script>alert('Không tìm thấy đơn hàng!'); window.location='select_order.php';</script>";
    exit();
}

// Xử lý cập nhật trạng thái đơn hàng
if (isset($_POST['btnUpdateStatus'])) {
    $new_status = $_POST['txtTrangThai'];

    $update = $get_data->update_order($id_order, $new_status);
    if ($update) {
        echo "<script>alert('Cập nhật trạng thái thành công!'); window.location='select_order.php';</script>";
    } else {
        echo "<script>alert('Cập nhật thất bại!');</script>";
    }
}
?>

<!DOCTYPE html>
<html>

<body>
    <div id="wrapper">
        <?php include('head_top.php'); ?>
        <?php include('head_nav.php'); ?>

        <div id="page-wrapper">
            <div id="page-inner">
                <h2>Cập nhật trạng thái đơn hàng</h2>

                <form method="POST">
                    <div class="form-group">
                        <label>ID Đơn hàng</label>
                        <input class="form-control" type="text" value="<?php echo $order['id_order']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Họ và Tên</label>
                        <input class="form-control" type="text" value="<?php echo $order['username']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Số điện thoại</label>
                        <input class="form-control" type="text" value="<?php echo $order['number_order']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <input class="form-control" type="text" value="<?php echo $order['address']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Tổng tiền</label>
                        <input class="form-control" type="text" value="<?php echo number_format($order['total'], 0, ',', '.'); ?> VND" readonly>
                    </div>
                    <div class="form-group">
                        <label>Trạng thái đơn hàng</label>
                        <select class="form-control" name="txtTrangThai">
                            <option value="Đặt hàng thành công" <?= ($order['status_or'] == "Đặt hàng thành công") ? 'selected' : ''; ?>>Đặt hàng thành công</option>
                            <option value="Đã chuyển hàng" <?= ($order['status_or'] == "Đã chuyển hàng") ? 'selected' : ''; ?>>Đã chuyển hàng</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" name="btnUpdateStatus">Cập nhật</button>
                    <a href="select_order.php" class="btn btn-secondary">Quay lại</a>
                </form>
            </div>
        </div>
    </div>

    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.js"></script>
</body>

</html>