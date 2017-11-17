<?php session_start();
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

<div class="well"><center> <h4> Casting Score Sheet</h4></center>
</div>
<style>
form + button.btn.btn-info {
  background: blue;
}
form:invalid + button.btn.btn-info {
  background: red;
}

</style>
<form id = "test" action="/testscores/test_castscore.php" method ="POST">
<div class="container" style= "<?php echo ($type == 'VD')?'display:block':'display:none';?>"> 
  <h2>Vendor Development</h2>
  <p>In this section we try to check if the vendor have right infra available at his site</p>
 <div> <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Infrastructure</button>
    <button type="button" name= "btn_vd " class="btn btn-info" data-toggle="collapse" data-target="#demo1">Design & Development</button>
	 <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo2">Cost</button>
	 <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo3">Size of the Org</button>
	<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo4">Quality Systems</button>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo5">CCRS</button>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo6">Processes</button>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo7">Logistics Facility</button>
<input type="Submit" name = "submit"/>

 Total: <label id="total" name="totalx">""</label> out of <label id="total1" name="totalx">""</label> .
  </div>

  <div id="demo" class="collapse"> <br> <label>Infrastructure</label>
    <table>
	<h3>Capacity Mapping</h3>
  <tr><td>Types of casting facility, machines & tools available with the vendor  </td><td><input type="number" onblur="findTotal()" id= "cm1" min="0"   max= "1" name="cm" required></td> <td> <input id="cmx" name="cmx" type="checkbox" onClick="toggle('cmx', 'cm1')">  </td></tr>
  <tr><td>Number of moulds and capacity of the moulds with the vendor</td> <td><input type="number" onblur="findTotal()" id= "cm2" min="0"  max= "1" name="cm" required> </td> <td><input id="cmx2" name="cmx2" type="checkbox" onClick="toggle('cmx2', 'cm2')">  </td></tr>
  <tr><td>Source of Raw material and Boughtout parts </td><td><input type="number" onblur="findTotal()" id= "cm3" min="0"  max= "1" name="cm" required></td> <td> <input id="cmx3" name="cmx3" type="checkbox" onClick="toggle('cmx3', 'cm3')">  </td></tr>
  <tr><td>Type of Infra support system to support the entire production unit  </td><td><input type="number" onblur="findTotal()" id= "cm4" min="0"  max= "2" name="cm" required></td> <td> <input id="cmx4" name="cmx4" type="checkbox" onClick="toggle('cmx4', 'cm4')">  </td></tr>
	</table>
	<table>
	<h3>Capability Mapping</h3>
	<tr><td>Verify skill matrix of the operator to check if he has performed similar task in the past.</td><td><input type="number" id="cm5" onblur="findTotal()"  min="0"  max= "1" name="cm" required > </td> <td><input id="cmx5" name="cmx5" type="checkbox" onClick="toggle('cmx5', 'cm5')"">  </td></tr>

  </table>
  </div>
  <div id="demo1" class="collapse"> <br> <label>Design And Development Team</label>
    <table>
  <tr><td>An experienced team in Design and Development to check the feasibility of the drawings and follow APQP process  </td><td><input type="number" onblur="findTotal()" min="0"  max= "3" id= "cm6" name="cm" required> <input id="cmx6" name="cmx6" type="checkbox" onClick="toggle('cmx6', 'cm6')"/>  </td></tr>
  <tr><td>Right set of softwares to help in checking the feasibility of the drawing (if applicable) </td><td> <input type="number" onblur="findTotal()" min="0"  max= "2" id= "cm7" name="cm" required> <input id="cmx7" name="cmx7" type="checkbox" onClick="toggle('cmx7', 'cm7')"> </td> </tr>
  </table>
	</div>
  <div id="demo2" class="collapse"> <br> <label>Cost</label>
    <table><br>
  <tr><td>At what price is the product being offered by the vendor do analysis based on the costing norms set by GOR mark up analysis) and as per industry norms also</td><td><input type="number" onblur="findTotal()" min="0"  max="5" id= "cm8" name="cm"></td><td> <input id="cmx8" name="cmx8" type="checkbox" onClick="toggle('cmx8', 'cm8')">  </td></tr>
  </table>
	</div>
  <div id="demo3" class="collapse"> <br> <label>Size Of the Organization</label>
    <table><br>
  <tr><td>The organisation should be financially sound and keen to work for GOR </td><td><input type="number" onblur="findTotal()" min="0"  max= "2" id= "cm9" name="cm" required> <input id="cmx9" name="cmx9" type="checkbox" onClick="toggle('cmx9', 'cm9')">  </td></tr></td></tr>
  </table>
	</div>
  <div id="demo4" class="collapse"> <br> <label>Quality System</label>
    <table><br>
  <tr><td>Which quality system does the vendor follow , Systems and Procedures  </td><td><input type="number" onblur="findTotal()" min="0"  max= "2" id= "cm10" name="cm" required> <input id="cmx10" name="cmx10" type="checkbox" onClick="toggle('cmx10', 'cm10')">  </td></tr>
  <tr><td>RCA of the defects generated during production and also reported by the existing clients and traceability identification of the Lot </td><td><input type="number" onblur="findTotal()" min="0"  max= "2" id= "cm11" name="cm" required> <input id="cmx11" name="cmx11" type="checkbox" onClick="toggle('cmx11', 'cm11')">  </td></tr></td></tr>
  <tr><td>Incoming / Outgoing material check sheets , Internal audits for FIFO</td><td><input type="number" onblur="findTotal()" min="0"  max= "2" id= "cm12" name="cm" required> <input id="cmx12" name="cmx12" type="checkbox" onClick="toggle('cmx12', 'cm12')">  </td></tr></td></tr>
  </table>
	</div>
  <div id="demo5" class="collapse"> <br> <label>Customer Complaint Redressal System</label>
    <table><br>
  <tr><td>A dedicated team that handles customer complaints and resolution time to resolve the issues reported by the cleint</td><td><input type="number" onblur="findTotal()" min="0"  max= "5" id= "cm13" name="cm" required> <input id="cmx13" name="cmx13" type="checkbox" onClick="toggle('cmx13', 'cm13')">  </td></tr></td></tr>
  </table>
	</div>
  <div id="demo6" class="collapse"> <br> <label>Processes</label>
    <table><br>
  <tr><td>Complete flow chart for manufacturing processes (specially for GOR required processses)</td><td><input type="number" onblur="findTotal()" min="0"  max= "3"  id= "cm14" name="cm"  required> <input id="cmx14" name="cmx14" type="checkbox" onClick="toggle('cmx14', 'cm14')">  </td></tr></td></tr>
  <tr><td>Testing facility - Inhouse /Out-sourced - records for the same to be checked for the current clients</td><td><input type="number" onblur="findTotal()" min="0"  max= "2" id= "cm15" name="cm" required> <input id="cmx15" name="cmx15" type="checkbox" onClick="toggle('cmx15', 'cm15')">  </td></tr>  </table>
	</div>
  <div id="demo7" class="collapse"> <br> <label>Logistic Facility</label>
    <table><br>
  <tr><td>Schedule Management , Logistic facility available is inhouse/outsourced </td><td><input type="number" onblur="findTotal()" min="0"  max= "2" id= "cm16" name="cm" required> <input id="cmx16" name="cmx16" type="checkbox" onClick="toggle('cmx16', 'cm16')">  </td></tr>
  </table>
	</div>
	</div></form>
  <script type="text/javascript">
  function toggle(checkboxID, toggleID) {
  var checkbox = document.getElementById(checkboxID);
  var toggle = document.getElementById(toggleID);
  updateToggle = checkbox.checked ? toggle.disabled=true: toggle.disabled=false;
}</script>
  <script type="text/javascript">

function findTotal(){
    var arr = document.getElementsByName('cm');
  <!--  var arr1 = document.getElementsByName('cm').getAttribute("max");-->
    var tot=0; 
    for(var i=0;i<arr.length;i++){
        if(parseInt(arr[i].value))
            tot += parseInt(arr[i].value);
    }
    document.getElementById('total').innerHTML = tot;
var arr1 = document.getElementsByName('cm');
var overAll = 0;
for (var i = 0; i < arr1.length; i++) {
	if (!arr[i].disabled){
  var max = arr1[i].getAttribute('max');
  if (max) {
    overAll += parseInt(max);
	}
	}
}
document.getElementById('total1').innerHTML = overAll;
}
    </script>
<form id = "test2" action="/testscores/test_castscore.php/" method ="POST">
	<div class="container"style= "<?php echo ($type == 'Quality')?'display:block':'display:none';?>">
  <h2>Quality</h2>
<p>In this we check if the vendor has the right quality systems laid down which ensure that the material will be of good quality and will be defect free and in case a defect arises the vendor will do the anaysis and try to close it.</p>
  <div><button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demox">QMS</button>
    <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demoX1">Availablity of Process flow</button>
	 <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demox2">Samples</button>
	 <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demox3">History Management</button>
	<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demox4">Drawing Change Mgt.</button>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demox6">Calibration</button>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demox7">Storage</button>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demox8">4M Mgt</button>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demox9">Defect's RCA</button>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demox10">Reliablity</button>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demox11">Tracablity</button>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demox12">Packaging & Dispatch</button>
	<input type ="submit" name="submit"/>

  
  </div>
  <div id="demox" class="collapse"> <br> <label>Quality Management System (QMS) - Quality gates (quality meetings , rejection disposal , self and sequencial , time checks) </label>
    <table>
  <tr><td>Which quality system does the vendor follow , Systems and Procedures (ILO-Incoming /Line/ Outgoing reports from latest consignments) </td><td><input type="number" min="0"  max= "5" name="qms1" required> </td></tr>
  </table>
  </div>
  <div id="demoX1" class="collapse"> <br> <label>QC Flow chart availability for existing process </label>
    <table>
  <tr><td>Complete flow chart for manufacturing processes vendor is expert at (specially for GOR required processses)</td><td><input type="number" min="0"  max= "1" name="apf1" required> </td></tr>
  <tr><td>Special focus on casting finish , dimensional accuracy , mechanical properties (hardness , tensile & impact test) , chemical comp for any of the existing parts vendor is manufacturing and is in running production</td> <td><input type="number" min="0"  max= "3" name="apf2" required></td> </tr>
  <tr><td>Destructive testing (if applicable) , no roughness , sand holes , blow holes , surface shrinkage . mis runs should not be there </td> <td><input type="number" min="0"  max= "1" name="apf3" required></td> </tr>
  </table>
	</div>
  <div id="demox2" class="collapse"> <br> <label>Limit samples / Standard samples </label>
    <table><br>
  <tr><td>The vendor should have Golden / Standard samples available as per drawing, based on this vendors adherence to Drawing will be evaluated .
</td><td><input type="number" min="0"  max= "3" name="s1" required> </td></tr>
  </table>
	</div>
  <div id="demox3" class="collapse"> <br> <label>Inspection Records & History Management </label>
    <table><br>
  <tr><td>Record of check sheets should be there(ILO+Development Reports + Layout Inspection reports(FAI)+PPAP)  </td><td><input type="number" min="0"  max= "3" name="hm1" required> </td></tr>
  <tr><td>Adherence to process flow  </td><td><input type="number" min="0"  max= "2" name="hm2" required> </td></tr>
  </table>
	</div>
  <div id="demox4" class="collapse"> <br> <label>Drawing Change Management</label>
    <table><br>
  <tr><td>Record of all the drawings (new+old) and information flow mechanism  </td><td><input type="number" min="0"  max= "3" name="dcm1" required> </td></tr>
  </table>
	</div>

  <div id="demox6" class="collapse"> <br> <label>Calibration</label>
    <table><br>
  <tr><td>All the equipments should be timely calibrated </td><td><input type="number" min="0"  max= "3" name="cal1" required> </td></tr>
  <tr><td>There should be a plan for the same specifying the due dates for caliberation of all the equipments  </td><td><input type="number" min="0"  max= "2" name="cal2" required> </td></tr>
  </table>
	</div>
  <div id="demox7" class="collapse"> <br> <label>Storage</label>
    <table><br>
  <tr><td>Optimum storage facility as per stored material requirement , FIFO.</td><td><input type="number" min="0"  max= "3" name="st1" required> </td></tr>
  </table>
	</div>

  <div id="demox8" class="collapse"> <br> <label>4M Management</label>
    <table><br>
  <tr><td>No changes can be carried out in 4M without taking prior approval from client .</td><td><input type="number" min="0"  max= "3" name="4mgt1" required> </td></tr>
  </table>
	</div>
  <div id="demox9" class="collapse"> <br> <label>RCA of the defects generated during production and also reported by GOR</label>
    <table><br>
  <tr><td>Anaysis of the problems arising ,Closure of the problem and informing the stakeholders about the changes done, SCAR & adherence.</td><td><input type="number" min="0"  max= "4" name="drca1" required> </td></tr>
  </table>
	</div>
  <div id="demox10" class="collapse"> <br> <label>Reliability / Testing Lab</label>
    <table><br>
  <tr><td>Testing facility should be available- inhouse / outsourced mechanical / chemical testing labs , (NABL ACCREDIATED ) and records for the same should be available (X-Ray, spectroscope, Tensile strength, Elongation, Hardness).</td><td><input type="number" min="0"  max= "3" name="rel1" required> </td></tr>
  </table>
	</div>
  <div id="demox11" class="collapse"> <br> <label>Tracablity</label>
    <table><br>
  <tr><td>Tracebility of al the lots produced & dispached .</td><td><input type="number" min="0"  max= "3" name="trac1" required> </td></tr>
  </table>
	</div>
  <div id="demox12" class="collapse"> <br> <label>Packaging And Dispatch</label>
    <table><br>
  <tr><td>Tracebility of al the lots produced & dispached .</td><td><input type="number" min="0"  max= "3" name="pd1" required> </td></tr>
  </table>
	</div>
</form>
	</div>
	<form id = "test3" action="/testscores/test_castscore.php/" method ="POST">
<div class="container"style= "<?php echo ($type == 'SCM')?'display:block':'display:none';?>">
  <h2>SCM Prespective</h2>
<p>In this section we try to evaluate if the vendor will be able to deliver the right product to us at the right time.</p>
 <div> <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demoxx13">General</button>
    <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demoxx15">Processes</button>
  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demoxx16">Capablity</button>
  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demoxx">Customer Support</button>
  <input type ="submit" name="submit">

  
  </div>
  <div id="demoxx13" class="collapse"> <br> <label></label> <br> <label>General</label>
    <table><br>
  <tr><td>Total No. of Major OEM Clients ? </td><td><input type="number" min="0"  max= "1" name="gen1" required> </td></tr>
  <tr><td>What is the turnover in last financial year ? </td><td><input type="number" min="0"  max= "1" name="gen2" required> </td></tr>
  <tr><td>Possible Transit time for material from Domestic Vendor?</td><td><input type="number" min="0"  max= "1" name="gen3" required> </td></tr></table></div>
  
  
  <div id="demoxx15" class="collapse"> <br> <label></label> <br> <label></label>Processes<table>  
  <tr><td>Whether vendor is having Raw Material Test Certificates ? </td><td><input type="number" min="0"  max= "1" name="gen4" required> </td></tr>
  <tr><td>Does Vendor has Vendor selection process of their vendors ?</td><td><input type="number" min="0"  max= "1" name="gen5" required> </td></tr>
  <tr><td>Does Vedor has any record of PPC in plant from last 6 months</td><td><input type="number" min="0"  max= "1" name="gen6" required> </td></tr>
  <tr><td>Does Vendor has any ERP Process ? </td><td><input type="number" min="0"  max= "1" name="gen7" required> </td></tr>
  <tr><td>What is the mode of communication from top management to shop floor employee ?</td><td><input type="number" min="0"  max= "1" name="gen8" required> </td></tr>
  <tr><td>Is Vendor Using FIFO for his Raw Material inventory ?</td><td><input type="number" min="0"  max= "2" name="gen9" required> </td></tr>
  <tr><td>Is vendor using standard packing of material ? </td><td><input type="number" min="0"  max= "1" name="gen10" required> </td></tr>
  <tr><td>Does Vendor has defined place for RM, FG, SFG or Rejected Material ?</td><td><input type="number" min="0"  max= "2" name="gen11" required> </td></tr>
  <tr><td>Does vendor has defined process for Internal rejected material ?</td><td><input type="number" min="0"  max= "1" name="gen12" required> </td></tr>
  <tr><td>Does Vendor has any process for handling ECN ?</td><td><input type="number" min="0"  max= "2" name="gen13" required> </td></tr>
  <tr><td>Does Vendor has defined subcontracting process ?</td><td><input type="number" min="0"  max= "1" name="gen14" required> </td></tr>
  <tr><td>Does Vendor put identification on parts before dispatching ?</td><td><input type="number" min="0"  max= "1" name="gen15" required> </td></tr>
  <tr><td>Does vendor has defined SOP or Work Instructions ?</td><td><input type="number" min="0"  max= "2" name="gen16" required> </td></tr></table></div>
  
  
  <div id="demoxx16" class="collapse"> <br> <label></label> <br> <label>Capability</label><table>
  
  
  <tr><td>Does vendor have Skill matrix of his shop floor employees ?</td><td><input type="number" min="0"  max= "1" name="gen17" required> </td></tr>
  <tr><td>Does Vendor has capability to increase the shifts ?</td><td><input type="number" min="0"  max= "1" name="gen18" required> </td></tr></table></div>
  <div id="demoxx" class="collapse"> <br> <label></label> <br> <label>Customer Support</label>
  <table>
  <tr><td>Does Vendor keeping record of customer's feedback ? If, Yes then any action on those feedbacks ?</td><td><input type="number" min="0"  max= "1" name="gen19" required> </td></tr>
  <tr><td>Does Vendor provide prompt and technical assistance to his customer, which helps in price reduction or quality improvement or lead time reduction ?</td><td><input type="number" min="0"  max= "2" name="gen20" required> </td></tr>
  <tr><td>Does Vendor has defined process for handling customer complaints ?</td><td><input type="number" min="0"  max= "1" name="gen21" required> </td></tr>
  </table></div>

	</form></div>
</body>