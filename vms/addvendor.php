<?php session_start(); 
if(!empty($_SESSION['vendor'])){
	header("location:/vms/casting_score.php");
	//echo $_SESSION[['vendor']];
}
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
      <li><a href="\vms\index.php">Authorized Vendor List</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Add Vendor
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/vms/casting_score.php">Casting</a></li>
          <li><a href="/scores/extrucion.php">Extrusion</a></li>
          <li><a href="/scores/machining.php">Machining</a></li>
          <li><a href="/scores/thermo.php">Thermo</a></li>
          <li><a href="/scores/harness.php">Harness</a></li>
          <li><a href="/scores/moulding.php">Moulding</a></li>
          <li><a href="/scores/pcba.php">PCBA</a></li>
          <li><a href="/scores/pcba.php">Sheet Metal</a></li>
        </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="/logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>
<form class="form-horizontal" action ="" method = "POST">
<fieldset>

<!-- Form Name -->
<center><legend>Add Vendor</legend></center>
<?php

if(!empty($_SESSION['error'])){
	echo $_SESSION['error'];
	unset($_SESSION['error']);}
?>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Vendor Name</label>  
  <div class="col-md-2">
  <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md" required>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email_id">E-mail</label>  
  <div class="col-md-2">
  <input id="email_id" name="email_id" type="text" placeholder="" class="form-control input-md" required>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="proceed"></label>
  <div class="col-md-4">
    <button id="proceed" name="proceed" class="btn btn-primary" >Proceed --&gt;</button>
  </div>
</div>

</fieldset>
</form>

<?php 
if(isset($_POST['email_id'])){
	$_SESSION['vendor']=$_POST["textinput"];
	$_SESSION['username']= $_POST["email_id"];
	$link = $_SESSION['actual_link'];
	header("location:$link");
	//header("location:/vms/casting_score.php" );
}
?>

</html>