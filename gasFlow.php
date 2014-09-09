<?php
include('curl.php');
include('data.php');
?>
<table id="gasStatus" WIDTH="100%">
		<tr>
<td valign="top" align="center" width="22%">
				<span class="subtitle" style="text-decoration:underline;">Inert [He/N<sub>2</sub>]</span>
				<table>
					<tr>
						<td align="left">
							<div id='status45'></div><input id="GasHN" name="InertOn" type="text" maxlength="4" size="4"/> 
						    <input type="submit" class="submitGas" value="Inert Gas" onClick="javascript:ajax_45_post();"/><br />
							<?php include('ISet.php');?>
						</td>	
					</tr>
					<tr>
						<td align="left" valign="top">
							<span>Flow Rate: </span><span>=</span><span class="value"><?php echo ' ' . $InertR . ' sccm'; ?></span><br />
							<span>Volume: </span><span>=</span><span class="value"><?php if($suminertfr==0){echo ' ' . 0 . ' Liters';} else{echo ' ' . $suminertfr/250 . ' Liters';} ?></span><br />
							<span>Range: </span><span>=</span><span> 0-2000 sccm<span>
						</td>	
					</tr>		
				</table>
			</td>
			<td valign="top" align="center" width="22%">
				<span class="subtitle" style="text-decoration:underline;">Hydrogen</span>
				<table class="verticalLine">
					<tr>
						<td align="left">
							<div id='status44'></div><input id="GasH" name="HOn" type="text" maxlength="4" size="4"/> 
						    <input type="submit" class="submitGas" value="Hydrogen Gas" onClick="javascript:ajax_44_post();"/><br />
							<?php include('HSet.php');?>
						</td>	
					</tr>
					<tr>
					<td align="left" valign="top">
					<span>Flow Rate: </span><span>=</span><span class="value"><?php echo ' ' . $HydrogenR . ' sccm'; ?></span><br />
					<span>Volume: </sub></span><span>=</span><span class="value"><?php if($sumh2fr==0){echo ' ' . 0 . ' Liters';} else{echo ' ' . $sumh2fr/250 . ' Liters';} ?></span><br />
					<span>Range: </span><span>=</span><span> 0-500 sccm<span>
					</td>
					</tr>
				</table>	
			</td>
			<td valign="top" align="center" width="29%">
				<span class="subtitle" style="text-decoration:underline;">Ethylene/Air</span>
				<table  class="verticalLine">
					<tr>
						<td align="left">
							<div id='status46'></div><input id="GasE" name="EthAirOn" type="text" maxlength="4" size="4"/> 
						    <input type="submit" class="submitGas" value="Ethylene/Air" onClick="javascript:ajax_46_post();"/><br />
							<?php include('ESet.php');?>
						</td>	
					</tr>
					<tr>
						<td align="left" valign="top">
							<span>Flow Rate: </span><span>=</span><span class="value"><?php echo ' ' . $EthAirR . ' sccm'; ?></span><br />
							<span>Volume: </span><span>=</span><span class="value"><?php if($sumethfr==0){echo ' ' . 0 . ' Liters';} else{echo ' ' . $sumethfr/250 . ' Liters';} ?></span><br />
							<span>Range: </span><span>=</span><span> 0-200 sccm<span>
						</td>	
					</tr>	
				</table>
			</td>
			<td valign="top" align="left" width="25%">
			<table width="100%" style="float:left;">
					<tr>
						<td class="parameter">
							<span>Sample ID: </span>
						</td>
						<td>

						<input class="sampleid" id="SID" name="Sampleid" type="text" maxlength="8" size="8"/>
						<input type="submit" class="sampleid" value="SampleID" onClick="javascript:ajax_SID_post();"/>
						</td>
					</tr>
					<tr>
						<td class="parameter">
							<span>Reactor Run Time: </span><br />
						</td>
						<td>
						<span class="value" id="para">0</span><span class="value"> Sec</span>
						</td>
					</tr>
					<tr>
						<td class="parameter">
							<span>Date &amp; Time: </span><br />
						</td>
						<td>
						<span class="value"><?php echo date("m-d-y");?></span><span class="value"> <?php echo date("H:i:s");?></span>
						</td>
					</tr>
					<tr>
						<td class="parameter">
							<span>Light Level: </span><br />
						</td>
						<td>
						<span class="value"><?php echo '' . $light . ' '; ?></span>
						</td>
					</tr>
					<tr>
						<td class="parameter">
							<span>Relative Hydrogen: </span><br />
						</td>
						<td>
						<span class="value"><?php echo '' . $hydrogencalc . ' ppm'; ?></span>
						</td>
					</tr>		
					<tr>
						<td class="parameter">
							<span>Ambient Temperature: </span><br />
						</td>
						<td>
						<span class="value"><?php echo '' . $tempc . ' C'; ?></span>
						</td>
					</tr>
					<tr>
						<td class="parameter">
							<span>Furnace Temperature: </span><br />
						</td>
						<td>
						<span class="value"><?php echo '' . $TCtemp . ' C'; ?></span>
						</td>
					</tr>
					<tr>
						<td class="parameter">
							<span>Arduino Temperature: </span><br />
						</td>
						<td>
						<span class="value"><?php echo '' . $Ardtemp . ' C'; ?></span>
						</td>
					</tr>
					<tr>
						<td class="parameter">
							<span>Total Flow Rate: </span><br />
						</td>
						<td>
						<span class="value"><?php echo '' . $HydrogenR + $EthAirR + $InertR . ' sccm'; ?></span>
						</td>
					</tr>
				</table>
			</td>
					</tr>			
	</table>