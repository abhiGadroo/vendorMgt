<?php session_start();?>
<html>
<?php
$conn1=mysqli_connect('localhost','root','','avl');
if(!$conn1){
	die(mysqli_connect_errno());
	echo "roor";

}
if ( isset($_POST['cm1']) && isset($_POST['cm2']) && isset($_POST['cm3']) && isset($_POST['cm4']) && isset($_POST['cm5']) && isset($_POST['dd1']) && isset($_POST['dd2']) && isset($_POST['c1']) && isset($_POST['soto1']) && isset($_POST['qs1']) && isset($_POST['qs2']) && isset($_POST['qs3']) && isset($_POST['ccrs1']) && isset($_POST['p1']) && isset($_POST['p2']) && isset($_POST['lf1'])){
$vdCasting = $_POST['cm1']+$_POST['cm2']+$_POST['cm3']+$_POST['cm4']+$_POST['cm5']+$_POST['dd1']+$_POST['dd2']+$_POST['c1']+$_POST['soto1']+$_POST['qs1']+$_POST['qs2']+$_POST['qs3']+$_POST['ccrs1']+$_POST['p1']+$_POST['p2']+$_POST['lf1'];
//echo $vdCasting;
$vendornamex  = $_SESSION['vendor'];
$emailx	= $_SESSION['username'];
$number	= $_SESSION['phone'];
$auditee	= $_SESSION['uname'];
$con = mysqli_connect("localhost","root","","avl");
	$test1 = mysqli_query($con,"SELECT * from casting_vendors WHERE email ='".$_SESSION['username']."'");
	$count  = mysqli_num_rows($test1);
	if($count==0){
	$result = mysqli_query($con,"INSERT INTO casting_vendors(name,email,vd,vd_date,phone,vd_auditee) values ('$vendornamex','$emailx','$vdCasting',now(),'".$number."','$auditee')");
	echo "Vendor Added";
	//echo $count;
	}
	elseif($count>0	){
	$result = mysqli_query($con,"UPDATE casting_vendors SET vd = '$vdCasting',vd_auditee = '$auditee', vd_date = now() WHERE email = '$emailx'");
	echo "Vendor Details Updated";		
	}
	unset($_SESSION['vendor']);
	unset($_SESSION['phone']);
	
}

elseif(isset($_POST['gen1']) && isset($_POST['gen2']) && isset($_POST['gen3']) && isset($_POST['gen4']) && isset($_POST['gen5']) && isset($_POST['gen6']) && isset($_POST['gen7']) && isset($_POST['gen8']) && isset($_POST['gen9']) && isset($_POST['gen10']) && isset($_POST['gen11']) && isset($_POST['gen12']) && isset($_POST['gen13']) && isset($_POST['gen14']) && isset($_POST['gen15']) && isset($_POST['gen16']) && isset($_POST['gen17']) && isset($_POST['gen18']) && isset($_POST['gen19']) && isset($_POST['gen20']) && isset($_POST['gen21']) ){
$scmCasting = 	$_POST['gen1']+$_POST['gen2']+$_POST['gen3']+$_POST['gen4']+$_POST['gen5']+$_POST['gen6']+$_POST['gen7']+$_POST['gen8']+$_POST['gen9']+$_POST['gen10']+$_POST['gen11']+$_POST['gen12']+$_POST['gen13']+$_POST['gen14']+$_POST['gen15']+$_POST['gen16']+$_POST['gen17']+$_POST['gen18']+$_POST['gen19']+$_POST['gen20']+$_POST['gen21'];
$vendornamex  = $_SESSION['vendor'];
$emailx	= $_SESSION['username'];
$number	= $_SESSION['phone'];
$auditee	= $_SESSION['uname'];
$con = mysqli_connect("localhost","root","","avl");
	$test1 = mysqli_query($con,"SELECT * from casting_vendors WHERE email ='".$_SESSION['username']."'");
	$count  = mysqli_num_rows($test1);
	if($count==0){
	$result = mysqli_query($con,"INSERT INTO casting_vendors(name,email,scm,scm_date,phone,scm_auditee) values ('$vendornamex','$emailx','$scmCasting',now(),'".$number."','$auditee')");
	echo "Vendor Added";
	//echo $count;
	}
	elseif($count>0	){
	$result = mysqli_query($con,"UPDATE casting_vendors SET scm = '$scmCasting', scm_auditee = '$auditee',scm_date= now() WHERE email = '$emailx'");
	echo "Vendor Details Updated";		
	}
	//$result1= mysqli_query($conn1,"if not exists scores(SELECT top 1 * from scores where name = '$vendornamex' ) INSERT into scores (vd_machining_score) values ('quCasting')");
	//$result=mysqli_query($conn1,"INSERT INTO scores(qu_casting_score) VALUES ('$quCasting')");
	unset($_SESSION['vendor']);
	//echo "test passed";
	
	
}
elseif(isset($_POST['qms1']) && isset($_POST['apf1']) && isset($_POST['apf2']) && isset($_POST['apf3']) && isset($_POST['s1']) && isset($_POST['hm1']) && isset($_POST['hm2']) && isset($_POST['dcm1']) && isset($_POST['cal1']) && isset($_POST['cal2']) && isset($_POST['st1']) && isset($_POST['4mgt1']) && isset($_POST['drca1']) && isset($_POST['trac1']) && isset($_POST['pd1']) && isset($_POST['rel1']) ){
	$quCasting= $_POST['qms1']+ $_POST['apf1']+ $_POST['apf2']+$_POST['apf3']+ $_POST['s1']+ $_POST['hm1']+ $_POST['hm2']+$_POST['dcm1']+$_POST['cal1']+ $_POST['cal2']+ $_POST['st1']+ $_POST['4mgt1'] +$_POST['drca1']+$_POST['trac1']+$_POST['pd1']+$_POST['rel1']; 
	$vendornamex = $_SESSION['vendor'];
	$emailx = $_SESSION['username'];
	$number	= $_SESSION['phone'];
	$auditee= $_SESSION['uname'];
	$con = mysqli_connect("localhost","root","","avl");
	$test1 = mysqli_query($con,"SELECT * from casting_vendors WHERE email ='".$_SESSION['username']."'");
	$count  = mysqli_num_rows($test1);
	if($count==0){
	$result = mysqli_query($con,"INSERT INTO casting_vendors(name,email,quality,qu_date,phone,qu_auditee) values ('$vendornamex','$emailx','$quCasting',now(),'".$number."','$auditee')");
	echo "Vendor Added";
	//echo $count;
	}
	elseif($count>0	){
	$result = mysqli_query($con,"UPDATE casting_vendors SET quality_date= now(), quality = '$quCasting', qu_auditee = '$auditee' WHERE email = '$emailx'");
	echo "Vendor Details Updated";		
	}	//$result1= mysqli_query($conn1,"if not exists scores(SELECT top 1 * from scores where name = '$vendornamex' ) INSERT into scores (vd_machining_score) values ('quCasting')");
	//$result=mysqli_query($conn1,"INSERT INTO scores(qu_casting_score) VALUES ('$quCasting')");
	unset($_SESSION['vendor']);
//	echo "test passed";
	}
?><br>
 <h5> <a href="/">Click here</a> to go back to Home Page</h5>
<?php
if(empty($_SESSION)){
header("location:/"); }
?>
</html>