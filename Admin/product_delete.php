<?php
include('../Model/product_model.php');
$data = new data_product();
$delete = $data->delete_product($_GET['del']);
if ($delete)
    echo "<script> alert('Bạn đã xóa sản phẩm thành công') ;
                        window.location='../Admin/table_product.php';
            </script>";
