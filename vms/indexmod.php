<?php session_start(); 
//if(!empty($_SESSION['vendor'])){
	//header("location:/vms/casting_score.php");
	//echo $_SESSION[['vendor']];
//}
if(empty($_SESSION['uname'])){
	header("location:../");
	
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
<link rel="stylesheet" href="css/jquery-ui-1.10.3.custom.min.css" />
<script src="js/jquery-1.10.2.min.js"></script>	
<script src="js/jquery-ui-1.10.3.custom.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="../vms.php">GOI VMS</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="../authorized_vendors.php">Authorized Vendor List</a></li>
      <li class="active"><a href="\vms\index.php">New Vendor Audit</a></li>
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
  <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md" required><!-- name_1 -->
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email_id">E-mail</label>  
  <div class="col-md-2">
  <input id="email_id" name="email_id" type="email" placeholder="" class="form-control input-md" required><!-- email_1-->
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Contact Number</label>  
  <div class="col-md-2">
  <input id="phone" name="phone" type="text" pattern="[7-9]{1}[0-9]{9}" placeholder="" class="form-control input-md" required>
    
  </div>
</div>
<link rel="stylesheet" href="css/jquery-ui-1.10.3.custom.min.css" />
 <script type="text/javascript">
      $("#textinput").blur(function () {
    $.post("../insertVendorDetails.php", { name: $(this).val() }, function (data) {
     //   $("#phone").val(data.phone_no);
       // $("#email_id").val(data.email);
	   var s = data.replace(',',':');
	   var t = s.replace("{"," ");
	   var u = t.replace("}"," ");
	   var p = u.replace('"'," ");
	   
	   var ss = p.split(":");
        $('input[name=email_id]').val(ss[1]);
        $('input[name=phone]').val(ss[3]);
      //  $("#phone").val(data[].phone_no);
    }

	);
});
    </script>
</script>
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput" >Process</label>  
  <div class="col-md-2">
  <select class="form-control" name = "select" id="select" required>
    <option ></option>
    <option value = "casting">Casting</option>
    <option value = "thermo">Thermo</option>
    <option value = "moulding">Moulding</option>
    <option value = "extrusion">Extrusion</option>
    <option value = "harness">Harness</option>
    <option value = "pcba">PCBA</option>
    <option value = "sheetmetal">Sheet-Metal</option>
    <option value = "machining">Machining</option>
  </select>
</div>
</div>
<!---Audit quater -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput" >Audit Quater</label>  
  <div class="col-md-2">
  <select class="form-control" name = "quater" id="quater" required>
    <option ></option>
    <option value = "JFM">JAN-MAR</option>
    <option value = "AMJ">APR-JUN</option>
    <option value = "JAS">JUL-SEP</option>
    <option value = "OND">OCT-DEC</option>
  </select>
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
	$_SESSION['phone'] = $_POST["phone"];
	$_SESSION['quater'] = $_POST["quater"];
//Casting Fininshed
if($_POST['select']=="casting"){
	header("location:../testscores/")
	;
}
//Extrusion Finished
elseif($_POST['select']=="extrusion"){
	header("location:../testscores/extrucion.php")
	;
}
//Thermo Finished
elseif($_POST['select']=="thermo"){
	header("location:../testscores/thermo.php")
	;
}
//Moulding Finished
elseif($_POST['select']=="moulding"){
	header("location:../testscores/moulding.php")
	;
}

//PCBA finished
elseif($_POST['select']=="pcba"){
	header("location:../testscores/pcba.php")
	;
}

//SHEET MEtal finished
elseif($_POST['select']=="sheetmetal"){
	header("location:../testscores/sheetmetal.php")
	;
}

// Machining finished
elseif($_POST['select']=="machining"){
	header("location:../testscores/machining.php")
	;
}

// Harness finished
elseif($_POST['select']=="harness"){
	header("location:../testscores/harness.php")
	;
}
else {echo 	"Are you sure of the results??";}
}
?>

</html>