<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "vegetable";

// Tạo kết nối đến database dùng mysqli_connect()
$conn = mysqli_connect($servername, $username, $password, $database)  or die("không thể kết nối tới database");
// Thiết lập kết nối ủa chúng ta khi truy vấn là dạng UTF8 trong trường hợp dữ liệu là tiếng việt có dâu
mysqli_query($conn,"SET NAMES 'UTF8'")

?>