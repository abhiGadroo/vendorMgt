<?php include "../default_header.php";?>
<center> <h4> Harness Score Sheet</h4></center>

<form id = "csvdform" action="/scores/harnesscheck.php/" method ="POST">
<div class="container" style= "<?php echo ($type == 'VD')?'display:block':'display:none';?>"> 
  <h2>Vendor Development</h2>
  <p>In this section we try to check if the vendor have right infra available at his site</p>
  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Infrastructure</button>
  <div id="demo" class="collapse">
    <table>
	<h3>Capacity Mapping</h3>
  <tr><td>Kodera </td><td><input type="text" name="cm1" required> </td></tr>
  <tr><td>Komera</td> <td><input type="text" name="cm2" required></td> </tr>
  <tr><td>Kappa (cutting, crimping, stripping)</td><td><input type="text" name="cm3" required></td> </tr>
  <tr><td>Crimping validation tool</td><td><input type="text" name="cm4" required></td> </tr>
  <tr><td>Functional testing </td><td><input type="text" name="cm5" required></td> </tr>
	</table>
	<table><h3>Capability Mapping</h3>
	<tr><td>Verify skill matrix of the operator to check if he has performed similar task in the past.</td><td><input type="text" name="cm6" required ></td> </tr>

  </table>
  </div>
  <button type="button" name= "btn_vd " class="btn btn-info" data-toggle="collapse" data-target="#demo1">Design & Development</button>
  <div id="demo1" class="collapse">
    <table>
  <tr><td>An experienced team in Design and Development to check the feasibility of the drawings and follow APQP process  </td><td><input type="text" name="dd1" required> </td></tr>
  <tr><td>Right set of softwares to help in checking the feasibility of the drawing (if applicable)</td> <td><input type="text" name="dd2" required></td> </tr>
  </table>
	</div>
	 <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo2">Cost</button>
  <div id="demo2" class="collapse">
    <table><br>
  <tr><td>At what price is the product being offered by the vendor do analysis based on the costing norms set by GOR mark up analysis) and as per industry norms also
</td><td><input type="text" name="c1"> </td></tr>
  </table>
	</div>
	 <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo3">Size of the Org</button>
  <div id="demo3" class="collapse">
    <table><br>
  <tr><td>The organisation should be financially sound and keen to work for GOR </td><td><input type="text" name="soto1" required> </td></tr>
  </table>
	</div>
	<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo4">Quality Systems</button>
  <div id="demo4" class="collapse">
    <table><br>
  <tr><td>Which quality system does the vendor follow , Systems and Procedures  </td><td><input type="text" name="qs1" required> </td></tr>
  <tr><td>RCA of the defects generated during production and also reported by the existing clients and traceability identification of the Lot </td><td><input type="text" name="qs2" required> </td></tr>
  <tr><td>Incoming / Outgoing material check sheets , Internal audits for FIFO</td><td><input type="text" name="qs3" required> </td></tr>
  </table>
	</div>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo5">CCRS</button>
  <div id="demo5" class="collapse">
    <table><br>
  <tr><td>A dedicated team that handles customer complaints and resolution time to resolve the issues reported by the cleint</td><td><input type="text" name="ccrs1" required> </td></tr>
  </table>
	</div>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo6">Processes</button>
  <div id="demo6" class="collapse">
    <table><br>
  <tr><td>Complete flow chart for manufacturing processes (specially for GOR required processses)</td><td><input type="text" name="p1" required> </td></tr>
  <tr><td>Testing facility - Inhouse /Out-sourced - records for the same to be checked for the current clients</td><td><input type="text" name="p2" required> </td></tr>
  </table>
	</div>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo7">Logistics Facility</button>
  <div id="demo7" class="collapse">
    <table><br>
  <tr><td>Schedule Management , Logistic facility available is inhouse/outsourced </td><td><input type="text" name="lf1" required> </td></tr>
  </table>
	</div>
<input type="Submit" name = "submit"/>	</div></form>

<form id = "csvdform" action="/scores/harnesscheck.php/" method ="POST">
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
  <tr><td>Special focus on casting finish , dimensional accuracy , mechanical properties (hardness , tensile & impact test) , chemical comp for any of the existing parts vendor is manufacturing and is in running production</td> <td><input type="text" name="apf2" required></td> </tr>
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
	<input type ="submit" name="submit"/>

	</form></div>
<form id = "csvdform" action="/scores/harnesscheck.php/" method ="POST">
<div class="container"style= "<?php echo ($type == 'SCM')?'display:block':'display:none';?>">
  <h2>SCM Prespective</h2>
<p>In this section we try to evaluate if the vendor will be able to deliver the right product to us at the right time.</p>
  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demoxx">General</button>
  <div id="demoxx" class="collapse">
    <table>
  <tr><td>Possible Transit time for material from Domestic Vendor? </td><td><input type="text" name="gen1" required> </td></tr>
  <tr><td>Whether vendor is having Raw Material Test Certificates ? </td><td><input type="text" name="gen2" required> </td></tr>
  <tr><td>Does Vendor has Vendor selection process of their vendors ?</td><td><input type="text" name="gen3" required> </td></tr>
  <tr><td>Total No. of Major OEM Clients ? </td><td><input type="text" name="gen4" required> </td></tr>
  <tr><td>Does Vedor has any record of PPC in plant from last 6 months</td><td><input type="text" name="gen5" required> </td></tr>
  <tr><td>Does Vendor has any ERP Process ? </td><td><input type="text" name="gen6" required> </td></tr>
  <tr><td>Does Vendor keeping record of customer's feedback ? If, Yes then any action on those feedbacks ? </td><td><input type="text" name="gen7" required> </td></tr>
  <tr><td>What is the mode of communication from top management to shop floor employee ?</td><td><input type="text" name="gen8" required> </td></tr>
  <tr><td>What is the turnover in last financial year ?</td><td><input type="text" name="gen9" required> </td></tr>
  <tr><td>Is Vendor Using FIFO for his Raw Material inventory ? </td><td><input type="text" name="gen10" required> </td></tr>
  <tr><td>Is vendor using standard packing of material ?</td><td><input type="text" name="gen11" required> </td></tr>
  <tr><td>Does vendor have Skill matrix of his shop floor employees ?</td><td><input type="text" name="gen12" required> </td></tr>
  <tr><td>Does Vendor has defined place for RM, FG, SFG or Rejected Material ?</td><td><input type="text" name="gen13" required> </td></tr>
  <tr><td>Does vendor has defined process for Internal rejected material ?</td><td><input type="text" name="gen14" required> </td></tr>
  <tr><td>Does Vendor provide prompt and technical assistance to his customer, which helps in price reduction or quality improvement or lead time reduction ?</td><td><input type="text" name="gen15" required> </td></tr>
  <tr><td>Does Vendor has defined process for handling customer complaints ?</td><td><input type="text" name="gen16" required> </td></tr>
  <tr><td>Does Vendor has any process for handling ECN ?</td><td><input type="text" name="gen17" required> </td></tr>
  <tr><td>Does Vendor has defined subcontracting process ?</td><td><input type="text" name="gen18" required> </td></tr>
  <tr><td>Does Vendor has capability to increase the shifts ?</td><td><input type="text" name="gen19" required> </td></tr>
  <tr><td>Does Vendor put identification on parts before dispatching ?</td><td><input type="text" name="gen20" required> </td></tr>
  <tr><td>Does vendor has defined SOP or Work Instructions ?</td><td><input type="text" name="gen21" required> </td></tr>
  </table>

  </div><input type ="submit" name="submit">
  </div>
  </form>


