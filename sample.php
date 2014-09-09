<?php include("connect.php");
$resultSID = mysql_query('SELECT * FROM RealData WHERE SampleID IS NOT NULL ORDER BY id DESC LIMIT 1'); 
$rowSID = mysql_fetch_assoc($resultSID); 
$SetSID = $rowSID['SampleID'];
$SetID = $rowSID['ID'];
$date = $rowSID['timest'];
if($SetSID=="empty"){
echo ("<span class='value'> No Sample Loaded </span>");
}
else{
echo ("<span class='value'>". " " . $SetSID . " ID: " . $SetID . " | Time: " . $date . "</span>");

}
?>