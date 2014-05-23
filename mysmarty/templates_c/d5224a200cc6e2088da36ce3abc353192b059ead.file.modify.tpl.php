<?php /* Smarty version Smarty-3.1.11, created on 2014-05-22 19:55:17
         compiled from "..\mysmarty\templates\modify.tpl" */ ?>
<?php /*%%SmartyHeaderCode:98825365e16d4634b2-59570244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5224a200cc6e2088da36ce3abc353192b059ead' => 
    array (
      0 => '..\\mysmarty\\templates\\modify.tpl',
      1 => 1400780866,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98825365e16d4634b2-59570244',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5365e16d4ccc56_96232302',
  'variables' => 
  array (
    'studentID' => 0,
    'name' => 0,
    'phone' => 0,
    'studentID1' => 0,
    'name1' => 0,
    'studentID2' => 0,
    'name2' => 0,
    'studentID3' => 0,
    'name3' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5365e16d4ccc56_96232302')) {function content_5365e16d4ccc56_96232302($_smarty_tpl) {?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<script type="text/javascript" src="../view/js/formChecker.js"></script>
<script type="text/javascript" src="../view/js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="../view/js/loadName.js"></script>
<script type="text/javascript" src="../view/js/action.js"></script>

<script>
function hover()
{
    obj=document.getElementById("button");
    obj.src="../view/modifyhover.png";
}function leave()
{
    obj=document.getElementById("button");
    obj.src="../view/modify.png";
}

</script>

<style text="text/css">
h1{
    font-family: "Microsoft Yahei";
}
h2{
    font-family: "Microsoft Yahei";
    font-size: 30px;
}
.modify_frame{
    position: fixed;
    top: 25%;
    width: 90%;
    left: 20%;
    height: 60%;
}
.modify_btn{
    position: fixed;
    top: 80%;
    width: 20%;
    left: 41%;
    height: 10%;
    font-family:"Microsoft Yahei";
    font-size: 30px;
}
</style>
</head>
<body>
<div id="header" class="header">
    <h1>组队信息</h1>
</div>
<div id="modify_frame" class="modify_frame">
    <form id="modify_info" action="./infoModify.php" method=post>
        
        <h5>组长学号: &nbsp;&nbsp;<input class="input" type=text placeholder="学号" id="ID0" name="studentID" value="<?php echo $_smarty_tpl->tpl_vars['studentID']->value;?>
"  oninput="inputListener(this.id)"/>组长姓名: &nbsp;&nbsp;<input class="input" type=text placeholder="姓名" id="name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" readonly="readonly" style="background-color:#D8D8D8"/>电话: <input class="input" type=text placeholder="手机" id="phone" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
" /></h5>

        <h5>组员1学号: <input class="input" type=text placeholder="学号" id="ID1" name="studentID1" value="<?php echo $_smarty_tpl->tpl_vars['studentID1']->value;?>
" oninput="inputListener(this.id)"/>组员1姓名: <input class="input" type=text placeholder="姓名" id="name1" name="name1" value="<?php echo $_smarty_tpl->tpl_vars['name1']->value;?>
" readonly="readonly" style="background-color:#D8D8D8"/></h5>

        <h5>组员2学号: <input class="input" type=text placeholder="学号" id="ID2" name="studentID2" value="<?php echo $_smarty_tpl->tpl_vars['studentID2']->value;?>
" oninput="inputListener(this.id)" />组员2姓名: <input class="input" type=text placeholder="姓名" id="name2" name="name2" value="<?php echo $_smarty_tpl->tpl_vars['name2']->value;?>
" readonly="readonly" style="background-color:#D8D8D8"/></h5>

        <h5>组员3学号: <input class="input" type=text placeholder="学号" id="ID3" name="studentID3" value="<?php echo $_smarty_tpl->tpl_vars['studentID3']->value;?>
" oninput="inputListener(this.id)"/>组员3姓名: <input class="input" type=text placeholder="姓名" id="name3" name="name3" value="<?php echo $_smarty_tpl->tpl_vars['name3']->value;?>
" readonly="readonly" style="background-color:#D8D8D8"/></h5>

    </form>
</div>
<div>
    <button href="#" onclick="modify()" class="modify_btn btn btn-success btn-lg">修改信息</button>
</div>

</body>
</html><?php }} ?>