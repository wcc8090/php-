<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>学生列表</title>
</head>
<body>
<h3>学生列表</h3>
<?php
    require("StudentDao.php");
    @$retval = $_GET['retval'];
    if ($retval) {
        echo "<script type='text/javascript'>alert('记录删除成功！');</script>";
    }
 
    $students = findAllStudents();
    if (count($students) > 0) {
        echo "<table border='1' cellpadding='11' cellspacing='0'>";
        echo "<tr><td>学生学号</td><td>学生姓名</td><td>课程号</td><td>课程名</td>"
                ."<td>讲师</td><td>助教</td><td>助教邮箱</td><td>助教电话</td>"
				."<td>A：出勤率低</td><td>B：未参加期中考试</td><td>C：期中成绩低于平均分</td><td>期中成绩</td><td>D：多次未交作业</td>"
				."<td>其他情况</td><td>关注级别</td><td>其他补充</td><td>操作</td></tr>";
        foreach ($students as $student) {
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
            $com = $student->getCom();
            echo "<tr><td>$id</td><td>$name</td><td>$ccode</td><td>$cname</td>"
                ."<td>$instructor</td><td>$taname</td><td>$taemail</td><td>$taephone</td>"
				."<td>$A</td><td>$B</td><td>$C</td><td>$score</td><td>$D</td>"
				."<td>$E</td><td>$level</td><td>$com</td>" 
                ."<td><a href='DeleteStudentById.php?id=$id' onclick='return deleteStudent();'>删除</a></td>
				</tr>";
        }
        echo "</table>";
    } else {
        echo "学生表里没有记录！";
    }
?>
<script type="text/javascript">
    function deleteStudent() {
        var choice = confirm("你是否要删除该记录？");
        return choice;
    }
</script>
</body>
</html>