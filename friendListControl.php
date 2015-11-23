<?php
    
      require_once "MessageService.class.php";
	  $fname=$_GET['fname'];
   // 介绍用户的姓名和密码
    $MessageService=new MessageService();
	$MessageService->friendList($fname);
	
?>