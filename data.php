<?php
include("connect.php");

$resulth2fr = mysql_query('SELECT SUM(H2FR) AS value_h2fr FROM RealData WHERE H2FR>0'); 
$rowh2fr = mysql_fetch_assoc($resulth2fr); 
$sumh2fr = $rowh2fr['value_h2fr'];
$resultinertfr = mysql_query('SELECT SUM(InertFR) AS value_inertfr FROM RealData WHERE InertFR>0'); 
$rowinertfr = mysql_fetch_assoc($resultinertfr); 
$suminertfr = $rowinertfr['value_inertfr'];
$resultethfr = mysql_query('SELECT SUM(EthFR) AS value_ethfr FROM RealData WHERE EthFR>0'); 
$rowethfr = mysql_fetch_assoc($resultethfr); 
$sumethfr = $rowethfr['value_ethfr'];
?>
