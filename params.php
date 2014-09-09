<?php
include('curl.php');
?>
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