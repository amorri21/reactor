<?php
include("pincurl.php");
$hrs = $_POST['TimeShutdown'];
$hrsec = $hrs*60*60;
$time = $hrsec;
//sleep(3);
//time_sleep_until(microtime(true)+5);
//echo $time;
$isodatetime = date("Y-m-d H:i:s");
$timesec = date("Y-m-d H:i:s", strtotime($isodatetime)+$time);
//$time = add(new DateInterval('PT'.$time.'H'));


include("connect.php");

	$isodatetime = date("Y-m-d H:i:s");

        $sql = "INSERT INTO RealData (timest, tempc, tempf, H2FR, InertFR, EthFR, LightValue, AmbientT, ThermoT, InternalT, HydrogenPPM, ReactorSV, RunTime, shutdown) VALUES ('$isodatetime', '$tempc', '$tempf', '$HydrogenR', '$InertR', '$EthAirR', '$light', '$tempc', '$TCtemp', '$Ardtemp', '$hydrogen', '$reactorSV', '$runtime', '$timesec')";
        $result = @mysql_query($sql);
        if (!$result) {
                exit('<p>Error performing query: ' . mysql_error() . '</p>');
        }
        mysql_fetch_array($result);
?>

