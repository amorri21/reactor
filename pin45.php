<?php
include('ardip.php');
include("pincurl.php");
include("connect.php");
//echo $_POST['GasHN'];
$InertSV = $_POST['GasHN'];
$sql = "INSERT INTO RealData (timest, tempc, tempf, H2FR, InertFR, EthFR, InertSV, LightValue, AmbientT, ThermoT, InternalT, HydrogenPPM, ReactorSV) VALUES ('$isodatetime', '$tempc', '$tempf', '$HydrogenR', '$InertR', '$EthAirR', '$InertSV', '$light', '$tempc', '$TCtemp', '$Ardtemp', '$hydrogen', '$reactorSV')";
        $result = @mysql_query($sql);
        if (!$result) {
                exit('<p>Error performing query: ' . mysql_error() . '</p>');
        }
        mysql_fetch_array($result);
$Inert = $_POST['GasHN']*0.128;
function post_to_url($url) {
   $fields = '';
   foreach($data as $key => $value) { 
      $fields .= $key . '=' . $value . '&'; 
   }
   $post = curl_init();

   curl_setopt($post, CURLOPT_URL, $url);
   curl_setopt($post, CURLOPT_POST, count($data));
   curl_setopt($post, CURLOPT_POSTFIELDS, $fields);
   curl_setopt($post, CURLOPT_RETURNTRANSFER, 1);

   $result = curl_exec($post);

   curl_close($post);
}
post_to_url("http://$ardip/analogWrite/45/$Inert");
?>
