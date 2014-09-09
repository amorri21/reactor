<?php
include("ardip.php");
        // create curl resource
        $ch = curl_init();

        // set url
        curl_setopt($ch, CURLOPT_URL, "http://$ardip/");

        //return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // $output contains the output string
        $output = curl_exec($ch);

        // close curl resource to free up system resources
        curl_close($ch);

//echo $output . '<br><br>';

$out0 = explode("<br />",$output);
#echo 'out0=' . $out0[0] . '<br>';
#$out = array();
for($i=0;$i<=18;$i++) {
        $out0[$i] = explode(" ",$out0[$i]);
        #$out[$i] = $out0[$i][7];
        //echo 'out' . $i . '=' . $out[$i] . '<br>';
}

$HydrogenR = $out0[0][5]*0.48828125;
$EthAirR = $out0[1][2]*0.1953125;
$InertR = $out0[2][2]*1.953125;
$hydrogen = $out0[3][2];
$light = $out0[4][2];
$Ambienttemp = $out0[5][2];
$Ardtemp = $out0[18][3];
$TCtemp = $out0[18][5];
$furnaceValue = $out0[9][2];
if($furnaceValue==0){
$reactorSV == 0;
}
else{
$reactorSV = $furnaceValue;
}
$hydrogencalc = $hydrogen;
$m = 0.15;
$b = -19.61;
$runtime = $_GET['RunTime'];
$tempc = $m * $Ambienttemp + $b;
$tempf = $tempc * 9/5 +32;
//echo date("H:i:s");
if($tempc<1){
}
else{
include("insert.php");
}
?>