<?php include("connect.php");
$resultInertSV = mysql_query('SELECT * FROM RealData WHERE InertSV IS NOT NULL ORDER BY id DESC LIMIT 1'); 
$resultInertFR = mysql_query('SELECT * FROM RealData WHERE InertFR IS NOT NULL ORDER BY id DESC LIMIT 1'); 
$rowInertSV = mysql_fetch_assoc($resultInertSV);
$rowInertFR = mysql_fetch_assoc($resultInertFR);  
$SetI = $rowInertSV['InertSV'];
$Inertfr = $rowInertFR['InertFR'];
?>
<script type="text/javascript">
//Start Bullet Chart
nv.addGraph(function() {  
  var charti = nv.models.bulletChart();

  d3.select('#chartI svg')
      .datum(exampleDatai())
    .transition().duration(1000)
      .call(charti);

  return charti;
});
function exampleDatai() {
  return {"title":"I Gas","subtitle":"sccm","ranges":[500,1000,2000],"measures":["<?php echo $Inertfr;?>"],"markers":["<?php echo $SetI;?>"]};
}
//End Bullet Chart
</script>
<!--Bullet Chart-->
	<style>
	#chartI svg {
	  height: 60px;
	  width: 335px;
	}
	</style>
	<div id="chartI">
	  <svg></svg>
	</div>
<!--Bullet Chart-->

