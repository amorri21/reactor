#!/usr/bin/php5
<?php
include("connect.php");
$shutdownTS = mysql_query('SELECT * FROM RealData WHERE shutdown IS NOT NULL ORDER BY id DESC LIMIT 1'); 
$rowshutdownTS = mysql_fetch_assoc($shutdownTS);  
$shutdownTS = $rowshutdownTS['shutdown'];
if (is_null($shutdownTS)) {
echo "Do Nothing";
} else {
$isodatetime = date("Y-m-d H:i:s");
if ($isodatetime >= $shutdownTS) {
include("ardip.php");
$FurSet=0;
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
post_to_url("http://$ardip/analogWrite/7/$FurSet");
mysql_query('UPDATE RealData SET shutdown = NULL');
include("txt.php");
} else {
echo "Shutdown time is larger than current time";
} }
?>
