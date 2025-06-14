<?php
include('../Model/order_model.php');
include('../Model/product_model.php');
session_start();

$get_data = new data_order();
$product_data = new data_product();

if (isset($_POST['txtup'])) {
    // Lấy ID sản phẩm từ form hoặc URL
    $id_product = $_POST['id_product'] ?? $_GET['order'] ?? null; //?? để lấy giá trị hợp lệ đầu tiên trong 3 trường dữ liệu

    if (!$id_product) {
        echo "<script>
                alert('Lỗi! Không có sản phẩm để cập nhật.');
                window.location.href = '../Guest/index.php';
              </script>";
        exit();
    }

    $new_quantity = $_POST['txtnumber']; // Số lượng mới từ form

    // Lấy thông tin sản phẩm từ database
    $select = $product_data->select_product_id($id_product);
    $se_fruit = mysqli_fetch_assoc($select);

    if ($new_quantity <= 0) {
        echo "<script>
                alert('Bạn không được nhập số âm!');
                window.location.href = '../Guest/order.php?order=$id_product';
              </script>";
        exit();
    }

    if ($new_quantity > $se_fruit['SoLuongSanPham']) {
        echo "<script>
                alert('Số lượng không đủ, vui lòng chọn lại!');
                window.location.href = '../Guest/order.php?order=$id_product';
              </script>";
    } else {
        // Tính tổng tiền mới
        $total = $se_fruit['GiaSanPham'] * $new_quantity;

        // Cập nhật số lượng tồn kho hiển thị (chưa trừ trong database)
        $new_stock = $se_fruit['SoLuongSanPham'] - $new_quantity;

        // Chuyển hướng lại `order.php` với giá trị cập nhật
        header("Location: ../Guest/order.php?order=$id_product&updated_quantity=$new_quantity&updated_stock=$new_stock&updated_total=$total");
        exit();

        if ($update) {
            echo "<script>
                    alert('Cập nhật thành công!');
                    window.location.href = '../Guest/order.php?order=$id_product';
                  </script>";
        } else {
            echo "<script>alert('Cập nhật thất bại!');</script>";
        }
    }
}
?>

<?php
if (isset($_POST['txtdel'])) {
    header('location:../Guest/fruit.php');
}
?>


<?php
if (isset($_POST['txtSubmit'])) {
    // Lấy lại thông tin sản phẩm để cập nhật số lượng mới
    $select = $product_data->select_product_id($_POST['id_product']);
    $se_fruit = mysqli_fetch_assoc($select);

    if ($se_fruit['SoLuongSanPham'] <= 0) {
        echo "<script> alert('Sản phẩm đã hết hàng! Vui lòng chọn sản phẩm khác.'); window.location.href='../Guest/order.php?order=" . $_POST['id_product'] . "'; </script>";
        exit();
    }

    if (empty($_POST['txtnumber'])) {
        echo "<script>alert('Bạn chưa nhập số lượng!');</script>";
        exit();
    }

    if (empty($_SESSION['User'])) {
        echo "<script>
                if(confirm('Bạn phải đăng nhập để đặt hàng')) window.location.href='../Guest/login.php';
            </script>";
        exit();
    }

    if ($_POST['txtnumber'] > $se_fruit['SoLuongSanPham']) {
        echo "<script>alert('Số lượng không đủ, vui lòng chọn lại!'); window.location.href='../Guest/order.php?order=" . $_POST['id_product'] . "';</script>";
        exit();
    }

    // Cập nhật số lượng còn lại trong kho
    $number_total = $se_fruit['SoLuongSanPham'] - $_POST['txtnumber'];
    $update = $product_data->update_number($number_total, $_POST['id_product']);
    $_SESSION['ID_Product'] = $_POST['id_product'];
    if (!$update) {
        echo "<script>alert('Lỗi khi cập nhật số lượng sản phẩm!');</script>";
        exit();
    }

    // Thêm đơn hàng vào database
    $insert = $get_data->insert_order(
        $_POST['id_product'],
        $_SESSION['User'],
        $_POST['txtnumber'],
        $se_fruit['GiaSanPham'] * $_POST['txtnumber'],
        0
    );

    if ($insert) {
        header('location:../Guest/check_order.php');
    } else {
        echo "<script>alert('Đặt hàng thất bại!');</script>";
    }
}
?>

<?php
if (isset($_POST['btnUpdateStatus'])) {
    $id_order = $_POST['id_order'];
    $new_status = $_POST['txtTrangThai'];

    $update = $get_data->update_order($id_order, $new_status);

    if ($update) {
        echo "<script>alert('Cập nhật trạng thái thành công!'); window.location.href='../Admin/select_order.php';</script>";
    } else {
        echo "<script>alert('Cập nhật thất bại!');</script>";
    }
}

// if (isset($_POST['btnUpdateStatus'])) {
//     $id_order = $_POST['id_order'];
//     $new_status = $_POST['txtTrangThai'];

//     if (!empty($id_order) && !empty($new_status)) {
//         $update = $get_data->update_order($id_order, $new_status);

//         if ($update) {
//             echo "<script>alert('Cập nhật trạng thái thành công!'); window.location='../Admin/select_order.php';</script>";
//         } else {
//             echo "<script>alert('Cập nhật thất bại!');</script>";
//         }
//     } else {
//         echo "<script>alert('Dữ liệu không hợp lệ!');</script>";
//     }
// }

?>



<?php
$del = $get_data->delete_order($_GET['del']);
if ($del) echo "<script> alert('Đã xóa đơn hàng ');
                             window.location='../Admin/select_order.php'
                             </script>";
else echo "<script>alert('Xóa đơn hàng thất bại')</script>";
?>

