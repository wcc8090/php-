<?php
    require("StudentDao.php");
 
    $id = $_GET['id'];
    $retval = deleteStudentById($id);
    $location="StudentList.php?retval=$retval";
    header("location:$location");
?>