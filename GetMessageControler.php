<?php
  	header("Content-Type: text/xml;charset=utf-8");
	//告诉浏览器不要缓存数据
	header("Cache-Control: no-cache");
   //取出相应用户取得数据的请求
    require_once "MessageService.class.php";
       //此处取得是上一页定义首尾变量
    $getter=$_POST['getter'];

	$sender=$_POST['sender'];
	
	//file_put_contents("C:/wamp/www/testinfo.log",$sender."-".$getter."\r\n", FILE_APPEND);
	
	
    $MessageService=new MessageService();
    $mesList=$MessageService->getMessage($getter,$sender);
	
 	//file_put_contents("C:/wamp/www/testinfo.log", $mesList."\r\n",FILE_APPEND);
	
     echo $mesList;

?>