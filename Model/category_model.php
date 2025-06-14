<?php
include('connect.php');
?>

<?php
class data_category
{
    public function insert_category($TenDanhMuc, $MoTa)
    {
        global $conn;
        $sql = "insert into category(tendanhmuc, mota) values ('$TenDanhMuc', '$MoTa')";
        echo $sql;
        $run = mysqli_query($conn, $sql);
        return $run;
    }

    public function select_category()
    {
        global $conn;
        $sql = "select * from category";
        $run = mysqli_query($conn, $sql);
        return $run;
    }

    public function select_category_id($id_category)
    {
        global $conn;
        $sql = "select * from category where id_category = '$id_category'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }

    public function update_category($id_category, $TenDanhMuc, $MoTa)
    {
        global $conn;
        $sql = "update category set tendanhmuc = '$TenDanhMuc', mota = '$MoTa'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }

    public function delete_category($id_category)
    {
        global $conn;
        $sql = "delete from category where id_category = '$id_category'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }

    public function select_category_name()
    {
        global $conn;
        $sql = "select tendanhmuc from category";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
}
?>