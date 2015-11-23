<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>好友列表</title>
	<script src="js/jquery-1.7.2.min.js"></script> 
	<script type="text/javascript">
		$(function(){
		//	为flist设置动态效果
			$(".flist").animate({
				opacity:1,
				height:"400px"
				
			},2000);
			//传值到聊天页面
			$(".flist ul li").each(function(i){
				$(this).click(function(){
					
					window.open("chatroom.php?username="+encodeURI(this.innerHTML),"_blank");
				});
			});
			$(".newbutton").click(function()
			{
				var str=$("#search").val();
				 
				$.get("friendListControl.php","fname=str",function(response,status,xhr){
					
					alert(response);
				});
				 
				
			}
			)
			
			
		})
	</script>
	<link rel="stylesheet" type="text/css" href="css/base.css"/>
	<link rel="stylesheet" type="text/css" href="css/common.css"/>
	<script src="js/prefixfree.min.js" type="text/javascript" charset="utf-8"></script>
	<style type="text/css">
	*{ margin: 0; padding: 0;}
		body{ background: url(img/firendlist_bg.jpg); width: 100%; position: relative;}
		.flist{ width: 300px; height: 0px; right: 50px; top: 50px; text-align: center; padding: 10px; background-color:palegoldenrod; opacity: 0; filter: alpha(opacity:0);}
		h1{ font-size: 20px; letter-spacing: 4px; height: 30px; line-height: 30px; }
		ul li{ height: 30px; width: 300px; text-align: center;border-bottom: 1px dashed red; line-height: 30px;}
		ul li:hover{ background-color: white; font-weight: bold; color: red; cursor: pointer;}
		
		.func{ left: 50px; top: 50px;}
		img{ border: 0; box-shadow: 0 0 10px gray;}
		.func a{ display:inline-block ; height: 84px; width: 72px; text-align: center; color: white; margin: 20px;}
		.func a:hover{ width:70px; height: auto; animation: add 0.2s linear forwards;}
		@keyframes add{
			from{transform: scale(1);}
			to{ transform: scale(1.2);}
		}
		
		/*图标的设置*/
		
		.searchf{ width: 300px; height: 400px; background-color: pink; left: 300px; top: 100px;}
		.searchf input{ height: 30px; border: none; text-indent: 10px;}
		.searchf  a{ width: 60px; height: 30px;  display: inline-block;} 
	</style>
</head>
<body class="pr">
	<div class="flist pa">
	   <h1>好友列表</h1>
	<ul>
		<li class="mt-20">宋江</li>
		<li>小倩</li>
		<li>张飞</li>
		<li>小鱼</li>
	</ul> 	
	</div>
	
	<div class="func pa">
		<a href="http://n.vip.com/bQBbe28c" class="wph"><img src="img/weipinhui.png"/>唯品会</a>
		<a href="https://www.baidu.com/" class="bdss"><img src="img/baidu.png"/>百度搜索</a>
		<br />
		<br />
		<a href="" class="yy"><img src="img/music.png"/>音乐</a>
		<a href="https://www.taobao.com/"  class="tb"><img src="img/taobao.png"/>淘宝</a>
		<br />
		<br />
		<a href="" class="hycz"><img src="img/search.png"/>查找好友</a>	
	</div>
	
	<div class="searchf pa tc">
		<p class="mt-25"><input type="text" id="search" value="" placeholder="按昵称查找好友" /> <a class="newbutton">搜索</a></p>
		<ul class="mt-20">
			
		</ul>
		
	</div>
	 
</body>
</html>