var choice = 1;

function redirect() {
    window.location.href="../index.html";
}

function valideForm(name, pwd, id, phone)
{
	nameRe=/^[\u4e00-\u9fa5]{2,4}$/;
	pwdRe=/\w{3,16}/;
	IDre=/^(71113140)|(71113[1-4](([0-3][1-9])|([1-3]0)))$/;
	phoneRe=/^(13|15|18)\d{9}$/;
	if (choice==1) {
		if(!IDre.test(id)){
			showAlertMesg(0);
		}
		else if(!pwdRe.test(pwd)){
			showAlertMesg(1);
		}
		else if(!nameRe.test(name)){
			showAlertMesg(2);
		}
		else if(!phoneRe.test(phone)) {
			showAlertMesg(3);
		}
		else{
			return 1;
		}
		return 0;
	}
	else {
		if(!IDre.test(id)){
			showAlertMesg(0);
		}
		else if(!pwdRe.test(pwd)){
			showAlertMesg(1);
		}
		else{
			return 2;
		}
		return 0;
	}
}

function showAlertMesg(cases){
	switch(cases){
		case 0:
			$("#alert_danger").val("学号是你吗")
			.animate({top:'28.5%'})
			.css("display","inline");
			break;
		case 1:
			$("#alert_danger").val("密码格式不太对")
			.animate({top:'39%'})
			.css("display","inline");
			break;
		case 2:
			$("#alert_danger").val("姓名错了吧-_-|")
			.animate({top:'50%'})
			.css("display","inline");
			break;
		case 3:
			$("#alert_danger").val("手机号是乱写的吧")
			.animate({top:'61%'})
			.css("display","inline");
			break;
	}
}

function continueStep(){
    var uname = $("#name").val();
    var upwd = $("#pwd").val();
    var ustudentID = $("#studentID").val();
    var uphone = $("#phone").val();
    // var rawdata = ;
    // rawdata = rawdata.serialize();
    var check = valideForm(uname, upwd, ustudentID, uphone);
    if (check == 1) {
    	$("#form").attr("action","../controller/register.php").submit();
        
    }
    else if (check == 2){
    	$("#form").attr("action","../controller/login.php").submit();
        // $("#form").submit();
    	// alert("总之好像出了些什么问题");
    }
}

function modifyCheck(name,id,phone){
	nameRe=/[\u4e00-\u9fa5]{2,4}/;
	IDre=/^(71113140)|(71113[1-4](([0-3][1-9])|([1-3]0)))$/;
	phoneRe=/^(13|15|18)\d{9}$/;
	alert(id);
	if(!nameRe.test(name)){
		alert("姓名错了吧-_-");
	}
	else if(!IDre.test(id)){
		alert("学号是你吗");
	}
	else if(!phoneRe.test(phone)){
		alert("手机号是乱写的吧");
	}
	else{
		return 1;
	}
	return 0;
}
        // $.post("../controller/register.php",
        // {
        // 	"name":uname,
        // 	"pwd":upwd,
        // 	"studentID":ustudentID,
        // 	"phone":uphone
        // },
        // function(ret){
        // 	if(ret=="pass") {
        //     	alert("正在递交您的内容："+name + " " + pwd + " " + studentID + " " + phone);
        // 	}
        // 	else if(ret=="wname"){
        // 		alert("wname");
        // 	}
        // 	else if(ret=="wphone"){
        // 		alert("wphone");
        // 	}
        // 	else if(ret=="wpwd"){
        // 		alert("wpwd");
        // 	}
        // 	else if(ret=="wstudentID"){
        // 		alert("wstudentID");
        // 	}
        // });
        
     //    $.ajax({
		   //  type: 'POST',
		   //  url: '../controller/register.php',
		   //  data: rawdata,
		   //  dataType:'json',
		   //  contentType:"application/json;charset=utf-8", 
		   //  success: function(data) {
		   //  	alert("success");
		   //      // $("#result").html(JQuery.parseJSON(data));
		   //     },    
		   //  error: function(XMLHttpRequest, textStatus, errorThrown) { 
		   //       alert("textStatus: " + textStatus);
		   //       alert("errorThrown: " + errorThrown);
	    //     }       
	    // });

