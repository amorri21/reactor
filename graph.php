<?php
include("phpgraphlib.php");
$graph=new PHPGraphlib(550,350);
//$link = mysql_connect('localhost', 'root', 'paulosborn')or die('Could not connect: ' . mysql_error());

//mysql_select_db('temperature') or die('Could not select database');

$dataArray=array();

//get data from database
$sql="SELECT //thisneedshelp";
$result = mysql_query($sql) or die('Query failed: ' . mysql_error());
if ($result) {
  while ($row = mysql_fetch_assoc($result)) {
      $timest=$row["timest"];
      $tempf=$row["tempf"];
      //add to data areray
      $dataArray[$timest]=$tempf;
}
}

//configure graph
$graph->addData($dataArray);
$graph->setTitle("Temperature");
$graph->setGradient("lime", "green");
$graph->setBars(false);
$graph->setLine(true);
$graph->setDataPoints(true);
$graph->setDataPointColor('maroon');
$graph->setDataValues(true);
$graph->setDataValueColor('maroon');
$graph->setGoalLine(.0025);
$graph->setGoalLineColor('red');
$graph->createGraph();
?>
