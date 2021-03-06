<?php
include('header.php');
include('curl.php');
include('data.php');
include('ChromePhp.php');
ChromePhp::log('Hello console!');
?>
<script src="lib/d3.v2.js"></script>
<script src="nv.d3.js"></script>
<script type="text/javascript">
        var check = null;

        function reactorLogging() {
            if (check == null) {
                var cnt = 0;

                check = setInterval(function () {
                    cnt += 5;
                    document.getElementById("para").innerHTML = cnt;
					$('#btnStart').load('curl.php?RunTime='+ cnt);
                }, 5000);
            }
        }

        function stop() {
            clearInterval(check);
            check = null;
            document.getElementById("para").innerHTML = cnt;
        }
 
/* $(document).ready(function()
{
   //ardtemp.php is called every second to get temp from thermocouple
   var refreshId = setInterval(function()
   {
     $('#timeval').load('ardtemp.php?randval='+ Math.random());
   }, 2000);

   //stop the clock when this button is clicked
   $("#stop").click(function()
   {
     clearInterval(refreshId);
   });
}); */
</script>
<div align="center" id="timeval"></div>
<br />
<div id="GasStatus">
	<table id="titletop" BORDER="1" CELLPADDING="1" CELLSPACING="1" WIDTH="100%">
		<tr>
			<td align="center" width="75%">
				<span class="sectionTitle">Gas Control and Monitoring</span>
			</td>
			<td align="center" width="25%">
				<span class="sectionTitle">System/Environment Snapshot</span>
			</td>	
		</tr>			
	</table>
	
		<div id="gas"><?php include("gasFlow.php");?></div>
</div>
<br />
<div id="FurnaceCamera">
	<table id="titletop" BORDER="1" CELLPADDING="1" CELLSPACING="1" WIDTH="100%">
		<tr>
			<td align="center" width="50%">
				<span class="sectionTitle">Furnace</span>
			</td>
			<td align="center" width="50%">
				<span class="sectionTitle">Temperature Plots</span>
			</td>	
		</tr>			
	</table>
	<table width="100%">
		<tr>
			<td width="50%">
			<input id="set_point" name="setPoint" type="text" /> 
			<input type="submit" class="submitFurnace" value="SetPoint" onClick="javascript:ajax_7_post();"/>
    <div id='status7'>
	</div>
	<div id="tempfurchart">
			<!--line Chart-->	
	<?php include("tempfurplot.php"); ?>
			</div>
<!--line Chart-->
	</td>
    
			<td width="50%" align="left">
			<div id="tempchart">
			<!--line Chart-->	
	<?php include("tempplot.php"); ?>
			</div>
<!--line Chart-->
			</td>
		</tr>
	</table>
</div>
<br />
<br />
<br />
<div id="NotesTwitter-ReactorDownload">
	<table id="titletop" BORDER="1" CELLPADDING="1" CELLSPACING="1" WIDTH="100%">
		<tr>
			<td align="center" width="50%">
				<span class="sectionTitle">Twitter</span>
			</td>
			<td align="center" width="50%">
				<span class="sectionTitle">Calibrations/Notes/Reactor Start/Stop - Data Download</span>
			</td>	
		</tr>			
	</table>
	<table width="100%">
		<tr>
			<td width="50%">
			<br />
			
			</td>
			<td width="50%" align="left" valign="top">
			<br />
				<input class="submitStart" id="btnStart" type="button" value="Start" onclick="reactorLogging();" />
				<input class="submitStop" id="btnStop" type="button" value="Stop" onclick="stop();" />
				<br />
				<br />
				<form action="download.php" method="get">
				<input name="sampleIDDownload" type="text" maxlength="8" size="8"/>
				<input class="submitDownload" id="download" type="submit" value="Download Data"/>
				</form>
				<br />
				<input id="truncatePIN" name="TruncateTable" type="text" maxlength="8" size="8"/>
				<input class="submitTrun" id="truncate" type="submit" value="Truncate Database" onClick="javascript:ajax_Trun_post();"/> -- PIN Required.<br /><div id="statusTrun"></div>
				<br />

				<!--<select id="TimeShutdown" name="hours">
					<option value="1">1 Hr</option>
					<option value="2">2 Hr</option>
					<option value="3">3 Hr</option>
					<option value="4">4 Hr</option>
					<option value="5">5 Hr</option>
					<option value="6">6 Hr</option>
					<option value="7">7 Hr</option>
					<option value="8">8 Hr</option>
				</select>-->
<span>Enter time in hours.</span><br />
<input id="TimeShutdown" name="shut" type="text" maxlength="4" size="4"/>
				<input class="submitShut" id=shutdown" type="submit" value="Run Length" onClick="javascript:ajax_Shutdown_post();" /><br /><div id="statusShutdown"></div>

				<br />
				<br />
			Sample in Reactor: <div id="sID"><?php include("sample.php");?></div><br />
			Max Temperature: 600C <br />
			Reactor Temperature Fluctates between +/- 3 Centigrade of the Setpoint<br />
			Total flows for Reactivity should be 750 sccm<br />
			</td>
		</tr>
	</table>
</div>
<br />
<br />
<br />
<?php
include('footer.php');
?>
