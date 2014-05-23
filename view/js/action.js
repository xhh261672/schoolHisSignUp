function hover(id,action)
{
	obj=document.getElementById(id);
	obj.src="./"+action+"hover.png";
}function leave(id,action)
{
	obj=document.getElementById(id);
	obj.src="./"+action+".png";
}

function handInRegister()//判断输入&&提交表单
{
	var pwd1 = document.getElementById("pwd1").value;
	var pwd2 = document.getElementById("pwd2").value;
	var phone= document.getElementById("phone").value; 
	var id  = document.getElementById("studentID").value;

	pwdRe=/^[0-9a-zA-Z]{3,16}$/;
	IDre=/^(71113140)|(71113[1-4](([0-3][1-9])|([1-3]0)))$/;
	phoneRe=/^(13|15|18)\d{9}$/;

	if(pwd1==pwd2){

		if(!IDre.test(id)){
			alert("bad id");
		}else if(!phoneRe.test(phone)){
			alert("bad phone");
		}else if(!pwdRe.test(pwd1)){
			alert("bad password!");
		}else{
			document.getElementById("register").submit();
		}
	}
	else{
		alert("两次密码不一致");
	}
}
function handIn()
{
	IDre=/^(71113140)|(71113[1-4](([0-3][1-9])|([1-3]0)))$/;
	var id1 = document.getElementById("ID1").value;
	var id2 = document.getElementById("ID2").value;
	var id3 = document.getElementById("ID3").value;

	if(!IDre.test(id1)){
		alert("请检查组员1学号");
	}else if(!IDre.test(id2)){
		alert("请检查组员2学号");

	}else if((!IDre.test(id3))&&(id3 != "")){
		alert("请检查组员3学号");
	}else{
		if(id3==""){
			document.getElementById("ID3").value="default";
			document.getElementById("name3").value="default";
		}

		document.getElementById("group_info").submit();
	}
}
function modify(){
	var id0 = document.getElementById("ID0").value;
	var id1 = document.getElementById("ID1").value;
	var id2 = document.getElementById("ID2").value;
	var id3 = document.getElementById("ID3").value;
	var phone=document.getElementById("phone").value;

	IDre=/^(71113140)|(71113[1-4](([0-3][1-9])|([1-3]0)))$/;
	phoneRe=/^(13|15|18)\d{9}$/;
	
	if(!IDre.test(id1)){
		alert("请检查组员1学号");

	}else if(!IDre.test(id2)){
		alert("请检查组员2学号");
	}
	else if(!IDre.test(id0)){
		alert("请检查组长学号");
	}else if(!phoneRe.test(phone)){
		alert("请检查组长电话");
	}else if(id3!=""&&id3!="default"){
		if(!IDre.test(id3)){
			alert("请检查组员2学号");
		}
		document.getElementById("modify_info").submit();
	}
	else if(id3==""){		
			document.getElementById("ID3").value="default";
			document.getElementById("name3").value="default";
			document.getElementById("modify_info").submit();

	}
	/*	document.getElementById("modify_info").submit();*/
	

}
function hideAlert()
{
	document.getElementById("alert_danger").style.display="none";
}
function changeMode(){
	window.location.href = "./login.html";
}