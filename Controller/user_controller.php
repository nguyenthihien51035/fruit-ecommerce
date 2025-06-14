<?php
include('../Model/user_model.php');
?>

<?php
session_start();

$data = new data_user();

if (isset($_POST['btnlogin'])) {
    $username = $_POST['txtUser'];
    $password = $_POST['txtPassword'];

    if (empty($username) || empty($password)) {
        echo "<script>
                alert('Bạn chưa nhập đủ dữ liệu');
                window.location='../Guest/login.php';
              </script>";
        exit();
    }

    $login = $data->login($username, $password);

    if (mysqli_num_rows($login) == 1) {
        $_SESSION['User'] = $username; // Lưu user vào session

        // Nếu có trang trước khi login, chuyển hướng về đó
        if (isset($_SESSION['redirect_after_login'])) {
            $redirect_url = $_SESSION['redirect_after_login'];
            unset($_SESSION['redirect_after_login']); // Xóa session sau khi dùng
            header("Location: $redirect_url"); // Quay lại trang trước đó (order.php)
            exit();
        } else {
            // Nếu không có trang trước đó, chuyển về trang chính
            echo "<script>
                    alert('Đăng nhập thành công!');
                    window.location='../Guest/fruit.php';
                  </script>";
            exit();
        }
    } else {
        echo "<script>
                alert('Đăng nhập không thành công!');
                window.location='../Guest/login.php';
              </script>";
        exit();
    }
}
?>


<?php
$data = new data_user();
if (isset($_POST['txtregister'])) //Hàm kiểm tra nhấn nút submit hay chưa
{
    //1.Hàm thực hiện upload file từ Client -> Server
    move_uploaded_file(
        $_FILES['txtfile']['tmp_name'],
        '../Update/' . $_FILES['txtfile']['name']
    );
    //3. Kiểm tra mật khẩu trùng nhau
    if ($_POST['txtPassword'] != $_POST['txtRePassword']) {
        echo "<script>alert('Mật khẩu và nhập lại mật khẩu chưa đúng')
                   window.location='register.php'
                </script>";
    }
    //4. Sử dụng hàm empty để kiểm tra trống
    elseif (empty($_POST['txtUser']) || empty($_POST['txtPassword'])) {
        echo "<script>alert('Bạn chưa nhập đủ thông tin')
                       window.location='register.php'
                    </script>";
    } else {   // 5. Kiểm tra User đã có người dùng chưa bằng hàm select_user
        $select_user = $data->select_user($_POST['txtUser']);
        //Nếu user chưa có người thì thực hiện thêm mới người dùng
        if (mysqli_num_rows($select_user) == 0) {  //6. Thêm mới người dụng bằng hàm register
            $insert = $data->register(
                $_POST['txtUser'],
                $_POST['txtPassword'],
                $_POST['txtfile'],
                $_POST['txtGender'],
                $_POST['txtEmail']
            );
            if ($insert) {
                echo "<script>alert('Bạn đã đăng ký thành công');
                               window.location='../Guest/login.php' ;
                           </script>";
            } else {
                echo "<script>alert('Bạn không thực hiện được')
                       window.location='register.php' 
                       </script>";
            }
        } else {
            echo "<script>alert('User đã có người dùng hãy chọn User khác')
                       window.location='register.php' 
                       </script>";
        }
    }
}
?>
