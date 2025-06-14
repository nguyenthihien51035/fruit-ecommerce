<?php
include('connect.php');
?>

<?php
class data_contact
{
    public function insert_contact($Fullname, $Email, $Phonenumber, $Message)
    {
        global $conn;
        $sql = "insert into contact(Fullname, Email, Phonenumber, Message)
                          values ('$Fullname', '$Email', '$Phonenumber',' $Message')";
        $run = mysqli_query($conn, $sql);
        echo $sql;
        return $run;
    }
    public function select_contact()
    {
        global $conn;
        $sql = "select * from contact";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    public function delete_contact($id_contact)
    {
        global $conn;
        $sql = "DELETE FROM contact WHERE id_contact = '$id_contact'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
}
?>