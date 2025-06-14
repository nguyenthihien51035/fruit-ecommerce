<?php
include('connect.php');
?>

<?php
class data_admin
{
    public function insert_admin($Fullname, $Password, $Avatar)
    {
        global $conn;
        $sql = "insert into admin(Fullname, Password, Avatar)
                          values ('$Fullname', '$Password', '$Avatar')";
        $run = mysqli_query($conn, $sql);
        echo $sql;
        return $run;
    }

    public function select_admin()
    {
        global $conn;
        $sql = "select * from admin";
        $run = mysqli_query($conn, $sql);
        echo $sql;
        return $run;
    }

    public function login($Fullname, $Password)
    {
        global $conn;
        $sql = "select * from admin where Fullname='$Fullname' and Password='$Password'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }

    public function select_admin_id($id_admin)
    {
        global $conn;
        $sql = "select * from admin where id_admin = '$id_admin'";
        $run = mysqli_query($conn, $sql);
        echo $sql;
        return $run;
    }
}
?>