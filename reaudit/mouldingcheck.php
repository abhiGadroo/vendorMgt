<?php session_start();
if(empty($_SESSION['process'])){
	header("location:../quater_auditor.php");
}
?>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<?php
$conn1=mysqli_connect('localhost','root','','avl');
if(!$conn1){
	die(mysqli_connect_errno());
	echo "roor";

}
if ( isset($_POST['cm1']) && isset($_POST['cm2']) && isset($_POST['cm5']) && isset($_POST['dd1']) && isset($_POST['dd2']) && isset($_POST['dd3']) && isset($_POST['c1']) && isset($_POST['soto1']) && isset($_POST['soto2']) && isset($_POST['p1']) && isset($_POST['p2'])) {
$vdCasting = $_POST['cm1']+$_POST['cm2']+$_POST['cm5']+$_POST['dd1']+$_POST['dd2']+$_POST['dd3']+$_POST['c1']+$_POST['soto1']+$_POST['soto2']+$_POST['p1']+$_POST['p2'];
$auditee	= $_SESSION['uname'];
$con = mysqli_connect("localhost","root","","avl");
$con2 = mysqli_connect("localhost","root","","contact");
$reaudit_quater =$_SESSION['reaudit_quater'];
$target_vendor  = $_SESSION['target_vendor']; $year = date("Y");
echo $process = $_SESSION['process']; 
$test1 = mysqli_query($con," SELECT contact.contact_details.name as name,contact.contact_details.email , contact.contact_details.phone_no, avl.moulding_vendors.scm , avl.moulding_vendors.vd , avl.moulding_vendors.quality , avl.moulding_vendors.scm_date , avl.moulding_vendors.vd_date, avl.moulding_vendors.quality_date ,avl.moulding_vendors.scm_auditee ,avl.moulding_vendors.vd_auditee,avl.moulding_vendors.qu_auditee,avl.moulding_vendors.audit_quater as audit_quater,avl.moulding_vendors.audit_year as auditt_year FROM avl.moulding_vendors INNER JOIN contact.contact_details ON avl.moulding_vendors.name = contact.contact_details.name
 WHERE contact.contact_details.name ='".$_SESSION['target_vendor']."' and audit_quater = '".$_SESSION['reaudit_quater']."' and audit_year = $year");
$count  = mysqli_num_rows($test1);
	if($count==0){
		$result = mysqli_query($con,"INSERT INTO moulding_vendors (name,vd,vd_date,vd_auditee,audit_quater,audit_year) values ('$target_vendor','$vdCasting',now(),'$auditee','$reaudit_quater','$year')");
		{
			if($result){
				?>
				<div class="alert alert-sucess">
				<center><strong>Update!</strong> Re-Audit Details Added </center>
				</div>
				<?php
			}
			else{
			?>
				<div class="alert alert-danger">
				<center><strong>ERROR!</strong> Error While Adding Vendor. </center>
				</div>
				<?php
			}
		}
		
	}
elseif($count >= 1	){
	$result = mysqli_query($con,"UPDATE avl.moulding_vendors set vd = '$vdCasting' ,vd_date = now(),vd_auditee = '$auditee' WHERE name = '$target_vendor' and audit_quater = '$reaudit_quater' and audit_year = '$year' ");
	if($result){
	?>
		<div class="alert alert-sucess">
		<center><strong>Notice!</strong> Score Updated Sucessfully. </center>
		</div>
		<?php 
}
else {
	echo "ERRor in vd";
	
}
}
	unset($_SESSION['process']);
	
}


elseif(isset($_POST['qms1']) && isset($_POST['apf1']) && isset($_POST['apf2']) && isset($_POST['hm3']) && isset($_POST['s1']) && isset($_POST['hm1']) && isset($_POST['hm2']) && isset($_POST['dcm1']) && isset($_POST['cal1']) && isset($_POST['cal2']) && isset($_POST['st1']) && isset($_POST['4mgt1']) && isset($_POST['drca1']) && isset($_POST['trac1']) && isset($_POST['pd1']) && isset($_POST['rel1']) ){
$quCasting= $_POST['qms1']+ $_POST['apf1']+ $_POST['apf2']+$_POST['hm3']+ $_POST['s1']+ $_POST['hm1']+ $_POST['hm2']+$_POST['dcm1']+$_POST['cal1']+ $_POST['cal2']+ $_POST['st1']+ $_POST['4mgt1'] +$_POST['drca1']+$_POST['trac1']+$_POST['pd1']+$_POST['rel1']; 
$auditee	= $_SESSION['uname'];
$con = mysqli_connect("localhost","root","","avl");
$con2 = mysqli_connect("localhost","root","","contact");
$reaudit_quater =$_SESSION['reaudit_quater'];
$target_vendor  = $_SESSION['target_vendor']; $year = date("Y");
echo $process = $_SESSION['process']; 
$test1 = mysqli_query($con," SELECT contact.contact_details.name as name,contact.contact_details.email , contact.contact_details.phone_no, avl.moulding_vendors.scm , avl.moulding_vendors.vd , avl.moulding_vendors.quality , avl.moulding_vendors.scm_date , avl.moulding_vendors.vd_date, avl.moulding_vendors.quality_date ,avl.moulding_vendors.scm_auditee ,avl.moulding_vendors.vd_auditee,avl.moulding_vendors.qu_auditee,avl.moulding_vendors.audit_quater as audit_quater,avl.moulding_vendors.audit_year as auditt_year FROM avl.moulding_vendors INNER JOIN contact.contact_details ON avl.moulding_vendors.name = contact.contact_details.name
 WHERE contact.contact_details.name ='".$_SESSION['target_vendor']."' and audit_quater = '".$_SESSION['reaudit_quater']."' and audit_year = $year");
$count  = mysqli_num_rows($test1);
	if($count==0){
		$result = mysqli_query($con,"INSERT INTO moulding_vendors (name,quality,quality_date,qu_auditee,audit_quater,audit_year) values ('$target_vendor','$quCasting',now(),'$auditee','$reaudit_quater','$year')");
		{
			if($result){
				?>
				<div class="alert alert-sucess">
				<center><strong>Update!</strong> Re-AuditS Details Added </center>
				</div>
				<?php
			}
			else{
			?>
				<div class="alert alert-danger">
				<center><strong>ERROR!</strong> Error While Adding Vendor. </center>
				</div>
				<?php
			}
		}
		
	}
elseif($count >= 1	){
	$result = mysqli_query($con,"UPDATE avl.moulding_vendors set quality = '$quCasting' ,quality_date = now(),qu_auditee = '$auditee' WHERE name = '$target_vendor' and audit_quater = '$reaudit_quater' and audit_year = '$year'");
	if($result){
	?>
		<div class="alert alert-sucess">
		<center><strong>Notice!</strong> Score Updated Sucessfully. </center>
		</div>
		<?php 
	}
	else{
		echo "error in quality";
	}
	}
	unset($_SESSION['process']);
	
}




elseif(isset($_POST['gen1']) && isset($_POST['gen2']) && isset($_POST['gen3']) && isset($_POST['gen4']) && isset($_POST['gen5']) && isset($_POST['gen6']) && isset($_POST['gen7']) && isset($_POST['gen8']) && isset($_POST['gen9']) && isset($_POST['gen10']) && isset($_POST['gen11']) && isset($_POST['gen12']) && isset($_POST['gen13']) && isset($_POST['gen14']) && isset($_POST['gen15']) && isset($_POST['gen16']) && isset($_POST['gen17']) && isset($_POST['gen18']) && isset($_POST['gen19']) && isset($_POST['gen20']) && isset($_POST['gen21']) && isset($_POST['gen22']) && isset($_POST['gen23']) && isset($_POST['gen24'])){
$scmCasting = 	$_POST['gen1']+$_POST['gen2']+$_POST['gen3']+$_POST['gen4']+$_POST['gen5']+$_POST['gen6']+$_POST['gen7']+$_POST['gen8']+$_POST['gen9']+$_POST['gen10']+$_POST['gen11']+$_POST['gen12']+$_POST['gen13']+$_POST['gen14']+$_POST['gen15']+$_POST['gen16']+$_POST['gen17']+$_POST['gen18']+$_POST['gen19']+$_POST['gen20']+$_POST['gen21']+$_POST['gen22']+$_POST['gen23']+$_POST['gen24'];
$auditee	= $_SESSION['uname'];
$con = mysqli_connect("localhost","root","","avl");
$con2 = mysqli_connect("localhost","root","","contact");
$reaudit_quater =$_SESSION['reaudit_quater'];
$target_vendor  = $_SESSION['target_vendor']; $year = date("Y");
echo $process = $_SESSION['process']; 
$test1 = mysqli_query($con," SELECT contact.contact_details.name as name,contact.contact_details.email , contact.contact_details.phone_no, avl.moulding_vendors.scm , avl.moulding_vendors.vd , avl.moulding_vendors.quality , avl.moulding_vendors.scm_date , avl.moulding_vendors.vd_date, avl.moulding_vendors.quality_date ,avl.moulding_vendors.scm_auditee ,avl.moulding_vendors.vd_auditee,avl.moulding_vendors.qu_auditee,avl.moulding_vendors.audit_quater as audit_quater,avl.moulding_vendors.audit_year as auditt_year FROM avl.moulding_vendors INNER JOIN contact.contact_details ON avl.moulding_vendors.name = contact.contact_details.name
 WHERE contact.contact_details.name ='".$_SESSION['target_vendor']."' and audit_quater = '".$_SESSION['reaudit_quater']."' and audit_year = $year");
$count  = mysqli_num_rows($test1);
	if($count==0){
		$result = mysqli_query($con,"INSERT INTO moulding_vendors (name,scm,scm_date,scm_auditee,audit_quater,audit_year) values ('$target_vendor','$scmCasting',now(),'$auditee','$reaudit_quater','$year')");
		{
			if($result){
				?>
				<div class="alert alert-sucess">
				<center><strong>Update!</strong> Re-Audit Details Added </center>
				</div>
				<?php
			}
			else{
			?>
				<div class="alert alert-danger">
				<center><strong>ERROR!</strong> Error While Adding Vendor. </center>
				</div>
				<?php
			}
		}
		
	}
elseif($count >= 1	){
	$result = mysqli_query($con,"UPDATE avl.moulding_vendors set scm = '$scmCasting' ,scm_date = now(),scm_auditee = '$auditee' WHERE name = '$target_vendor' and audit_quater = '$reaudit_quater' and audit_year = '$year'");
	if($result){
	?>
		<div class="alert alert-warning">
		<center><strong>Notice!</strong> Score Updated Sucessfully. </center>
		</div>
		<?php 
		}
	else{
		echo "error";
	}
}
	unset($_SESSION['process']);
	
}


?>
<center> <h5> <a href="../vms.php">Click here</a> to go back to Home Page. Or it will automatically redirect in 5 secs..</h5></center><?php //header( "refresh:5;url=../vms.php" );
?><?php
if(empty($_SESSION)){
header("location:../"); }
?></html>