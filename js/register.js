$(function(){
			 $("#signupForm").validate({
		rules: {
			name:{
				required: true,
				rangelength:[2,4],
				//digits: "只能输入整数"
				
				},
		age:{
			 required:true,
			 rangelength:[1,2],
			 digits:"只能输入整数"
		},
		 
			password1: {
				required: true,
				rangelength:[8,20]
				},
			confirm_password: {
				required: true,
				equalTo: "#password",   
				rangelength:[8,20]
				}
			},
			messages: {
				name:{
					required: "请输入2-4位昵称名",
					rangelength: jQuery.format("输入错误"),
				},
				age:{
					required:"请输入年龄",//为空的时候显示的字
					rangelength: jQuery.format("必须是整数"),
				},
				password1: {
					required: "请输入密码",
					rangelength: jQuery.format("密码在8~20个字符之间"),
				},
				confirm_password: {
				required: "请输入确认密码",
				rangelength: jQuery.format("密码在8~20个字符之间"),
				equalTo: "两次输入密码不一致"
			}
		}
			
	 });
				
				
				
			})