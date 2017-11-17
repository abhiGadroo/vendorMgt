<?php 
include "../default_header.php";
?><html>
<head>
  <title>Score Submission</title>
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
if ( isset($_POST['submit'])){
$vdCasting= $_POST["totalx"];
$vdMax = $_POST["total1x"];
//$vdCasting = $_POST['cm1']+$_POST['cm2']+$_POST['cm3']+$_POST['cm4']+$_POST['cm5']+$_POST['cm6']+$_POST['cm7']+$_POST['cm8']+$_POST['cm9']+$_POST['cm10']+$_POST['cm11']+$_POST['cm12']+$_POST['cm13']+$_POST['cm14']+$_POST['cm15']+$_POST['cm16'];
$vendornamex  = $_SESSION['vendor'];
$emailx	= $_SESSION['username'];
$number	= $_SESSION['phone'];
$auditee	= $_SESSION['uname'];
$quater =$_SESSION['quater'];
$year = date("Y");
$con = mysqli_connect("localhost","root","","avl");
$con2 = mysqli_connect("localhost","root","","contact");
	$test1 = mysqli_query($con," SELECT contact.contact_details.name as name,contact.contact_details.email , contact.contact_details.phone_no, avl.casting_vendors.scm , avl.casting_vendors.vd , avl.casting_vendors.quality , avl.casting_vendors.scm_date , avl.casting_vendors.vd_date, avl.casting_vendors.quality_date ,avl.casting_vendors.scm_auditee ,avl.casting_vendors.vd_auditee,avl.casting_vendors.qu_auditee,avl.casting_vendors.audit_quater as audit_quater,avl.casting_vendors.audit_year as auditt_year FROM avl.casting_vendors INNER JOIN contact.contact_details ON avl.casting_vendors.name = contact.contact_details.name
 WHERE contact.contact_details.name ='".$_SESSION['vendor']."' and audit_quater = '".$_SESSION['quater']."' and audit_year = $year");
	$test2 = mysqli_query($con2,"SELECT * from contact_details WHERE name ='".$_SESSION['vendor']."'");
	$count  = mysqli_num_rows($test1);
	$count2  = mysqli_num_rows($test2);
	if($count==0){
		if($count2 == 0){
			$result = mysqli_query($con,"INSERT INTO test_vendors(name,vd,vd_date,vd_auditee,audit_quater,audit_year) values ('$vendornamex','$vdCasting',now(),'$auditee','$quater','$year')");
			$result2 = mysqli_query($con2,"INSERT INTO contact_details(name,email,phone_no) values ('$vendornamex','$emailx','".$number."')");
			if($result2 && $result){
				?>  <div class="alert alert-success">
				<center><strong>Success!</strong> Vendor Added And Details are updated.</center>
				</div><?php 
									}
			else { 
				echo "errror";
				}				
						}
		else{
			$result = mysqli_query($con,"INSERT INTO test_vendors(name,vd,vd_date,vd_auditee,audit_quater,audit_year) values ('$vendornamex','$vdCasting',now(),'$auditee','$quater','$year')");
				if($result){
					?> <div class="alert alert-success">
					<center><strong>Success!</strong> Vendor Added.</center>
					</div> 
					<?php } 
				else { echo "errorX";
					}
			}
	}
	elseif($count == 1	){
	$result = mysqli_query($con,"UPDATE test_vendors SET vd = '$vdCasting',vd_auditee = '$auditee', vd_date = now() WHERE name = '$vendornamex' and audit_quater = '$quater' and audit_year='$year'");
		if($result){
			?>
			<div class="alert alert-success">
			<center><strong>Success!</strong> Vendor Scores updated.</center>
			</div> <?php 
				}
		else {
			echo "error";
			}
				}
	elseif($count >1){
		echo "Multiple existing records found, contact your administrator.";
	}
  unset($_SESSION['vendor']);
		}
elseif(isset($_POST['gen1']) && isset($_POST['gen2']) && isset($_POST['gen3']) && isset($_POST['gen4']) && isset($_POST['gen5']) && isset($_POST['gen6']) && isset($_POST['gen7']) && isset($_POST['gen8']) && isset($_POST['gen9']) && isset($_POST['gen10']) && isset($_POST['gen11']) && isset($_POST['gen12']) && isset($_POST['gen13']) && isset($_POST['gen14']) && isset($_POST['gen15']) && isset($_POST['gen16']) && isset($_POST['gen17']) && isset($_POST['gen18']) && isset($_POST['gen19']) && isset($_POST['gen20']) && isset($_POST['gen21']) ){
$scmCasting = 	$_POST['gen1']+$_POST['gen2']+$_POST['gen3']+$_POST['gen4']+$_POST['gen5']+$_POST['gen6']+$_POST['gen7']+$_POST['gen8']+$_POST['gen9']+$_POST['gen10']+$_POST['gen11']+$_POST['gen12']+$_POST['gen13']+$_POST['gen14']+$_POST['gen15']+$_POST['gen16']+$_POST['gen17']+$_POST['gen18']+$_POST['gen19']+$_POST['gen20']+$_POST['gen21'];
$vendornamex  = $_SESSION['vendor'];
$emailx	= $_SESSION['username'];
$number	= $_SESSION['phone'];
$auditee	= $_SESSION['uname'];
$quater = $_SESSION['quater'];
$con = mysqli_connect("localhost","root","","avl");
$con2 = mysqli_connect("localhost","root","","contact");
$year = date("Y");
		$test1 = mysqli_query($con," SELECT contact.contact_details.name as name,contact.contact_details.email , contact.contact_details.phone_no, avl.casting_vendors.scm , avl.casting_vendors.vd , avl.casting_vendors.quality , avl.casting_vendors.scm_date , avl.casting_vendors.vd_date, avl.casting_vendors.quality_date ,avl.casting_vendors.scm_auditee ,avl.casting_vendors.vd_auditee,avl.casting_vendors.qu_auditee,avl.casting_vendors.audit_quater as audit_quater,avl.casting_vendors.audit_year as auditt_year FROM avl.casting_vendors INNER JOIN contact.contact_details ON avl.casting_vendors.name = contact.contact_details.name
 WHERE contact.contact_details.name ='".$_SESSION['vendor']."' and audit_quater = '".$_SESSION['quater']."' and audit_year = $year");
	$test2 = mysqli_query($con2,"SELECT * from contact_details WHERE name ='".$_SESSION['vendor']."' ");
	$count  = mysqli_num_rows($test1);
	$count2  = mysqli_num_rows($test2);
	if($count==0){
		if($count2 == 0) {
			$result = mysqli_query($con,"INSERT INTO casting_vendors(name,scm,scm_date,scm_auditee,audit_quater,audit_year) values ('$vendornamex','$scmCasting',now(),'$auditee','$quater','$year')");
			$result2 = mysqli_query($con2,"INSERT INTO contact_details(name,email,phone_no) values ('$vendornamex','$emailx','".$number."')");
			if($result && $result2){
			?><div class="alert alert-success">
			<center><strong>Success!</strong> Vendor Added And Details Are Updated.</center>
		  </div>
			<?php 
				}
		}
		else {
			$result = mysqli_query($con,"INSERT INTO casting_vendors(name,scm,scm_date,scm_auditee,audit_quater,audit_year) values ('$vendornamex','$scmCasting',now(),'$auditee','$quater','$year')");
			if($result){
			?>
			<div class="alert alert-success">
			<center><strong>Success!</strong> Vendor Added.</center>
			</div>		
			<?php	
			}
			else{
				echo "Error Here";
			}
		}
	}
	elseif($count>0	){
	$result = mysqli_query($con,"UPDATE casting_vendors SET scm = '$scmCasting', scm_auditee = '$auditee',scm_date= now() WHERE name = '$vendornamex' and audit_quater  = '$quater' and audit_year = '$year'");
		if($result){
			?> <div class="alert alert-success">
			<center><strong>Success!</strong> Vendor Scores Updated.</center>
			</div>
			<?php
		}
		else{
			echo "error";
		}
	}
	unset($_SESSION['vendor']);
}
elseif(isset($_POST['qms1']) && isset($_POST['apf1']) && isset($_POST['apf2']) && isset($_POST['apf3']) && isset($_POST['s1']) && isset($_POST['hm1']) && isset($_POST['hm2']) && isset($_POST['dcm1']) && isset($_POST['cal1']) && isset($_POST['cal2']) && isset($_POST['st1']) && isset($_POST['4mgt1']) && isset($_POST['drca1']) && isset($_POST['trac1']) && isset($_POST['pd1']) && isset($_POST['rel1']) ){
	$quCasting= $_POST['qms1']+ $_POST['apf1']+ $_POST['apf2']+$_POST['apf3']+ $_POST['s1']+ $_POST['hm1']+ $_POST['hm2']+$_POST['dcm1']+$_POST['cal1']+ $_POST['cal2']+ $_POST['st1']+ $_POST['4mgt1'] +$_POST['drca1']+$_POST['trac1']+$_POST['pd1']+$_POST['rel1']; 
	$vendornamex = $_SESSION['vendor'];
	$emailx = $_SESSION['username'];
	$number	= $_SESSION['phone'];
	$auditee= $_SESSION['uname'];
	$quater =$_SESSION['quater'];
	$quater =$_SESSION['quater'];
	$year = date("Y");
	$con = mysqli_connect("localhost","root","","avl");
	$con2 = mysqli_connect("localhost","root","","contact");
	$test1 = mysqli_query($con," SELECT contact.contact_details.name as name,contact.contact_details.email , contact.contact_details.phone_no, avl.casting_vendors.scm , avl.casting_vendors.vd , avl.casting_vendors.quality , avl.casting_vendors.scm_date , avl.casting_vendors.vd_date, avl.casting_vendors.quality_date ,avl.casting_vendors.scm_auditee ,avl.casting_vendors.vd_auditee,avl.casting_vendors.qu_auditee,avl.casting_vendors.audit_quater as audit_quater,avl.casting_vendors.audit_year as auditt_year FROM avl.casting_vendors INNER JOIN contact.contact_details ON avl.casting_vendors.name = contact.contact_details.name
 WHERE contact.contact_details.name ='".$_SESSION['vendor']."' and audit_quater = '".$_SESSION['quater']."' and audit_year = $year");
	$test2 = mysqli_query($con2,"SELECT * from contact_details WHERE name ='".$_SESSION['vendor']."'");
	$count  = mysqli_num_rows($test1);
	$count2  = mysqli_num_rows($test2);
	if($count==0){
		if($count2 == 0){
			$result = mysqli_query($con,"INSERT INTO casting_vendors(name,quality,quality_date,qu_auditee,audit_quater,audit_year) values ('$vendornamex','$quCasting',now(),'$auditee','$quater','$year')");
			$result2 = mysqli_query($con2,"INSERT INTO contact_details(name,email,phone_no) values ('$vendornamex','$emailx','".$number."')");
			if($result && $result2){
			?><div class="alert alert-success">
			<center><strong>Success!</strong> Vendor Added And Details are updated.</center>
			</div> <?php
						}
			else {
				echo "error";
				}
			}
		else {
			$result = mysqli_query($con,"INSERT INTO casting_vendors(name,quality,quality_date,qu_auditee,audit_quater,audit_year) values ('$vendornamex','$quCasting',now(),'$auditee','$quater','$year')");
			if($result){
				?>
				<div class="alert alert-success">
				<center><strong>Success!</strong> Vendor Added. </center>
				</div>
				<?php			
					}
			else {
				echo "error";
			}		
		}
	}
	elseif($count>0	){
		$result = mysqli_query($con,"UPDATE casting_vendors SET quality_date= now(), quality = '$quCasting', qu_auditee = '$auditee' WHERE name = '$vendornamex' and audit_quater = '$quater' and audit_year = '$year'");
		if($result){
		?> <div class="alert alert-success">
		<center><strong>Success!</strong> Vendor Scores updated.</center>
		</div>
		<?php 		
				}
		else{
			echo "ERROR HERE";
		}
	}
	unset($_SESSION['vendor']);
	}
?><br>
<center> <h5> <a href="/vms/index.php">Click here</a> to go back to Home Page. Or it will automatically redirect in 5 secs..</h5></center><?php header( "refresh:5;url=/vms/index.php" ); 
?><?php
if(empty($_SESSION)){
header("location:/"); }
?>
</html>