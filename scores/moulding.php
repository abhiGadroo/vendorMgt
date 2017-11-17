<?php
include "../default_header.php";

?>

<center> <h4> Moulding Score Sheet</h4></center>

<form id = "csvdform" action="/scores/mouldingcheck.php/" method ="POST">
<?php include ("../vd_header.php");?>
<form id = "csvdform" action="/scores/mouldingcheck.php/" method ="POST">
<div class="container"style= "<?php echo ($type == 'Quality')?'display:block':'display:none';?>">
  <h2>Quality</h2>
<p>In this we check if the vendor has the right quality systems laid down which ensure that the material will be of good quality and will be defect free and in case a defect arises the vendor will do the anaysis and try to close it.</p>
  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demox">QMS</button>
  <div id="demox" class="collapse">
    <table>
  <tr><td>Which quality system does the vendor follow , Systems and Procedures (ILO-Incoming /Line/ Outgoing reports from latest consignments) </td><td><input type="text" name="qms1" required> </td></tr>
  </table>
  </div>
  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demoX1">Availablity of Process flow</button>
  <div id="demoX1" class="collapse">
    <table>
  <tr><td>Complete flow chart for manufacturing processes vendor is expert at (specially for GOR required processses)</td><td><input type="text" name="apf1" required> </td></tr>
  <tr><td>Special focus on flashes, Tool Marks, Visual Inspection for Sink Marks , Gas and Burn Marks, Shrinkage , Warpage, Gate marks (Runners / Risers) and Short Mould for any of the existing parts vendor is manufacturing and is in running production. </td> <td><input type="text" name="apf2" required></td> </tr>
  </table>
	</div>
	 <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demox2">Samples</button>
  <div id="demox2" class="collapse">
    <table><br>
  <tr><td>The vendor should have Golden / Standard samples available as per drawing, based on this vendors adherence to Drawing will be evaluated .
</td><td><input type="text" name="s1" required> </td></tr>
  </table>
	</div>
	 <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demox3">History Management</button>
  <div id="demox3" class="collapse">
    <table><br>
  <tr><td>Record of check sheets should be there(ILO+Development Reports + Layout Inspection reports(FAI)+PPAP)  </td><td><input type="text" name="hm1" required> </td></tr>
  <tr><td>Adherence to process flow  </td><td><input type="text" name="hm2" required> </td></tr>
  </table>
	</div>
	<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demox4">Drawing Change Mgt.</button>
  <div id="demox4" class="collapse">
    <table><br>
  <tr><td>Record of all the drawings (new+old) and information flow mechanism  </td><td><input type="text" name="dcm1" required> </td></tr>
  </table>
	</div>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demox6">Calibration
</button>
  <div id="demox6" class="collapse">
    <table><br>
  <tr><td>All the equipments should be timely calibrated </td><td><input type="text" name="cal1" required> </td></tr>
  <tr><td>There should be a plan for the same specifying the due dates for caliberation of all the equipments  </td><td><input type="text" name="cal2" required> </td></tr>
  </table>
	</div>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demox7">Storage</button>
  <div id="demox7" class="collapse">
    <table><br>
  <tr><td>Optimum storage facility as per stored material requirement , FIFO.</td><td><input type="text" name="st1" required> </td></tr>
  </table>
	</div>

<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demox8">4M Mgt</button>
  <div id="demox8" class="collapse">
    <table><br>
  <tr><td>No changes can be carried out in 4M without taking prior approval from client .</td><td><input type="text" name="4mgt1" required> </td></tr>
  </table>
	</div>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demox9">Defect's RCA</button>
  <div id="demox9" class="collapse">
    <table><br>
  <tr><td>Anaysis of the problems arising ,Closure of the problem and informing the stakeholders about the changes done, SCAR & adherence.</td><td><input type="text" name="drca1" required> </td></tr>
  </table>
	</div>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demox10">Reliablity</button>
  <div id="demox10" class="collapse">
    <table><br>
  <tr><td>Testing facility should be available- inhouse / outsourced mechanical / chemical testing labs , (NABL ACCREDIATED ) and records for the same should be available (X-Ray, spectroscope, Tensile strength, Elongation, Hardness).</td><td><input type="text" name="rel1" required> </td></tr>
  </table>
	</div>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demox11">Tracablity</button>
  <div id="demox11" class="collapse">
    <table><br>
  <tr><td>Tracebility of al the lots produced & dispached .</td><td><input type="text" name="trac1" required> </td></tr>
  </table>
	</div>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demox12">Packaging & Dispatch</button>
  <div id="demox12" class="collapse">
    <table><br>
  <tr><td>Adherence to packing and dispatch standard and containment action for any non compliance /damange found for the current consignments</td><td><input type="text" name="pd1" required> </td></tr>
  </table>
	</div>
	<input type ="submit" name="submit"/></div></form>
<form id = "csvdform" action="/scores/mouldingcheck.php/" method ="POST">
<?php include ("../scm_header.php");?>