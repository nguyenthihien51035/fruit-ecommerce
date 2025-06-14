<?php
include('../Model/category_model.php');
$data = new data_category();
?>

<?php
if (isset($_POST['btn_cate'])) // Kiểm tra nếu nút submit đã được nhấn
{
    if (empty($_POST['txttencate'])) {
        echo "<script> alert('Tên danh mục không được để chống!');
                            window.location='../Admin/product.php';
                </script>";
    } else {
        $insert = $data->insert_category(
            $_POST['txttencate'],
            $_POST['txtmotacate']
        );
        echo "<script> alert('Đã thêm danh mục sản phẩm') ;
                            window.location='../Admin/category.php';
                </script>";
    }
}
?>

<?php
if (isset($_POST['btn_edit_category'])) {
    $update = $data->update_category($_GET['edit'], $_POST['txttencate'], $_POST['txtmotacate']);
    if ($update)
        echo "<script> alert('Bạn đã cập nhật thành công danh mục sản phẩm') ;
                    window.location='../Admin/table_category.php';
        </script>";
}
?>



