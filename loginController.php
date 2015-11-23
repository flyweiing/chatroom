<?php
    
      require_once "MessageService.class.php";
   // 介绍用户的姓名和密码
   $loginUser=$_POST['username'];
   $pswd=$_POST['pswd'];
   $MessageService=new MessageService();
   $pass=$MessageService->checkUser($loginUser);   
	//file_put_contents("C:/wamp/www/testinfo.log",$pass."\r\n", FILE_APPEND);
   if($pswd==$pass)
   {
   	 header("Location:friendList.php");
	 
	 //名字被保存到session中
	 session_start();
	 $_SESSION['loginUser']=$loginUser;
   }
  else
  	{
  		header("Location:login.php");//跳转到下一个页面
  		
  	}

?>