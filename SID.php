<?php
include('ardip.php');
include("pincurl.php");
include("connect.php");
echo $_POST['SID'];
echo $_POST['use'];
$SampleID = $_POST['SID'];
$sql = "INSERT INTO RealData (timest, tempc, tempf, SampleID, H2FR, InertFR, EthFR, LightValue, AmbientT, ThermoT, InternalT, HydrogenPPM, ReactorSV) VALUES ('$isodatetime', '$tempc', '$tempf', '$SampleID', '$HydrogenR', '$InertR', '$EthAirR', '$light', '$tempc', '$TCtemp', '$Ardtemp', '$hydrogen', '$reactorSV')";
        $result = @mysql_query($sql);
        if (!$result) {
                exit('<p>Error performing query: ' . mysql_error() . '</p>');
        }
        mysql_fetch_array($result);
?>