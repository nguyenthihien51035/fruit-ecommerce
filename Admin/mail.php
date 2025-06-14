<?php
$email_nguoinhan = isset($_GET['email']) ? $_GET['email'] : '';
?>

<?php
include("PHPMailer/src/Exception.php");
include("PHPMailer/src/OAuth.php");
include("PHPMailer/src/POP3.php");
include("PHPMailer/src/PHPMailer.php");
include("PHPMailer/src/SMTP.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
</head>

<body>
    <?php
    $mail = new PHPMailer(true);
    try {
        $mail->SMTPDebug = 2;
        $mail->isSMTP(); // set may chu
        $mail->Host = "smtp.gmail.com"; // may chu gui maill
        $mail->SMTPAuth = true;
        $mail->Username = 'hien51035@gmail.com';
        $mail->Password = 'dnhyhatmftdsqgsc';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->CharSet = 'UTF-8';
        $mail->SetFrom('hien51035@gmail.com');
        $mail->addAddress($email_nguoinhan, 'Nimo');
        $mail->isHTML(true);
        $mail->Subject = 'Cảm ơn bạn đã liên hệ!';
        $mail->Body = "Xin chào,<br>Cảm ơn bạn đã gửi liên hệ. Chúng tôi sẽ phản hồi sớm nhất có thể.";
        $mail->send();
        echo "<script> alert('email gửi thành công'); window.location = 'contact.php'; </script> ";
    } catch (Exception $ex) {
        echo "Bug: ", $mail->ErrorInfo;
    }
    ?>
</body>

</html>