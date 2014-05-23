<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title>
校史系统设计竞赛报名
</title>
<link rel="stylesheet" type="text/css" href="../view/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="../view/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="../view/css/bootstrap-theme.css"/>
<link rel="stylesheet" type="text/css" href="../view/css/bootstrap-theme.min.css"/>
<link rel="stylesheet" type="text/css" href="../view/Buttons/css/buttons.css"/>
<link rel="stylesheet" type="text/css" href="../view/Buttons/css/font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="../view/Buttons/css/font-awesome-ie7.min.css"/>
<link rel="stylesheet" type="text/css" href="../view/css/style.css">
<script type="text/javascript" src="../view/js/loadName.js"></script>
<script type="text/javascript" src="../view/js/action.js"></script>

<style>
h1
{
	font-family: 微软雅黑;
}
h3
{
	font-family: 微软雅黑;
}
h5
{
	font-family: 微软雅黑;
}
.btn-myself
{
	width: 25%;
	height:10%;
	margin-left: 3%;
}
.sign-up-button
{
	margin-top: 5%;
	margin-left: 42%;
	font-family: 微软雅黑;
}
</style>
</head>
<body id="max">
<div  class=wrapper>
<br/>
<br/>
<br/>
<h1 align=center>校史系统设计竞赛报名</h1>
<br/>
<h3 align=center >组长学号：{$ID} 组长姓名：{$name}  电话：{$phone}</h3>


<form id="group_info" action="./group.php" method=post>
<h5 align=center >组员一：<br/><br/><span style="color:red">*</span>学号：<input type=text id="ID1"class=input placeholder="学号" name="studentID1" oninput="inputListener(this.id)"/>&nbsp;&nbsp;姓名：<input type=text id="name1"class=input style="background-color:#D8D8D8" placeholder="姓名" name="name1"readonly="readonly" value=""/></h5>
<h5 align=center >组员二：<br/><br/><span style="color:red">*</span>学号：<input type=text id="ID2"class=input placeholder="学号" name="studentID2"oninput="inputListener(this.id)"/>&nbsp;&nbsp;姓名：<input type=text id="name2"class=input style="background-color:#D8D8D8" placeholder="姓名" name="name2"readonly="readonly" value=""/></h5>
<h5 align=center >组员三：<br/><br/>学号：<input type=text id="ID3"class=input placeholder="学号" name="studentID3"oninput="inputListener(this.id)"/>&nbsp;&nbsp;姓名：<input type=text id="name3"class=input style="background-color:#D8D8D8" placeholder="姓名" name="name3"readonly="readonly" value=""/></h5>

</form>
<div class=sign-up-button>
<button onclick="handIn()" class="btn btn-lg btn-success btn-myself">报名</button>
</div>

</div>

</body>
</html>