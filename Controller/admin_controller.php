<?php
include('../Model/admin_model.php');
?>

<?php
$data = new data_admin();
if (isset($_POST['btnregister'])) //Hàm kiểm tra nhấn nút submit hay chưa
{
    //1.Hàm thực hiện upload file từ Client -> Server
    move_uploaded_file(
        $_FILES['txtfile']['tmp_name'],
        '../Update/' . $_FILES['txtfile']['name']
    );
    //3. Kiểm tra mật khẩu trùng nhau  
    if ($_POST['txtPassword'] != $_POST['txtRePass']) {
        echo "<script>alert('Mật khẩu và nhập lại mật khẩu chưa đúng');
                   window.location='../Admin/register.php';
                </script>";
    }
    //4. Sử dụng hàm empty để kiểm tra trống
    if (empty($_POST['txtFullname']) || empty($_POST['txtPassword'])) {
        echo "<script>alert('Bạn chưa nhập đủ thông tin');
                       window.location='../Admin/register.php';
                    </script>";
    }
    $b = $_FILES['txtfile']['name'];
    $insert = $data->insert_admin(
        $_POST['txtFullName'],
        $_POST['txtPassword'],
        $b
    );
    if ($insert) {
        echo "<script>alert('Bạn đã đăng ký thành công');
                        window.location='../Admin/login.php' ;
                    </script>";
    } else {
        echo "<script>alert('Bạn không thực hiện được')
                window.location='../Admin/login.php' 
                </script>";
    }
}
?>

<?php
session_start();
$data = new data_admin();
if (isset($_POST['btnadmin'])) {
    if (empty($_POST['txtFullname']) || empty($_POST['txtPassword']))
        echo "<script>
                alert('Bạn chưa nhập đủ dữ liệu');
                window.location='../Admin/login.php';
            </script>";
    else {
        $login = $data->login($_POST['txtFullname'], $_POST['txtPassword']);
        if (mysqli_num_rows($login) == 1) {
            $row = mysqli_fetch_assoc($login); // Lấy dữ liệu từ database
            $_SESSION['AdminUser'] = $row['Fullname'];
            $_SESSION['AdminAvatar'] = $row['Avatar']; // Lưu avatar vào session
            echo "<script>
                    alert('Đăng nhập thành công!');
                    window.location='../Admin/indexx.php';
                </script>";
        } else {
            echo "<script>
                    alert('Đăng nhập không thành công! Vui lòng kiểm tra lại thông tin đăng nhập.')
                    window.location='../Admin/login.php';
                </script>";
        }
    }
}
?>