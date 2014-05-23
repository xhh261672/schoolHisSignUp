<?php
include("../model/DB.php");
header("Content-Type:text/html;charset=UTF-8");
include("../model/conf.php");
$referer=$ip.$subUrl."/controller/modify.php";

if(strcmp($_SERVER['HTTP_REFERER'], $referer)!=0){
		header("Location: ../index.html");
		exit;
} 
session_start();
$studentID=$_SESSION["studentID"];
$name=$_SESSION["name"];
$phone=$_POST["phone"];

$studentID1=$_POST["studentID1"];
$name1=$_POST["name1"];

$studentID2=$_POST["studentID2"];
$name2=$_POST["name2"];

$studentID3=$_POST["studentID3"];
$name3=$_POST["name3"];

include("../libs/Smarty.class.php"); 
	$smarty = new Smarty;
	//下面的(你的网站目录)用绝对路径，可以用相对路径（./templates）
	$smarty ->template_dir='../mysmarty/templates';
	$smarty->config_dir='../mysmarty/configs';
	$smarty ->cache_dir='../mysmarty/cache';
	$smarty ->compile_dir='../mysmarty/templates_c';
	//上面四行为使用Smarty前的必要参数配置

//echo $name3;
// $smarty->assign('info',$studentID2);
// $smarty->display('debug.tpl');

if(!preg_match("/^(71113140)|(71113[1-4](([0-3][1-9])|([1-3]0)))$/",$studentID))
{
	$smarty->assign('info',$studentID.":学号错了吧。。");
	$smarty->display('info.tpl');
}
else if(!preg_match("/[\x{4e00}-\x{9fa5}]/u", $name)){
	$smarty->assign('info',"名字错了吧");
	$smarty->display('info.tpl');
}
else if(!preg_match("/^\d{11}$/",$phone)){
	$smarty->assign('info',"绝壁填错了手机号");
	$smarty->display('info.tpl');
}
else{

		$modifySession = $_POST["studentID"]."modify";
		if(!isset($_SESSION[$modifySession])){
			$controller=new DB();
			$controller->updategroup($studentID,$name,$studentID1,$name1,$studentID2,$name2,$studentID3,$name3);
			
			$smarty->assign('info',"修改成功");
			$_SESSION[$modifySession] = time();
			$smarty->display('info.tpl');
		}
		else{
			$preModify = $_SESSION[$modifySession];
			$curModify = time();
			if($curModify - $preModify < 3){
				$smarty->assign('info',"太频繁了,5分钟后再来");
				$_SESSION[$modifySession]=time();
				$smarty->display('info.tpl');
		}
		else{

			$controller=new DB();
			$controller->updategroup($studentID,$name,$studentID1,$name1,$studentID2,$name2,$studentID3,$name3);
			
			$smarty->assign('info',"修改成功");
			$_SESSION[$modifySession] = time();
			$smarty->display('info.tpl');
		}
	}
}
?>