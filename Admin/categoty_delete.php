<?php
include('../Model/category_model.php');
$data = new data_category();
$delete = $data->delete_category($_GET['del']);
if ($delete)
    echo "<script> alert('Bạn đã xóa sản phẩm thành công') ;
                        window.location='../Admin/table_category.php';
            </script>";
