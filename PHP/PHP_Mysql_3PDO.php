<?php
$servername = "localhost";
$username = "admin";
$password = "admin";

try {
	// 创建连接  PDO方式
	//(PDO方式 在连接过程需要设置数据库名。如果没有指定，则会抛出异常。)
    $conn = new PDO("mysql:host=$servername;dbname=test", $username, $password);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }

//连接在脚本执行完后会自动关闭。
//也可以手动关闭    $conn = null;
?>