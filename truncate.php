<?php
$PIN = $_POST['truncatePIN'];
if($PIN==4930){
include ('connect.php');
$sql = "TRUNCATE TABLE RealData";
$result = @mysql_query($sql);
        if (!$result) {
                exit('<p>Error performing query: ' . mysql_error() . '</p>');
        }
echo "Database has been truncated";
}
else{
echo "Incorrect PIN; Database failed to truncate";
}
?>