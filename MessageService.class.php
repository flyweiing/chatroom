<?php
     
       require_once 'SqlHelper.class.php';
    class MessageService 
	  {
	  	
		//注册新用户
		  function addRegister($name,$sex,$age,$pwd)
		  {
		  	$sql="insert into user(name,sex,age,password,rtime) values('$name','$sex','$age','$pwd',now())";
			 $sqlhelper=new SqlHelper();
			file_put_contents("C:/wamp/www/testinf.log","sql=".$sql."\r\n", FILE_APPEND);
			return $sqlhelper->execute_dml($sql);//执行一条语句,不返回数据，只是返回成功失败
			 //echo"ok";
		  }
		  //检查登录
		  function checkUser($name)
		  {
		  	  $sql="select password from user where name='$name'";
			   $sqlhelper=new SqlHelper();
			    $array=$sqlhelper->execute_dql($sql);
				 
					
					for($i=0;$i<count($array);$i++)
					{
						$row=$array[$i];
					    $str.=$row["password"];
					 file_put_contents("C:/wamp/www/testinf.log","sql=".$row["password"]."\r\n", FILE_APPEND);
					}  
					
				    
			   return $str;
		  }
	  	//信息添加到数据库
	  	//类名的首字母都大写  函数的第二个字母大写
	  	 function addMessage($sender,$getter,$content)
		 {
			$sql="insert into messages(sender,getter,content,sendTime) values('$sender','$getter','$content',now())";
			
		    // file_put_contents("C:/wamp/www/testinfo.log","sql=".$sql."\r\n", FILE_APPEND);
		   
		 	$sqlhelper=new SqlHelper();
			
			$array=$sqlhelper->execute_dml($sql);//执行一条语句
		 }
		 
		 //获取数据，并将数据组装好返回页面
		  
				 function getMessage($getter,$sender)
				 {
				 	$sql="select * from messages where getter='$getter' and sender='$sender' and isGet=0";
					
					//注意此处的sql语句中sender=“$getter”；是加引号的
					//file_put_contents("C:/wamp/www/testinfo.log","sql=".$sql."\r\n", FILE_APPEND);
					
				    $sqlhelper=new SqlHelper();
			       $array=$sqlhelper->execute_dql($sql);//dql返回的是数组
					
					$mesInfo="<mes>";
					
					for($i=0;$i<count($array);$i++)
					{
						$row=$array[$i];
						$mesInfo.=" <mesId>{$row ['id']}</mesId>
						            <sender>{$row ['sender']}</sender>
						            <getter>{$row ['getter']}</getter>
						           <content>{$row ['content']}</content>
						           <sendTime>{$row ['sendTime']}</sendTime>";
					}  
					
				    $mesInfo.="</mes>";
					 
				  $sqll="update messages set isGet=1 where getter='$getter' and sender='$sender'";
				// file_put_contents("C:/wamp/www/testinfo.log","sql=".$sql."\r\n", FILE_APPEND);
				 
				  $sqlhelper->execute_dml($sqll);
				 
					//file_put_contents("C:/wamp/www/testinfo.log", $mesInfo."\r\n",FILE_APPEND);
				    $sqlhelper->close_connect();
				   return  $mesInfo;
				    
				 }
              function friendList($name)
			  {
			  	   $sql="select name,age from user where name='$name'";
				   $array=$sqlhelper->execute_dql($sql);//dql返回的是数组
				   $sqlhelper=new SqlHelper();
				   	$mes="";
					for($i=0;$i<count($array);$i++)
					{
						$row=$array[$i];
						$mes.="昵称：$row ['name']-----年龄:
						           $row ['age']";
					}  
					
				    
				    file_put_contents("C:/wamp/www/testinfo.log", $mes."\r\n",FILE_APPEND);
					 return $mes;
			      
			  }
            
           
	  }

?>