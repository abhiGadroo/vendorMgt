<?php 
session_start();
$_SESSION['target_vendor'];
if(empty($_SESSION['target_vendor'])){
	header ("location: ../quater_auditor");
}
$namex = $_SESSION['uname'];
 require "C:/xampp/htdocs/db.php";
$resultxx =mysqli_query($con,"SELECT type from members WHERE email= '$namex'");
while ($row = mysqli_fetch_array($resultxx)) {
$type = $_SESSION['typeOfUser'] = $row['type'];
}
?>
<html>
<head>
  <title>Vendor Management System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="../vms.php">GOI VMS</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="../authorized_vendors.php">Authorized Vendor List</a></li>
      <li><a href="\vms\index.php">New Vendor Audit</a></li>
      <li><a href="..\audit_status.php">Audit Status</a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">More<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="../quater_auditor.php">Quaterly Audit</a></li>
          <li><a href="../audit_calander.php">Audit Calander</a></li>
        </ul>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><h4>Welcome <a href=""><span class="glyphicon glyphicon-log-in"></span><?php echo $_SESSION['uname'];?></h4></a></li>
      <li><a href="/logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>
<div class="alert alert-info">
		<center><strong>INFO!</strong> You are Re-Auditing <?php echo $_SESSION['target_vendor'];?> for the quater <?php if (date("m")/3 <=3 and date("m")/3 >2){echo $_SESSION['reaudit_quater']=  "JAS";} 
	elseif (date("m")/3 <=1) {echo $_SESSION['reaudit_quater']="JFM";} 
	elseif (date("m")/3 <=2 and date("m")/3 >1){echo $_SESSION['reaudit_quater']= "AMJ";}
	elseif (date("m")/3 <=4 and date("m")/3 >3){echo $_SESSION['reaudit_quater']= "OND";}
	echo " - ";
	echo date("Y");?> </center>
		</div>

<form id = "test" action="/reaudit/castingcheck.php" method ="POST">	
<div class="container" style= "<?php echo ($type == 'VD')?'display:block':'display:none';?>"> 

  <h2>Vendor Development</h2> 
  <p>In this section we try to check if the vendor have right infra available at his site</p>
 <div> <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Infrastructure</button>
    <button type="button" name= "btn_vd " class="btn btn-info" data-toggle="collapse" data-target="#demo1">Design & Development</button>

  	 <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo2">Cost</button>
	<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demoxx1">Quality Systems</button>
	 <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo3">CCSR</button>
   <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demoxx2">Processes</button>
     <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demoxx3">Logistic Facilities</button>
	<input type ="submit" name="submit"/>
  
  </div>
  <div id="demo" class="collapse"><br><label>Infrastructure</label>
    <table>
	<h3>Capacity Mapping</h3>
  <tr><td>To check the maintenance of the tools being used for GOR.  </td><td><input type="number" min="0" max="1" name="cm1" required> </td></tr>
  <tr><td>New moulds been added.</td> <td><input type="number" min="0" max="1" name="cm2" required></td> </tr>
  </table>
	<table><h3>Capability Mapping</h3>
	<tr><td>Training modules.</td><td><input type="number" min="0" max="1" name="cm5" required ></td> </tr>
	<tr><td>Skill matrix chart.</td><td><input type="number" min="0" max="1" name="cm6" required ></td> </tr>

  </table>
  </div>
  <div id="demo1" class="collapse"><br><label>Design & Development</label>
    <table>
  <tr><td>Records of the drawings (old + new ) ECN tracking )</td> <td><input type="number" min="0" max="1" name="dd2" required></td> </tr>
  <tr><td>Changes been incorporated and informed stakeholders.</td> <td><input type="number" min="0" max="1" name="dd3" required></td> </tr>
  </table>
	</div>
  <div id="demo2" class="collapse"><br><label>Cost</label>
    <table><br>
  <tr><td>Needs to be updated in case any new process has been added / process been deleted.</td><td><input type="number" min="0" max="1" name="c1"> </td></tr>
  </table>
	</div>
  <div id="demoxx1" class="collapse"><br><label>Quality System</label>
    <table><br>
  <tr><td>Quality check sheets - monitor defect trend.</td><td><input type="number" min="0" max="1" name="qs1" required> </td></tr>
  <tr><td>RCA records.</td><td><input type="number" min="0" max="1" name="qs2" required> </td></tr>
  <tr><td>Changes in process as per RCA analysis .</td><td><input type="number" min="0" max="1" name="qs3" required> </td></tr>
  </table></div>
  <div id="demo3" class="collapse"><br><label>Customer Complaint Redresal System</label>
    <table><br>
  <tr><td>How the supplier handled complaints in the last Quarter - CAPA </td><td><input type="number" min="0" max="1" name="soto1" required> </td></tr>
  <tr><td>How quickly was the solution provided by the vendor </td><td><input type="number" min="0" max="1" name="soto2" required> </td></tr>
  </table></div>
  <div id="demoxx2" class="collapse"><br><label>Processes</label>
    <table><br>
  <tr><td>The production line is set up as per PPAP. </td><td><input type="number" min="0" max="1" name="pr1" required> </td></tr>
  <tr><td>Records of the testings done (test reports).</td><td><input type="number" min="0" max="1" name="pr2" required> </td></tr>
  </table></div>
  <div id="demoxx3" class="collapse"><br><label>Logistic Facility</label>
    <table><br>
  <tr><td>Right material reached GOR at right time. </td><td><input type="number" min="0" max="1" name="lf1" required> </td></tr>
  </table>
	</div>
	</div>
</form>

<form id = "test2" action="/reaudit/castingcheck.php" method ="POST">
<div class="container"style= "<?php echo ($type == 'Quality')?'display:block':'display:none';?>">
  <h2>Quality</h2>
<p>In this we check if the vendor has the right quality systems laid down which ensure that the material will be of good quality and will be defect free and in case a defect arises the vendor will do the anaysis and try to close it.</p>
 <div> <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demox">QMS</button>
    <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demoX1">Availablity of Process flow</button>
	 <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demox2">Samples</button>
	 <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demox3">History Management</button>
	<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demox4">Drawing Change Mgt.</button>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demox6">Calibration
</button>
  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demox7">Quality gates</button>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demox8">4M Mgt</button>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demox9">Defect's RCA</button>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demox10">Reliablity</button>

<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demox11">Tracablity</button>
<input type ="submit" name="submit"/>
  </div>
  <div id="demox" class="collapse"><br><label>Quality Management System</label>
    <table>
  <tr><td>Documentation for GOR -Systems and Procedures (ILO-Incoming /Line/ Outgoing reports from latest consignments) </td><td><input type="number" min="0" max="1" name="qms1" required> </td></tr>
  </table>
  </div>
  <div id="demoX1" class="collapse"><br><label>Availablity Of Process-flow</label>
    <table>
  <tr><td>Verification of Process flow submitted to GOR</td><td><input type="number" min="0" max="1" name="apf1" required> </td></tr>
  <tr><td>Testings applicable for GOR (Evaluation required for all applicable testings)</td> <td><input type="number" min="0" max="1" name="apf2" required></td> </tr>
  </table>
	</div>
  <div id="demox2" class="collapse"><br><label>Samples</label>
    <table><br>
  <tr><td>Latest Standard/ Golden samples should be available as per drawing against which Output will be evaluated and in case of any quality issues benchmarking of production lot against Golden sample will be done (vendor must keep record of the old samples)</td><td><input type="number" min="0" max="1" name="s1" required> </td></tr>
  </table>
	</div>
  <div id="demox3" class="collapse"><br><label>History Management</label>
    <table><br>
  <tr><td>Record of check sheets should be there(ILO+Development Reports + Layout Inspection reports(FAI)+PPAP)  </td><td><input type="number" min="0" max="1" name="hm1" required> </td></tr>
  <tr><td>Adherence to process flow  </td><td><input type="number" min="0" max="1" name="hm2" required> </td></tr>
  <tr><td>CAPA Validation and adherence to the action plan submitted  </td><td><input type="number" min="0" max="1" name="hm3" required> </td></tr>
  </table>
	</div>
  <div id="demox4" class="collapse"><br><label>Drawing Change Management</label>
    <table><br>
  <tr><td>Record of all the drawings (new+old) and information flow mechanism  </td><td><input type="number" min="0" max="1" name="dcm1" required> </td></tr>
  </table>
	</div>

  <div id="demox6" class="collapse"><br><label>Calibration</label>
    <table><br>
  <tr><td>All the equipments should be timely calibrated </td><td><input type="number" min="0" max="1" name="cal1" required> </td></tr>
  <tr><td>There should be a plan for the same specifying the due dates for caliberation of all the equipments  </td><td><input type="number" min="0" max="1" name="cal2" required> </td></tr>
  </table>
	</div>
  <div id="demox7" class="collapse"><br><label>Quality Gates</label>
    <table><br>
  <tr><td>GOR QC parameters monitoring & documentation.</td><td><input type="number" min="0" max="1" name="st1" required> </td></tr>
  </table>
	</div>

  <div id="demox8" class="collapse"><br><label>4M Management</label>
    <table><br>
  <tr><td>Updated 4M records for GOR .</td><td><input type="number" min="0" max="1" name="4mgt1" required> </td></tr>
  </table>
	</div>
  <div id="demox9" class="collapse"><br><label>Defect's RCA</label>
    <table><br>
  <tr><td>Anaysis of the problems arising ,Closure of the problem and informing the stakeholders about the changes done, SCAR & adherence.</td><td><input type="number" min="0" max="1" name="drca1" required> </td></tr>
  </table>
	</div>
  <div id="demox10" class="collapse"><br><label>Reliablity</label>
    <table><br>
  <tr><td>Records of the testing (all applicable testing) done on GOI parts</td><td><input type="number" min="0" max="1" name="rel1" required> </td></tr>
  </table>
	</div>
  <div id="demox11" class="collapse"><br><label>Tracablity</label>
    <table><br>
  <tr><td>Tracebility of al the lots produced & dispached .</td><td><input type="number" min="0" max="1" name="trac1" required> </td></tr>
  </table>
	</div>
	</div>
</form>

<form id = "test3" action="/reaudit/castingcheck.php" method ="POST">
<?php include "../scm_reaudit_header.php"; ?>	
</body>