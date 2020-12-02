<?php
    require("StudentDao.php");
    $id = $_POST['id'];
    $name = $_POST['name'];
    $ccode = $_POST['ccode'];
    $cname= $_POST['cname'];
    $instructor = $_POST['instructor'];
	 $taname = $_POST['taname'];
	  $taemail = $_POST['taemail'];
	   $taphone = $_POST['taphone'];
	    $A = $_POST['A'];
		 $B= $_POST['B'];
		  $C= $_POST['C'];
		   $score = $_POST['score'];
		    $D= $_POST['D'];
			$E = $_POST['E'];
			$level = $_POST['level'];
             $com = $_POST['com'];
			 
			 
    $student = new Student();
    $student->setId($id);
    $student->setName($name);
    $student->setCCode($ccode);
    $student->setcname($cname);
    $student->setinstructor($instructor);
	$student->settaname($taname);
$student->settaemail($taemail);
$student->setTelephone($taphone);
$student->setA($A);
$student->setB($B);
$student->setC($C);
$student->setscore($score);
$student->setD($D);
$student->setE($E);
$student->setlevel($level);
$student->setcom($com);
    $retval = insertStudent($student);
 
    if ($retval) {
        echo "记录插入成功！";
    } else {
        echo "记录插入失败！";
    }
?>
