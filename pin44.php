<?php 
include("ardip.php");
include("pincurl.php");
include("connect.php");
//echo $_POST['GasH'];
$H2SV = $_POST['GasH'];
$sql = "INSERT INTO RealData (timest, tempc, tempf, H2FR, InertFR, EthFR, H2SV, LightValue, AmbientT, ThermoT, InternalT, HydrogenPPM, ReactorSV) VALUES ('$isodatetime', '$tempc', '$tempf', '$HydrogenR', '$InertR', '$EthAirR', '$H2SV', '$light', '$tempc', '$TCtemp', '$Ardtemp', '$hydrogen', '$reactorSV')";
        $result = @mysql_query($sql);
        if (!$result) {
                exit('<p>Error performing query: ' . mysql_error() . '</p>');
        }
        mysql_fetch_array($result);
$hydro = $_POST['GasH']*0.512;
//$Flow = $_POST['HOn'] * 2.55;
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
post_to_url("http://$ardip/analogWrite/44/$hydro");
?>
