<?php 
echo $_POST['setPoint'] / 3.1372549;
$CONTROL = $_POST['setPoint'] / 3.1372549;
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
post_to_url("http://10.2.202.156/analogWrite/6/$CONTROL");
?>