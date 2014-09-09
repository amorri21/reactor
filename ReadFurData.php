<?php
include("connect.php");
$sql = "SELECT id, timest, ThermoT, ReactorSV FROM RealData ORDER BY id DESC LIMIT 500";
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
		$thermoT = $row['ThermoT'];
		$reactorsv = $row['ReactorSV'];
		if($thermoT=="") {  $thermoT = 0; }
		if($reactorsv=="") {  $reactorsv = 0; }
		$times = 1000*strtotime($row['timest']);

	      echo 'sinh.push({x: new Date(' . $times . '), y: ' . $thermoT . '});';
		echo "\n";
			echo 'cosh.push({x: new Date(' . $times . '), y: ' . $reactorsv . '});';
		echo "\n";
		$j++;
	}
	$i++;

}
?>