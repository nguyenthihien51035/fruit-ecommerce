<?php
include('../Model/contact_model.php');
$data = new data_contact();
?>

<?php
if (isset($_POST['btncontact'])) {
    if (empty($_POST['txtUser']) || empty($_POST['txtEmail']))
        echo "<script> alert ('Vui lòng nhập đủ thông tin')</script>";

    else {
        $contact = $data->insert_contact($_POST['txtUser'], $_POST['txtEmail'], $_POST['txtPhone'], $_POST['txtMessage']);
        if ($contact)
            echo "<script> 
                alert('Cảm ơn bạn đã liên hệ. Chúng tôi sẽ phản hồi bạn trong thời gian sớm nhất.')
                window.location='../Guest/contact.php';
                </script>";
        else
            echo "<script> 
                    alert('Liên hệ thất bại')
                    window.location='../Guest/contact.php';
                </script>";
    }
}
?>

<?php
if (isset($_GET['del'])) {
    $id = $_GET['del'];
    $delete = $data->delete_contact($id);
    if ($delete) {
        echo "<script>alert('Xóa thành công!'); window.location='../Admin/contact.php';</script>";
    } else {
        echo "<script>alert('Xóa không thành công!');</script>";
    }
}
?>