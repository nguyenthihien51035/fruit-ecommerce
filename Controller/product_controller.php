<?php
include('../Model/product_model.php');
$data = new data_product();
?>

<?php
if (isset($_POST['btn_sub'])) // Hàm kiểm tra nút submit hay chưa
{
    //1.Hàm thực hiện upload file từ Client -> Server
    //anh hinhanh
    $a = $_FILES['txthinhanh']['tmp_name'];
    $b = $_FILES['txthinhanh']['name'];
    move_uploaded_file($a, '../Update/' . $b);
    //Thực hiện lấy dữ liệu sở thích

    $insert = $data->insert_product(
        $_POST['txttensp'],
        $_POST["txtsl"],
        $b,
        $_POST['txttheloai'],
        $_POST['txtdate'],
        $_POST['txtgia'],
        $_POST['txtmota']
    );
    echo "<script> alert('Đã thêm sản phẩm') ;
                        window.location='../Admin/product.php'
            </script>";
}
?>

<?php
if (isset($_POST['btn_edit_product'])) {
    //1.Hàm thực hiện upload file từ Client -> Server
    //anh hinhanh
    $a = $_FILES['txthinhanh']['tmp_name'];
    $b = $_FILES['txthinhanh']['name'];
    if ($b == "") {
        $b = $see['HinhAnhSanPham'];
    } else {
        move_uploaded_file($a, '../Update/' . $b);
    }

    $update = $data->update_product(
        $_GET['edit'],
        $_POST['txttensp'],
        $_POST['txtsl'],
        $b,
        $_POST['category_id'],
        $_POST['txtdate'],
        $_POST['txtgia'],
        $_POST['txtmota']
    );

    if ($update)
        echo "<script> alert('Bạn đã sửa sản phẩm thành công') ;
                    window.location='../Admin/table_product.php';
        </script>";
}
?>