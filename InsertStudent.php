<!DOCTYPE html>
<html lang="en">
<head>	
	    <meta charset="UTF-8">
	    <title>添加学生记录</title>
	    <style>
			 fieldset{
			            background-color: #f1f1f1;
			            border: none;
			            border-radius: 2px;
			            margin-bottom: 6px;
			            overflow: hidden;
			            padding: 0 .625em;
			        }			
			        label{
			            cursor: pointer;
			            display: inline-block;
			            padding: 1px 3px;
			            text-align: center;
			            width: 200px;
			            vertical-align: top;
			        }			
			        input{
			            font-size: inherit;
						align-items: center;
			        }
										
	    </style>
	</head>
<body>   
        <h1>TA反馈信息系统</h1> 
        <p style="font-size: 13px;color: blue">&emsp;&emsp;尊敬的各位老师：<br />&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;大家好!&emsp;&emsp;<br />&emsp;&emsp;
                为了更好的了解学生学习情况，对学生学习状态做出及时反馈，请各位老师填写学生信息，本系统会对收集的信息进行数据分析，对学生是否需要特别关注进行等级判定，真诚感谢您的支持，祝您天天愉快，谢谢！</p>        
		<hr>
<form action="doInsertStudent.php" method="post" >
	<h3>学生基本信息</h3>
	<fieldset>
    <p><label>学生学号:</label>
	<input type="number" name="id"></p><br>
    <p><label>姓名：</label>
	<input type="text" name="name" ></p><br>
    <p><label>课程号：</label>
	 <input type="text" name="ccode"></p><br>
    <p><label>课程名：</label><input type="text" name="cname" ></p><br>
	<p><label>讲师姓名：</label>
	<input type="text" name="instructor"></p><br>
	<p><label>助教姓名：</label>
	<input type="text" name="taname"></p><br>
    <p><label>助教邮箱：</label>
	<input type="email" name="taemail"></p><br>
	<p><label>助教电话(+86)：</label>
	<input type="tel" name="taphone"></p><br>
	<hr>
	<h3>学生学习情况</h3>
	<p><label>出勤率低：</label>
	<input type="checkbox" name="A"></p><br>
	<p><label>未参加期中考试：</label>
	<input type="checkbox" name="B"></p><br>
	<p><label>期中成绩低于平均分：</label>
	<input type="checkbox" name="C"></p><br>
	<h3>若成绩低于平均分，请填写期中成绩</h3><br>
	<p><label>期中成绩：</label>
	<input type="number" name="score"></p><br>
	<p><label>多次未交作业：</label><input type="text" name="D"></p><br>
	<p><label>其他情况：</label>
	<input type="checkbox" name="E"></p><br>
	<p><label>需关注级别：</label>
	<select name="level" id="level">
		<option value="1">level1</option>
		<option value="2">level2</option>
		<option value="3">level3</option>
	</select>	
	<hr>
	<p><label>其他补充：</label>
	<input type="text" name="com" style="font-size:20px;padding-top:30px; height:100px;" ></p><br>
    <p><input type="submit" value="确定"></p>
    <p><input type="reset" value="重置"></p>
</fieldset>
</form>
</body>
</html>
