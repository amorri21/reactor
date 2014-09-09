<?php include("connect.php");
$resultEthSV = mysql_query('SELECT * FROM RealData WHERE EthSV IS NOT NULL ORDER BY id DESC LIMIT 1');
$resultEthFR = mysql_query('SELECT * FROM RealData WHERE EthFR IS NOT NULL ORDER BY id DESC LIMIT 1'); 
$rowEthSV = mysql_fetch_assoc($resultEthSV); 
$rowEthFR = mysql_fetch_assoc($resultEthFR);
$SetE = $rowEthSV['EthSV'];
$Ethfr = $rowEthFR['EthFR'];
?>
<script type="text/javascript">
//Start Bullet Chart
nv.addGraph(function() {  
  var charte = nv.models.bulletChart();

  d3.select('#chartE svg')
      .datum(exampleDatae())
    .transition().duration(1000)
      .call(charte);

  return charte;
});
function exampleDatae() {
  return {"title":"E Gas","subtitle":"sccm","ranges":[50,100,200],"measures":["<?php echo $Ethfr;?>"],"markers":["<?php echo $SetE;?>"]};
}
//End Bullet Chart
</script>
<!--Bullet Chart-->
	<style>
	#chartE svg {
	  height: 60px;
	  width: 350px;
	}
	</style>
	<div id="chartE">
	  <svg></svg>
	</div>
<!--Bullet Chart-->