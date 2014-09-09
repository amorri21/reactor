<?php
include("connect.php");

	$isodatetime = date("Y-m-d H:i:s");

        $sql = "INSERT INTO RealData (timest, tempc, tempf, H2FR, InertFR, EthFR, LightValue, AmbientT, ThermoT, InternalT, HydrogenPPM, ReactorSV, RunTime) VALUES ('$isodatetime', '$tempc', '$tempf', '$HydrogenR', '$InertR', '$EthAirR', '$light', '$tempc', '$TCtemp', '$Ardtemp', '$hydrogen', '$reactorSV', '$runtime')";
        $result = @mysql_query($sql);
        if (!$result) {
                exit('<p>Error performing query: ' . mysql_error() . '</p>');
        }
        mysql_fetch_array($result);
?>