<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>聊天室</title>
	<link rel="stylesheet" type="text/css" href="css/base.css"/>
	<link rel="stylesheet" type="text/css" href="css/common.css"/>
    
	<style type="text/css">
	body{ background: url(img/chatroom_bg.png) no-repeat top center; background-size: cover;}
	#mycon #content{ border: none; font-size: 16px;}
	
</style>
	<script src="js/wave.js" type="text/javascript" charset="utf-8"></script>
	<?php
	//接受传过来的值
	$username = $_GET['username'];
	  $username=trim($username); //trim去掉首尾处的空格
	
	//得到登录人的信息
	session_start();
   $loginUser=$_SESSION['loginUser'];
 ?>
	<script type="text/javascript">
	               window.resizeTo(200, 200);
	            //   var oSend=document.getElementById("send");//为什么在这里定义不行？？？？？？？
					var oAjax = xmlHttpRequest(); 
					function sendMessage() 
					{
						    var oSend=document.getElementById("content");
						    if(oSend.value=="")
						    {
						    	 alert("亲，不能为空");
						    	return;
						    }
							 if(oAjax)
							 {
								//定义变量
								urll = "SendMessageControler.php";
								//js中嵌套php代码
								data = "content=" + $('content').value + "&getter=<?php echo $username  ?>&sender=<?php echo $loginUser ?>";
									
								oAjax.open("post", urll, true);
									oAjax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
									oAjax.send(data);
									oAjax.onreadystatechange = function()
									 {
										if (oAjax.readyState == 4) 
										{
											if (oAjax.status == 200)
											 {
											 	  //时间格式的设置
											 	 var time=new Date();
											 	// alert(time.toLocaleString());
											 	 var hours=time.getHours();
											 	 var minute=time.getMinutes();
											 	 var second=time.getSeconds();
											 	 var strTime=checkTime(hours)+":"+checkTime(minute)+":"+checkTime(second);
											 	 
											    $("mycon").value+=strTime+"\n我说："+$("content").value+"\n";
											 	//alert(data);
											   // alert(oSend.value);//input中的值时value
											    oSend.value="";
											 }
										}
									}
						}		
					   
					}
					window.setInterval("getMessage()",5000);
					function getMessage()
					{
						if(oAjax)
						{
							var urll="GetMessageControler.php"
							var data="getter=<?php echo $loginUser ?>&sender=<?php echo $username ?>";
							oAjax.open('post',urll,true);
							oAjax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
							oAjax.send(data);
							oAjax.onreadystatechange=function()
							{
								if(oAjax.readyState==4)
								{
									if(oAjax.status==200)//http会送的状态码
									{
								       //alert(oAjax.responseXML);
								       var mesRes=oAjax.responseXML;
								       var contents=mesRes.getElementsByTagName("content");
								       var sendTimes=mesRes.getElementsByTagName("sendTime");
								       if(contents.length!=0)
								       {
									       for(var i=0;i<contents.length;i++)
									       {
									       	 $("mycon").value+=sendTimes[i].childNodes[0].nodeValue+"\n<?php echo $username ?>说："
									       	 +contents[i].childNodes[0].nodeValue+"\n";
//									       	 content的中的文本节点的选择方式是 content[i].childNodes[0].nodeValue
									       }
									}
										
									}
								}
							}
						 
					   }
				}
				
	window.onload=function()
	{
		   document.onkeydown=function()
		   {
		   	    if(event.keyCode==13)
		   	    {
		   	    	sendMessage();
		   	    	event.returnValue=false;
		   	    	return;
		   	    }
		   	 
		   }
	}
</script>

</head>
<body>
       
	<center>
		<p class="f20 mt-40 mb-15"><font style="color: red;"><?php echo $loginUser; ?></font>正在和<font style="color: red;"><?php echo $username; ?></font>聊天</p>
	    <textarea cols="60" rows="10" id="mycon"></textarea><br /><br />
	    <input type="text" name="content" id="content" value=""  style="width: 300px; height: 30px;" />
	    <input type="button" name="send" id="send" value="发送" onclick="sendMessage();"  class="newbutton"/>
	    </center>
</body>
</html>