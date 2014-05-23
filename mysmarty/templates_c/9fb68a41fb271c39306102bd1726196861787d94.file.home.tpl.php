<?php /* Smarty version Smarty-3.1.11, created on 2014-05-18 05:18:08
         compiled from "..\mysmarty\templates\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:304695373347c33bd30-77854067%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9fb68a41fb271c39306102bd1726196861787d94' => 
    array (
      0 => '..\\mysmarty\\templates\\home.tpl',
      1 => 1400383079,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '304695373347c33bd30-77854067',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5373347c635969_75625142',
  'variables' => 
  array (
    'ID' => 0,
    'name' => 0,
    'phone' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5373347c635969_75625142')) {function content_5373347c635969_75625142($_smarty_tpl) {?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<h3 align=center >组长学号：<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
 组长姓名：<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
  电话：<?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
</h3>


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
</html><?php }} ?>