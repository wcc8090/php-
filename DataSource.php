<?php
    function getConn() {
       $host = "localhost";
       $user = "root";
       $password = "root";
       $database = "test";
 
       $conn = mysqli_connect($host, $user, $password, $database);
 
       if ($conn->error) {
           die("连接数据库[$database]失败！");
       }
       return $conn;
    }
?>

