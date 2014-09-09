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
$out0 = explode("<br />",$output);
for($i=0;$i<=18;$i++) {
        $out0[$i] = explode(" ",$out0[$i]);
}
$TCtemp = $out0[18][5];
echo $TCtemp;
$CONTROL = $TCtemp * 3.1372549;


function post_to_url($url, $data) {
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
post_to_url("http://$ardip/analogWrite/7/$CONTROL");
?>