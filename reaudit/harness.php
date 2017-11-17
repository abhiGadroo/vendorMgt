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
  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Infrastructure</button>
  <div id="demo" class="collapse">
	<table><h3>Capability Mapping</h3>
	<tr><td>Check that the operators have similar past work experience for the new part , verify by evaluating the skill matrix .</td><td><input type="text" name="cm5" required ></td> </tr>

  </table>
  </div>
  <button type="button" name= "btn_vd " class="btn btn-info" data-toggle="collapse" data-target="#demo1">Design & Development</button>
  <div id="demo1" class="collapse">
    <table>
  <tr><td>An experienced team in Design and Development to check the feasibility of the drawings for new the part  </td><td><input type="text" name="dd1" required> </td></tr>
  <tr><td>Records of the drawings (old + new ) ECN tracking )</td> <td><input type="text" name="dd2" required></td> </tr>
  <tr><td>Right set of softwares to help in checking the feasibility of the drawing (if applicable) for the new part</td> <td><input type="text" name="dd3" required></td> </tr>
  </table>
	</div>
	 <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo2">Cost</button>
  <div id="demo2" class="collapse">
    <table><br>
  <tr><td>At what price is the new product being offered by the vendor do analysis based on the costing norms set by GOR (mark up analysis) and as per industry norms
</td><td><input type="text" name="c1"> </td></tr>
  </table>
	</div>
	 <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo3">CCSR</button>
  <div id="demo3" class="collapse">
    <table><br>
  <tr><td>How the supplier handled complaints in the last Quarter - CAPA </td><td><input type="text" name="soto1" required> </td></tr>
  <tr><td>How quickly was the solution provided by the vendor </td><td><input type="text" name="soto2" required> </td></tr>
  </table>
	</div>
	
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo6">Processes</button>
  <div id="demo6" class="collapse">
    <table><br>
  <tr><td>Complete flow chart for manufacturing processes (specially for GOR required processses)</td><td><input type="text" name="p1" required> </td></tr>
  <tr><td>Testing facility - Inhouse /Out-sourced - records for the same to be checked for the current clients</td><td><input type="text" name="p2" required> </td></tr>
  </table>
	</div>	<input type ="submit" name="submit"/>
</div>
	</form>
	
<form id = "test2" action="/reaudit/castingcheck.php" method ="POST">
<?php include "../quality_reaudit_header.php"; ?>	
<form id = "test3" action="/reaudit/castingcheck.php" method ="POST">
<?php include "../scm_reaudit_header.php"; ?>	
</body>