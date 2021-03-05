<?php

 // Assuming a successful connection was made in this inclusion:
include('conn.php');
 // Select the database

$sql =  mysqli_query($db, "TRUNCATE TABLE queue");

   if (  $sql ){
echo'<script type="text/javascript">
    
    alert("Queue Reset Complete ");
</script>';
  }else{
  	echo'<script type="text/javascript">
    
    alert("Error");
</script>';
  }

?>