<?php
include('head.php');
include "../Model/order_model.php";
$get_data = new data_order();
$select_order = $get_data->select_order();
?>

<!DOCTYPE html>
<html>

<body>
    <div id="wrapper">
        <?php include('head_top.php'); ?>
        <?php include('head_nav.php'); ?>

        <div id="page-wrapper">
            <div id="page-inner">
                <h2>Quản lý đơn hàng</h2>
                <div class="panel panel-default">
                    <div class="panel-heading">Danh sách đơn hàng</div>
                    <div class="panel-body">
                        <form action="../Controller/order_controller.php" method="POST">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Họ và Tên</th>
                                        <th>SĐT</th>
                                        <th>Địa chỉ</th>
                                        <th>Tổng tiền</th>
                                        <th>Trạng thái</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($select_order as $order) : ?>
                                        <tr>
                                            <td><?php echo $order['id_order']; ?></td>
                                            <td><?php echo $order['username']; ?></td>
                                            <td><?php echo $order['number_order']; ?></td>
                                            <td>Hà Nội</td>
                                            <td><?php echo number_format($order['total'], 0, ',', '.') . ' VND'; ?></td>
                                            <td>
                                                <input type="hidden" name="id_order" value="<?php echo $order['id_order']; ?>">
                                                <select class="form-control" name="txtTrangThai">
                                                    <option value="Đặt hàng thành công" <?= ($order['status_or'] == "Đặt hàng thành công") ? 'selected' : ''; ?>>Đặt hàng thành công</option>
                                                    <option value="Đã chuyển hàng" <?= ($order['status_or'] == "Đã chuyển hàng") ? 'selected' : ''; ?>>Đã chuyển hàng</option>
                                                </select>

                                            </td>
                                            <!-- Nếu trạng thái đơn hàng ($order['status_or']) là "Đã xác nhận", thì lớp CSS sẽ là label-success (màu xanh lá).
                                            Nếu không phải "Đã xác nhận" (tức là "Chưa xác nhận"), thì lớp CSS sẽ là label-warning (màu vàng) -->
                                            <td>
                                                <button type="submit" name="btnUpdateStatus" class="btn btn-primary">Cập nhật</button>
                                                <a href="../Controller/order_controller.php?del=<?php echo $order['id_order']; ?>" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn xóa không?');">Xóa</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.js"></script>
</body>

</html>