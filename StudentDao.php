<?php
require("Student.php");
require("DataSource.php");
 
/**
 * 查询全部学生
 *
 * @return array
 */
function findAllStudents() {
    // 获得数据库连接
    $conn = getConn();
    // 定义SQL字符串
    $sql = "SELECT * FROM student";
    // 执行查询，返回结果集
    $result = $conn->query($sql);
    // 定义学生数组
    $students = array();
    // 定义数组下标
    $i = 0;
    // 遍历结果集
    while($row = $result->fetch_assoc()) {
        $students[$i] = new Student();
        $students[$i]->setId($row['id']);
        $students[$i]->setName($row['name']);
        $students[$i]->setCCode($row['ccode']);
        $students[$i]->setcname($row['cname']);
        $students[$i]->setinstructor($row['instructor']);
        $students[$i]->settaname($row['taname']);
        $students[$i]->settaemail($row['taemail']);
        $students[$i]->setTelephone($row['taphone']);
        $students[$i]->setA($row['A']);
        $students[$i]->setB($row['B']);
        $students[$i]->setC($row['C']);
        $students[$i]->setscore($row['score']);
        $students[$i]->setD($row['D']);
        $students[$i]->setE($row['E']);
        $students[$i]->setlevel($row['level']);
        $students[$i]->setcom($row['com']);
        $i++;
    }
    return $students;
}
 
/**
 * 按学号查询学生
 *
 * @param $id
 * @return null|Student
 */
function findStudentById($id)
{
    // 获得数据库连接
    $conn = getConn();
    // 定义SQL字符串
    $sql = "SELECT * FROM student WHERE id = $id";
    // 执行查询，返回结果集
    $result = $conn->query($sql);
    echo "<table border='1'>
    <tr>
    <th>id</th>
    <th>name</th>
    <th>code</th>
    <th>coursecode</th>
    <th>instructor</th>
	<th>ta'sname</th>
	<th>ta'semail</th>
	<th>ta'sphone</th>
	<th>A</th>
	<th>B</th>
	<th>C</th>
	<th>score</th>
	<th>D</th>
    <th>E</th>
    <th>level</th>
    <th>comment</th>
 
    </tr>";
        // 将查询结果放进关联数组
     while($row = mysqli_fetch_array($result))
		{
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['ccode'] . "</td>";
        echo "<td>" . $row['cname'] . "</td>";
        echo "<td>" . $row['instructor'] . "</td>";
		echo "<td>" . $row['taname'] . "</td>";
		echo "<td>" . $row['taemail'] . "</td>";
		echo "<td>" . $row['taephone'] . "</td>";
		echo "<td>" . $row['A'] . "</td>";
		echo "<td>" . $row['B'] . "</td>";
		echo "<td>" . $row['C'] . "</td>";
		echo "<td>" . $row['score'] . "</td>";
		echo "<td>" . $row['D'] . "</td>";
		echo "<td>" . $row['E'] . "</td>";
		echo "<td>" . $row['level'] . "</td>";
		echo "<td>" . $row['com'] . "</td>";
        echo "</tr>";
        }
     echo "</table>";

 }
/**
 * 添加学生记录
 * @param $student
 * @return bool|mysqli_result
 */
function insertStudent($student)
{
    $id = $student->getId();
    $name = $student->getName();
    $ccode= $student->getCCode();
    $cname = $student->getcname();
	$instructor = $student->getinstructor();
	$taname = $student->gettaname();
	$taemail = $student->gettaemail();
    $taephone = $student->getTelephone();
	$A = $student->getA();
	$B = $student->getB();
	$C= $student->getC();
	$score = $student->getscore();
	$D = $student->getD();
	$E = $student->getE();
	$level = $student->getlevel();
	$com = $student->getcom();

    // 获得数据库连接
    $conn = getConn();
    // 定义SQL字符串
    $sql = "INSERT INTO student VALUES ('$id', '$name', '$ccode', '$cname', '$instructor','$taname','$taemail','$taephone','$A','$B','$C','$score','$D','$E','$level','$com')";
    // 执行插入操作
    $retval = $conn->query($sql);
 
    return $retval;
}
 
/**
 * 按学号删除学生
 *
 * @param $id
 */
function deleteStudentById($id) {
    // 获得数据库连接
    $conn = getConn();
    // 定义SQL字符串
    $sql = "DELETE FROM student WHERE id = $id";
    // 执行删除操作
    $retval = $conn->query($sql);
    return $retval;
}

?>