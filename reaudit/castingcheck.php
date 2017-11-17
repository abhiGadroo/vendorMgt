<?php session_start();?>
<html>
<?php
$conn1=mysqli_connect('localhost','root','','avl');
if(!$conn1){
	die(mysqli_connect_errno());
	echo "roor";

}
if ( isset($_POST['cm1']) && isset($_POST['cm2']) && isset($_POST['cm5']) && isset($_POST['dd1']) && isset($_POST['dd2']) && isset($_POST['dd3']) && isset($_POST['c1']) && isset($_POST['soto1']) && isset($_POST['soto2']) && isset($_POST['p1']) && isset($_POST['p2'])) {
$vdCasting = $_POST['cm1']+$_POST['cm2']+$_POST['cm5']+$_POST['dd1']+$_POST['dd2']+$_POST['dd3']+$_POST['c1']+$_POST['soto1']+$_POST['soto2']+$_POST['p1']+$_POST['p2'];
$auditee	= $_SESSION['uname'];
$vemail = $_SESSION['testing'];
$con = mysqli_connect("localhost","root","","avl");
$con2 = mysqli_connect("localhost","root","","contact");
	$test1 = mysqli_query($con,"SELECT * from ".$_SESSION['process']." WHERE email ='".$_SESSION['target_vendor']."'");
	$test2 = mysqli_query($con2,"SELECT * from contact_details WHERE email ='".$_SESSION['target_vendor']."'");
	$count  = mysqli_num_rows($test1);
	if($count==0){
	echo "ERROR: Unable to find the vendor email ID";
	}
	elseif($count>0	){
	$result = mysqli_query($con,"INSERT INTO ".$_SESSION['process']."(name,email,vd,vd_date,vd_auditee,audit_quater) values ('$vendornamex','$emailx','$vdCasting',now(),'".$number."','$auditee','$quater')");
	echo "Re-Audit Details Added";		
	}
	unset($_SESSION['vendor']);
	unset($_SESSION['phone']);
	
}

?></html>