<?php
session_start();
if(empty($_SESSION['username'])){
header("location:/vms/addvendor.php");

}
else {
	
	header("location:/");
	
}

?>