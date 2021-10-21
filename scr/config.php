<?php
    session_start();

    define('LOCALHOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'QuanLyDuocPham');

    $conn = mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD,DB_NAME, '3306');
    if(!$conn){
        die("Không thể kết nối");
    }

?>