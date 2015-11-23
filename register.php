 <!doctype html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8" />
 	<title>欢迎注册 </title>
 	<link rel="stylesheet" type="text/css" href="css/formPage.css"/>
 	<script src="js/jquery-1.7.2.min.js" type="text/javascript" charset="utf-8"></script>
 	<script src="js/jquery.metadata.js" type="text/javascript" charset="utf-8"></script>
 	<script src="js/jquery.validate.js" type="text/javascript" charset="utf-8"></script>
 	<script src="js/register.js" type="text/javascript" charset="utf-8"></script>
 	<script type="text/javascript">
 	 $(function()
 	 {
// 	 	   选择select中的option中的值可以直接用select节点 oSel.value
 	 	$("#sex").change(function(){ 
       // alert(this.value);
        document.getElementById("select_content").value=this.value;
   });
    
 	 	  
})
   
 		
 	</script>
 	
 	
 </head>
 <body>
 	<div class="wrapper container">
			<form id="signupForm" method="post" action="registerControler.php">
				<p class="clearfix">
					<label class="one" for="name">昵称：</label>
					<input class="name" name="name" class="required" value placeholder="请输入2-4位昵称" />
				</p>
					<p class="clearfix">
						<input type="hidden" name="select_content" id="select_content" value="" />
					<label class="one" for="sex">性别： </label>
					<select name="sex" id="sex">
						<option value="未知">请选择性别</option>
						<option value="男">男</option>
						<option value="女">女</option>
					</select>
				</p>
				<p class="clearfix">
					<label class="one" for="age">年龄：</label>
					<input class="age" type="text" name="age" value placeholder="请输入年龄" />
				</p>
			
				<p class="clearfix">
					<label class="one" for="password">登录密码：</label>
					<input id="password" name="password1" type="password" value placeholder="密码在8~20个字符之间" />
				</p>
				<p class="clearfix">
					<label class="one" for="confirm_password">确认密码：</label>
					<input id="confirm_password" name="confirm_password" type="password"  value placeholder="请再次输入密码" />
				</p>
				<p class="clearfix">
					<input class="submit" type="submit" value="立即注册" />
				</p>
			</form>
		</div>
 </body>
 </html>