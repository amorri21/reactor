<?php
include("connect.php");
$sql = "SELECT id, timest, AmbientT, InternalT FROM RealData ORDER BY id DESC LIMIT 2500";
$result = @mysql_query($sql);
if (!$result) {
        exit('<p>Error performing query: ' . mysql_error() . '</p>');
}
# mysql_fetch_array($result);

$moda=1;
$i=0;
$j=0;
while ($row = mysql_fetch_array($result)) {
?>
<?
	if($i%$moda==0) {
		$ambientT = $row['AmbientT'];
		$internalT = $row['InternalT'];
		if($ambientT=="") {  $ambientT = 0; }
		if($internalT=="") {  $internalT = 0; }
		$times = 1000*strtotime($row['timest']);

			echo 'sin.push({x: new Date(' . $times . '), y: ' . $ambientT . '});';
		echo "\n";
			echo 'tan.push({x: new Date(' . $times . '), y: ' . $internalT . '});';
		echo "\n";
		$j++;
	}
	$i++;

}
?>