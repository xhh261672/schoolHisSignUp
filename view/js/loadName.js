function inputListener(id){
	var studentID = document.getElementById(id).value;
	var input = document.getElementById(id);

	if(studentID.length==8){

		// input.addEventListener("input",function(){
		// 	loadName(studentID);
		// },false);
	   loadName(id,studentID);

	}
}


function loadName(id,studentID){
	
	//id = document.getElementById("ID1").value;
	//dRe = /^[0-9]{8}$/;
	//if(idRe.test(id)){
	//	alert(id);
	//}
	xmlHttp = creatXMLHttp();
	if(xmlHttp == null){
		alert("dose not support ajax!");
	}
	var url = "../controller/loadName.php";
	url = url+"?id="+studentID;
	//alert(url);

	xmlHttp.onreadystatechange=function(){
		if(xmlHttp.readyState==4){
			switch(id){
				case "ID0":
					document.getElementById("name").value=xmlHttp.responseText;
					break;
				case "ID1":
					document.getElementById("name1").value=xmlHttp.responseText;
					break;
				case "ID2":
					document.getElementById("name2").value=xmlHttp.responseText;
					break;
				case "ID3":
					document.getElementById("name3").value=xmlHttp.responseText;
					break;
				default:
					break;

			}
		}
	}
	xmlHttp.open("GET",url,true);
	xmlHttp.send(null);	
	
}
function creatXMLHttp(){
	var xmlHttp;
	try{
		xmlHttp = new XMLHttpRequest();
	}catch (e){
		try{
			xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
		}catch(e){
			try{
				xmlHttp = new ActiveXObject("MicroSoft.XMLHTTP");
			}catch(e){
				alert("bad browser!");
			}
		}
	}
	return xmlHttp;
}