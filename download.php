<?php
include("connect.php");
$ID = $_GET["sampleIDDownload"];
echo $ID;

$filename="filename.csv";
$fp = fopen($filename, "w");

$res = mysql_query("SELECT * FROM RealData WHERE ID>=".$ID."") or die('Query failed!');

// fetch a row and write the column names out to the file
$row = mysql_fetch_assoc($res);
$line = "";
$comma = "";
foreach($row as $name => $value) {
    $line .= $comma . '"' . str_replace('"', '""', $name) . '"';
    $comma = ",";
}
$line .= "\n";
fputs($fp, $line);

// remove the result pointer back to the start
mysql_data_seek($res, 0);

// and loop through the actual data
while($row = mysql_fetch_assoc($res)) {
   
    $line = "";
    $comma = "";
    foreach($row as $value) {
        $line .= $comma . '"' . str_replace('"', '""', $value) . '"';
        $comma = ",";
    }
    $line .= "\n";
    fputs($fp, $line);
   
}

fclose($fp);
header('Content-type: application/octet-stream');
header('Content-Disposition: attachment; filename="filename.csv"');
readfile($filename);

?>