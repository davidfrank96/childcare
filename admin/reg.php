<?php
require_once("dbcontroller.php");
$db_handle = new DBController();


$query = "INSERT INTO attendance
       SELECT *
       FROM children WHERE  id=".$_GET["id"];
    $result = $db_handle->executeQuery($query);
	if(!$result){
		echo '<script type="text/javascript">
    alert("Already registered!!!");
</script>';
 echo "<script>setTimeout(\"location.href = 'carecoza.php';\",1000);</script>";
	} else {
		 echo '<script type="text/javascript">
    
    alert("Succesfully Added to attendance for today!");
</script>';
 echo "<script>setTimeout(\"location.href = 'carecoza.php';\",1000);</script>";
	}

?>

