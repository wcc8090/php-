<!DOCTYPE html>
<html lang="ch">
<head>
    <meta charset="UTF-8">
    <title>按学号查询学生</title>
	<style>
		html{
		    height: 100%;
		}
		body{
		    height: 100%;
		    font-family: 'JetBrains Mono Medium';
		    display: flex;
		    align-items: center;
		    justify-content: center;
		    background-color: black;
		}
		.form-wrapper{
		    width: 300px;
		    background-color: rgb(41,45,62);
		    color: #ffffff;
		    border-radius: 2px;
		    padding: 50px;
		}
		.form-wrapper .header{
		    text-align: center;
		    font-size: 35px;
		    text-transform: uppercase;
		    line-height: 100px;
		}
		.form-wrapper .action{
		    display: flex;
		    justify-content: center;
		}
		.form-wrapper .action .btn{
		    width: 60%;
		    text-transform: uppercase;
		    border: 2px solid #FFFFFF;
		    text-align: center;
		    line-height: 50px;
		    border-radius: 30px;
		    cursor: pointer;
		    transition:0.2s;
		}
	</style>
</head>
<body>
	<div class="form-wrapper" align="center" >
		<div class="header">
		        按学号查询学生
		</div>
<div class="action">
    <form action="doFindStudentById.php" method="post">
        学生学号：<input type="number" name="id">
</div>
	 <div class="border-wrapper">
	         <input type="submit" value="查询"><br>
	  </div>
  </div>
</form>
</body>
</html>