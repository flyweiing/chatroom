<?php 
     
    require_once "MessageService.class.php";
   //接受信息
   $sender=$_POST['sender'];
   $getter=$_POST['getter'];
   $content=$_POST['content'];
   
  //把信息输出到一个文件中
  //file_put_contents("C:/wamp/www/testinfo.log",$sender."-".$getter.'-'.$content."\r\n", FILE_APPEND);
    $MessageService=new MessageService();
	$MessageService->addMessage($sender, $getter, $content);
     
 ?>