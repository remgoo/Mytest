<?php
$servername = "localhost";
$username = "admin";
$password = "admin";


// 创建连接
$conn = new mysqli($servername, $username, $password);

// 检测连接 面向对象方式
// $connect_error 是在 PHP 5.2.9 和 5.3.0 中添加的
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

//连接在脚本执行完后会自动关闭。
//也可以手动关闭    $conn->close();
?>