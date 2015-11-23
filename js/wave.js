 
//运动函数  写法  startMove(obj,{width:20},fn)
function startMove(obj,json,endFn){
	
		clearInterval(obj.timer);
		
		obj.timer = setInterval(function(){
			
			var bBtn = true;
			
			for(var attr in json){
				
				var iCur = 0;
			
				if(attr == 'opacity'){
					if(Math.round(parseFloat(getStyle(obj,attr))*100)==0){
					iCur = Math.round(parseFloat(getStyle(obj,attr))*100);
					
					}
					else{
						iCur = Math.round(parseFloat(getStyle(obj,attr))*100) || 100;
					}	
				}
				else{
					iCur = parseInt(getStyle(obj,attr)) || 0;
				}
				
				var iSpeed = (json[attr] - iCur)/8;
			iSpeed = iSpeed >0 ? Math.ceil(iSpeed) : Math.floor(iSpeed);
				if(iCur!=json[attr]){
					bBtn = false;
				}
				
				if(attr == 'opacity'){
					obj.style.filter = 'alpha(opacity=' +(iCur + iSpeed)+ ')';
					obj.style.opacity = (iCur + iSpeed)/100;
					
				}
				else{
					obj.style[attr] = iCur + iSpeed + 'px';
				}
				
				
			}
			
			if(bBtn){
				clearInterval(obj.timer);
				
				if(endFn){
					endFn.call(obj);
				}
			}
			
		},30);
	
	}
	
	
	function getStyle(obj,attr){
		if(obj.currentStyle){
			return obj.currentStyle[attr];
		}
		else{
			return getComputedStyle(obj,false)[attr];
		}
	}
	
//运动函数结束

//ajax函数 get 方式，返回html格式
//ajax('data.txt', function (str){});
function ajax(url, fnSucc, fnFaild)
{
	//1.创建Ajax对象
	var oAjax=null;
	
	if(window.XMLHttpRequest)
	{
		oAjax=new XMLHttpRequest();
	}
	else
	{
		oAjax=new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	//2.连接服务器
	oAjax.open('GET', url, true);
	
	//3.发送请求
	oAjax.send();
	
	//4.接收服务器的返回
	oAjax.onreadystatechange=function ()
	{
		if(oAjax.readyState==4)	//完成
		{
			if(oAjax.status==200)	//成功
			{
				fnSucc(oAjax.responseText);
			}
			else
			{
				if(fnFaild)
					fnFaild(oAjax.status);
			}
		}
	};
}

//返回各种格式的ajax

	//创建ajax引擎
	function xmlHttpRequest()
	{
		
		var xmlHttpRequest;
		//不同的浏览器获取对象xmlhttprequest 对象方法不一样
		if(window.ActiveXObject){
			
			xmlHttpRequest=new ActiveXObject("Microsoft.XMLHTTP");
			
		}else{

			xmlHttpRequest=new XMLHttpRequest();
		}

		return xmlHttpRequest;

	}
	
      /* var  oAjax=null;
    function checkName(){
		
		oAjax=xmlHttpRequest();

		if(oAjax){
			
			var url="/ajax/registerProcess.php";
			//这个是要发送的数据
			var data="username="+$('username').value;
			//打开请求.
			oAjax.open("post",url,true);
			//还有一句话，这句话必须.
			oAjax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
			//指定回调函数.chuli是函数名
			oAjax.send(data); 
			oAjax.onreadystatechange=chuli;

			


		}
	}

*/
	//id的简化调用
	function $(id){
		return document.getElementById(id);
	}
	
//时间中的补零函数

////为了美观，在剩余时间的数字小于10时转换为0X
	function checkTime(i){  
	   if (i < 10) {  
		   i = "0" + i;  
		}  
	   return i;  
	}  
	