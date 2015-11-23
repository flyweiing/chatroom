<?php 
     
    require_once "MessageService.class.php";
   //接受信息
   $name=$_POST['name'];
   $sex=$_POST['select_content'];
   $age=$_POST['age'];
   $pwd=$_POST['password1'];
   
  //把信息输出到一个文件中
 file_put_contents("C:/wamp/www/testinf.log",$name."-".$sex.'-'.$age.'-'.$pwd."\r\n", FILE_APPEND);
    $MessageService=new MessageService();
	$MessageService->addRegister($name, $sex, $age, $pwd);
     
 ?>
 <script type="text/javascript">
 	window.onload=function()
 	{
 		 window.close();
 	}
 	
 </script>