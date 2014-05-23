<?php
header("Content-Type:text/html;charset=UTF-8");
include("../model/DB.php");

$id = $_GET['id'];

$controller = new DB();
$row = $controller->select_sentence("13grade_info","id",$id);
if($row != 0){
	$row = mysql_fetch_array($row);
	$name = $row["name"];
	echo $name;
}
else{
	echo "不存在的小伙伴";
}

?>