<?php
require_once('SYSTEM_config.php');
$row = "";

if(isset($_GET['token'])){
  $ID=$_GET['token'];
  $sql="SELECT* FROM barangay_profiling_tbl WHERE prof_ID= '$ID';";
  $result = mysqli_query($conn, $sql);
   
  if (mysqli_num_rows($result)> 0) {
	$row = $result->fetch_assoc();  	
}
	
}
?>