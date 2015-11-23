<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<title>
			login
		</title>
		<script src="js/prefixfree.min.js" type="text/javascript" charset="utf-8"></script>
		<link rel="stylesheet" href="css/base.css" />
		<link rel="stylesheet" type="text/css" href="css/common.css"/>
		<link rel="stylesheet" type="text/css" href="css/loginPage.css"/>
		
		<style type="text/css">
	      .yun1 {
	position: absolute;
	top: 62px;
	left: 235px;
	animation: yun11 10s linear infinite;
}
@keyframes yun11 {
	0 {
		left: 235px;
		opacity: 1;
		filter: alpha(opacity: 100;
		);
	}
	50% {
		left: 285px;
		opacity: 0.5;
		filter: alpha(opacity: 50);
	}
	100% {
		left: 235px;
	}
}
.yun2 {
	position: absolute;
	right: 10px;
	top: 134px;
	animation: yun22 10s linear infinite backwards;
}
@keyframes yun22 {
	0% {
		right: 10px;
		opacity: 1;
		filter: alpha(opacity: 100
		);
	}
	50% {
		right: 60px;
		opacity: 0.5;
		filter: alpha(opacity: 50);
	}
	100% {
		right: 10px;
	}
}
.yun3 {
	position: absolute;
	top: 175px;
	left: 0px;
	animation: yun33 10s linear infinite backwards;
}
@keyframes yun33 {
	0% {
		left: 0px;
		opacity: 1;
		filter: alpha(opacity: 100;
		);
	}
	50% {
		left: 100px;
		opacity: 0.5;
		filter: alpha(opacity: 50);
	}
	100% {
		left: 0px;
	}
}
 </style>
<script type="text/javascript">
	 window.onload=function()
	 {
	 	 var Oregister=document.getElementById("register");
	 	 Oregister.onclick=function()
	 	 {
	 	 	 window.open("register.php","_blank");
	 	 	 window.close();
	 	 }
	 }
</script>
	</head>
	<body class="pr">
		<!--登录框的设置-->
		<div class="pa login f20">
			<form action="loginController.php" method="post">
				昵称：
				<input type="text" name="username" id="username" placeholder="请输入你的名称" required="required" checked="checked"/>
				<br />
				<br />
				密码：
				<input type="password" name="pswd" id="pswd" placeholder="请输入8-20位密码" required="required"/>
				<br />
				<br />
				<input type="submit" name="denglu" id="denglu" value="登录" class="ml-60 button" />
				<input type="button" name="register" id="register" value="注册"  class="ml-30 button"/>
			</form>
		</div>
		<!--登录框设置结束-->
		<!--白云飘飘设置-->
		<div class="yun">
			<img src="img/yun1.png" class="yun1"/>
			<img src="img/yun2.png" class="yun2"/>
			<img src="img/yun3.png"/ class="yun3">
		</div>
	</body>
</html>