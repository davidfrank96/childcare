<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_GET["Pid"])) {
    $query2 = "DELETE FROM parents WHERE Pid=".$_GET["Pid"];
    $result2 = $db_handle->executeQuery($query2);
	if(!empty($result2)){
		header("Location:parents.php");
	}
}
?>