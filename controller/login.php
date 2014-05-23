<?php
include("../model/DB.php");
header("Content-Type:text/html;charset=UTF-8"); 
include("../model/conf.php");
$referer=$ip.$subUrl."/view/login.html";
// if(strcmp($_SERVER['HTTP_REFERER'], $referer)!=0){
// 	header("Location: ../index.html");
// 	exit;
// }
include("../libs/Smarty.class.php"); 
		$smarty = new Smarty;
		//下面的(你的网站目录)用绝对路径，可以用相对路径（./templates）
		$smarty ->template_dir='../mysmarty/templates';
		$smarty->config_dir='../mysmarty/configs';
		$smarty ->cache_dir='../mysmarty/cache';
		$smarty ->compile_dir='../mysmarty/templates_c';
		//上面四行为使用Smarty前的必要参数配置
$studentID=$_POST["studentID"];
$pwd=$_POST["pwd"];
$controller=new DB();
if(!preg_match("/^[0-9]+$/",$_POST["studentID"]))
	Header("Location:./noaccount.html");
if(!preg_match("/^(71113140)|(71113[1-4](([0-3][1-9])|([1-3]0)))$/",$studentID))
{
	$smarty->assign('info',"学号错了吧。。");
	$smarty->display('info.tpl');
}
else if(!preg_match("/^[0-9a-zA-Z]{3,16}$/",$pwd)){
	$smarty->assign('info',"密码写得不太对");
	$smarty->display('info.tpl');
}
else{
	$studentID=str_replace("and", "a", $studentID);
	$studentID=str_replace("or", "a", $studentID);
	$studentID=str_replace("=", "a", $studentID);
	$row=$controller->select_sentence("leader_info","leaderID",$studentID);
	
	if($row==0)
	{
		$smarty->assign('info',"用户名不存在");
		$smarty->display('info.tpl');
	}
	else
	{
		$row=mysql_fetch_array($row);
		if($row['password']==$pwd)
		{
			session_start();
			// store session data
			$_SESSION['studentID']=$studentID;
			Header("Location:./modify.php");
		}
		else
		{
			$smarty->assign('info',"密码错误");
			$smarty->display('info.tpl');
		}
	}
}
?>