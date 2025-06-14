<?php
include('connect.php');
?>

<?php
class data_order
{
    public function insert_order($id_product, $username, $number_order, $total, $status_or)
    {
        global $conn;
        $sql = "insert into orders (id_product, username, number_order, total, status_or, created_at) 
                values ('$id_product', '$username', '$number_order', '$total', 'Đã xác nhận đơn hàng', now())";
        return mysqli_query($conn, $sql);
    }

    public function get_order_id($id_order)
    {
        global $conn;
        $sql = "select * from orders where id_order = '$id_order'";
        return mysqli_query($conn, $sql);
    }

    public function get_all_orders()
    {
        global $conn;
        $sql = "select * from orders order by created_at DESC";
        return mysqli_query($conn, $sql);
    }

    public function select_order()
    {
        global $conn;
        $sql = "select * from orders";
        $run = mysqli_query($conn, $sql);
        return $run;
    }

    public function delete_order($id_order)
    {
        global $conn;
        $sql = "delete from orders where id_order = $id_order";
        $run = mysqli_query($conn, $sql);
        return $run;
    }

    public function get_order($username, $id_product)
    {
        global $conn;
        $select = "SELECT o.*, p.*, u.*
               FROM orders o
               LEFT JOIN product p ON o.id_product = p.id_product 
               JOIN user u ON o.username = u.username 
               WHERE o.username='$username' 
               AND o.id_product = '$id_product'";
        $run = mysqli_query($conn, $select);
        return $run;
    }

    public function update_order($id, $status)
    {
        global $conn;
        $sql = "UPDATE orders SET status_or = '$status' WHERE id_order = '$id'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
}
?>
