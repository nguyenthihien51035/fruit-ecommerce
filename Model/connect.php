<?php
$server = "localhost:3308";
$user = "root";
$pass = "";
$database = "ninom";
$conn = mysqli_connect($server, $user, $pass, $database);
mysqli_query($conn, 'set names "utf8"');
if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8");

// echo "Kết nối thành công!";
