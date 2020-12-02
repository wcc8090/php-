<?php
    require("StudentDao.php");
    $id = $_POST['id'];   
    if ($id == null) {
        echo "你要查询的学生不存在！";
    } else {
        echo findStudentById($id);
    }
?>