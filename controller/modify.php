<?php	
	include("../model/DB.php");
	header("Content-Type:text/html;charset=UTF-8"); 
	session_start();
	if(!isset($_SESSION['studentID']))
		Header("Location:../view/index.html");
	include("../model/conf.php");
	$referer=$ip.$subUrl."/view/login.html";
	if(strcmp($_SERVER['HTTP_REFERER'], $referer)!=0){
		header("Location: ../index.html");
		exit;
	}
	include("../libs/Smarty.class.php"); 
	$smarty = new Smarty;
	//下面的(你的网站目录)用绝对路径，可以用相对路径（./templates）
	$smarty ->template_dir='../mysmarty/templates';
	$smarty->config_dir='../mysmarty/configs';
	$smarty ->cache_dir='../mysmarty/cache';
	$smarty ->compile_dir='../mysmarty/templates_c';
	//上面四行为使用Smarty前的必要参数配置

			$controller=new DB();
			$leader_info_row = $controller->select_sentence("leader_info","leaderID",$_SESSION['studentID']);
			if($leader_info_row == 0){
				$smarty->assign('info',"先去注册吧。。");
				$smarty->display('info.tpl');

			}
			else{

				$row=$controller->select_sentence("group_info","leaderID",$_SESSION['studentID']);
				if($row==0){
					$leader_info_row=mysql_fetch_array($leader_info_row);
					$name=$leader_info_row["name"];
					$studentID = $leader_info_row["leaderID"];
					$phone=$leader_info_row["phone"];

					$smarty->assign('name',$name);
					$smarty->assign('studentID',$studentID);
					$smarty->assign('phone',$phone);
					$smarty->assign('name1',null);
					$smarty->assign('studentID1',null);
					$smarty->assign('name2',null);
					$smarty->assign('studentID2',null);
					$smarty->assign('name3',null);
					$smarty->assign('studentID3',null);
					$smarty->display('modify.tpl');				
				}	
				else
				{
					$loginSession = $_SESSION["studentID"]."login";
					if(!isset($_SESSION[$loginSession])){
						$row=mysql_fetch_array($row);

						// $name=$row["name"];
						// $studentID=$row["leaderID"];
						//$rowHasPhone=$controller->select_sentence("leader_info","leaderID",$_SESSION['studentID']);
						$leader_info_row=mysql_fetch_array($leader_info_row);
						$name=$leader_info_row["name"];
						$studentID = $leader_info_row["leaderID"];
						$phone=$leader_info_row["phone"];

						$name1=$row["name1"];
						$studentID1=$row["studentID1"];

						$name2=$row["name2"];
						$studentID2=$row["studentID2"];

						$name3=$row["name3"];
						$studentID3=$row["studentID3"];

						$_SESSION['name']=$name;
						$smarty->assign('name',$name);
						$smarty->assign('studentID',$studentID);
						$smarty->assign('phone',$phone);
						$smarty->assign('name1',$name1);
						$smarty->assign('studentID1',$studentID1);
						$smarty->assign('name2',$name2);
						$smarty->assign('studentID2',$studentID2);
						$smarty->assign('name3',$name3);
						$smarty->assign('studentID3',$studentID3);
						$_SESSION[$loginSession] = time();
						$smarty->display('modify.tpl');
					}
					else{
						$preModify = $_SESSION[$loginSession];
						$curModify = time();
						if($curModify - $preModify < 3){
							$smarty->assign('info',"太频繁了,5分钟后再来");
							$_SESSION[$loginSession]=time();
							$smarty->display('info.tpl');
						}
						else{
							$row=mysql_fetch_array($row);

							$name=$row["name"];
							$studentID=$row["leaderID"];
							$rowHasPhone=$controller->select_sentence("leader_info","leaderID",$_SESSION['studentID']);
							$rowHasPhone=mysql_fetch_array($rowHasPhone);
							$phone=$rowHasPhone["phone"];

							$name1=$row["name1"];
							$studentID1=$row["studentID1"];

							$name2=$row["name2"];
							$studentID2=$row["studentID2"];

							$name3=$row["name3"];
							$studentID3=$row["studentID3"];

							$_SESSION['name']=$name;
							$smarty->assign('name',$name);
							$smarty->assign('studentID',$studentID);
							$smarty->assign('phone',$phone);
							$smarty->assign('name1',$name1);
							$smarty->assign('studentID1',$studentID1);
							$smarty->assign('name2',$name2);
							$smarty->assign('studentID2',$studentID2);
							$smarty->assign('name3',$name3);
							$smarty->assign('studentID3',$studentID3);
							$_SESSION[$loginSession] = time();
							$smarty->display('modify.tpl');
						}
					}
					
				}
			}

	
?>