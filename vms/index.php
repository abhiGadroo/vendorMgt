<?php session_start();
?>
<?php $emailID= $_SESSION['uname'];
if(empty($_SESSION['uname'])){
	header("location:/");	
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
      <a class="navbar-brand" href="#">GOI VMS</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="\vms\index.php">Authorized Vendor List</a></li>
		
      </li>
	   <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Add Vendor
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/vms/casting_score.php">Casting</a></li>
          <li><a href="/scores/extrucion.php">Extrusion </a></li>
          <li><a href="../scores/machining.php">Machining</a></li>
          <li><a href="../scores/thermo.php">Thermo</a></li>
          <li><a href="../scores/harness.php">Harness</a></li>
          <li><a href="../scores/moulding.php">Moulding</a></li>
          <li><a href="../scores/pcba.php">PCBA</a></li>
          <li><a href="../scores/sheetmetal.php">Sheet Metal</a></li>
        </ul>
      </li>
      <li><a href="#">Page 2</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
		<li><h5>Welcome<a href="">  <?php echo $_SESSION['uname'];?></a></h5></li>
      <li><a href="/logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>
<center> <h2>Authorized Vendors</h2></center>
  <a href="../indexmod.php" align: "right">Modded Dashboard </a>

  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Casting Score</th>
        <th>Machining Score</th>
        <th>Extrusion Score</th>
        <th>Thermo Score</th>
        <th>Harness Score</th>
        <th>Moulding Score</th>
        <th>PCBA Score</th>
        <th>Sheet Metal Score</th>
		
        <th></th>
      </tr>
    </thead>
<?php 
	$conn=mysqli_connect('localhost','root','','avl');
	$result=mysqli_query($conn,"select * from scores");
	$i=1;
	while($row=mysqli_fetch_array($result)):?>
	<tr>
	<td><?php echo $row['name'];?></td>
	<td><?php echo $row['email'];?></td>
	<td><?php echo $row['vd_casting_score']+$row['scm_casting_score']+$row['qu_casting_score'];?></td>
	<td><?php echo $row['vd_machining_score']+$row['scm_machining_score']+$row['qu_machining_score'];?></td>
	<td><?php echo $row['vd_extrucion_score']+$row['scm_extrusion_score']+$row['qu_extrusion_score'];?></td>
	<td><?php echo $row['vd_thermo_score']+$row['scm_thermo_score']+$row['qu_thermo_score'];?></td>
	<td><?php echo $row['vd_harness_score']+$row['scm_harness_score']+$row['qu_harness_score'];?></td>
	<td><?php echo $row['vd_moulding_score']+$row['scm_moulding_score']+$row['qu_moulding_score'];?></td>
	<td><?php echo $row['vd_pcba_score']+$row['scm_pcba_score']+$row['qu_pcba_score'];?></td>
	<td><?php echo $row['vd_sheetmetal_score']+$row['scm_sheetmetal_score']+$row['qu_sheetmetal_score'];?></td>
	</tr>
	<?php endwhile;
	?>
	</table>
</div>



</body>
</html>