<?php
include('connect.php');
?>

<?php
class data_user
{
    public function login($Username, $Password)
    {
        global $conn;
        $sql = "select * from user where Username='$Username' and Password='$Password'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }

    public function select_user($Username)
    {
        global $conn;
        $sql = "select * from user where Username ='$Username'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }

    public function register($Username, $Password, $Avatar, $Gender, $Email)
    {
        global $conn;
        $sql = "insert into user(Username,Password,Avatar,Gender,Email)
                          values ('$Username','$Password','$Avatar','$Gender','$Email')";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
}
?>
