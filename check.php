<?php
        header("Content-type: text/html; charset=utf-8");
		$username = $_POST['username'];
		$password = $_POST['password'];
		$is_manager=$_POST['is_manager'];
		if ($username == ''){
		    echo '<script>alert("请输入用户名！");history.go(-1);</script>';
		    exit(0);
		}
		if ($password == ''){
		    echo '<script>alert("请输入密码");history.go(-1);</script>';
		    exit(0);
		}
		
		
		$conn = new mysqli('localhost','root','root','test');
			    if ($conn->connect_error){
			        echo '数据库连接失败！';
			        exit(0);
			    }else {
				$sql = "select username,password from userinfo where username = '$_POST[username]' and password = '$_POST[password]'";
				        $result = $conn->query($sql);
				        $number = mysqli_num_rows($result);
				        if ($number ) {
							if ($username == "admin" && $password == "123456") {
				        				        header("Location: index.html");
												
						}else{
				            echo '<script>window.location="user.html";</script>';
							}
				         }else {
				            echo '<script>alert("用户名或密码错误！");</script>';
							echo '<script>window.location="login.html";';
							}	
					}
?>	