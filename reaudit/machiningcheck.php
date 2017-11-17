<?php if ( isset($_POST['cm1']) && isset($_POST['cm2']) && isset($_POST['cm5']) && isset($_POST['cm6']) && isset($_POST['dd2']) && isset($_POST['dd3']) && isset($_POST['c1']) && isset($_POST['qs1']) && isset($_POST['qs2']) && isset($_POST['qs3']) && isset($_POST['soto1']) && isset($_POST['soto2']) && isset($_POST['pr1']) && isset($_POST['pr2'])  && isset($_POST['lf1'])) {
$vdMachining = $_POST['cm1']+$_POST['cm2']+$_POST['cm5']+$_POST['cm6']+$_POST['dd2']+$_POST['dd3']+$_POST['c1']+$_POST['qs1']+$_POST['qs2']+$_POST['qs3']+$_POST['soto1']+$_POST['soto2']+$_POST['pr1']+$_POST['pr2']+$_POST['lf1'];
$auditee	= $_SESSION['uname'];
$con = mysqli_connect("localhost","root","","avl");
$con2 = mysqli_connect("localhost","root","","contact");
$reaudit_quater =$_SESSION['reaudit_quater'];
$target_vendor  = $_SESSION['target_vendor']; $year = date("Y");
echo $process = $_SESSION['process']; 
$test1 = mysqli_query($con," SELECT contact.contact_details.name as name,contact.contact_details.email , contact.contact_details.phone_no, avl.$process.scm , avl.$process.vd , avl.$process.quality , avl.$process.scm_date , avl.$process.vd_date, avl.$process.quality_date ,avl.$process.scm_auditee ,avl.$process.vd_auditee,avl.$process.qu_auditee,avl.$process.audit_quater as audit_quater,avl.$process.audit_year as auditt_year 
FROM avl.$process INNER JOIN contact.contact_details ON avl.$process.name = contact.contact_details.name WHERE contact.contact_details.name ='".$_SESSION['target_vendor']."' and audit_quater = '".$_SESSION['reaudit_quater']."' and audit_year = $year");
$count  = mysqli_num_rows($test1);
	if($count==0){
		$result = mysqli_query($con,"INSERT INTO $process (name,vd,vd_date,vd_auditee,audit_quater,audit_year) values ('$target_vendor','$vdMachining',now(),'$auditee','$reaudit_quater','$year')");
		{
			if($result){
				?>
				<div class="alert alert-success">
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
	$result = mysqli_query($con,"UPDATE avl.$process set vd = '$vdMachining' ,vd_date = now(),vd_auditee = '$auditee' WHERE name = '$target_vendor' and audit_quater = '$reaudit_quater' and audit_year = '$year' ");
	if($result){
	?>
		<div class="alert alert-success">
		<center><strong>Notice!</strong> Score Updated Successfully. </center>
		</div>
		<?php 
}
else {
	echo "ERRor in vd";
	
}
}
	unset($_SESSION['process']);
	unset($_SESSION['reaudit_quater']);
	
}
?>