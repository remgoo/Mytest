<?php
$servername = "localhost";
$username = "admin";
$password = "admin";

// 创建连接
$conn = mysqli_connect($servername, $username, $password);

// 检测连接 面向过程方式
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";


//连接在脚本执行完后会自动关闭。
//也可以手动关闭  mysqli_close($conn);
?>