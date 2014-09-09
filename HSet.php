<?php include("connect.php");
$resulth2SV = mysql_query('SELECT * FROM RealData WHERE H2SV IS NOT NULL ORDER BY id DESC LIMIT 1');
$flowH2fr = mysql_query('SELECT * FROM RealData WHERE H2FR IS NOT NULL ORDER BY id DESC LIMIT 1'); 
$rowh2sv = mysql_fetch_assoc($resulth2SV); 
$rowh2fr = mysql_fetch_assoc($flowH2fr);
$SetH2 = $rowh2sv['H2SV'];
$H2fr = $rowh2fr['H2FR'];
?>
<script type="text/javascript">
//Start Bullet Chart
nv.addGraph(function() {  
  var charth = nv.models.bulletChart();

  d3.select('#chartH svg')
      .datum(exampleDatah())
    .transition().duration(1000)
      .call(charth);

  return charth;
});
var HFlow = "<?= $H2fr ?>";
function exampleDatah() {
  return {"title":"H Gas","subtitle":"sccm","ranges":[100,250,500],"measures":["<?php echo $H2fr;?>"],"markers":["<?php echo $SetH2;?>"]};
}
//End Bullet Chart
</script>
<!--Bullet Chart-->
	<style>
	#chartH svg {
	  height: 60px;
	  width: 350px;
	}
	</style>
	<div id="chartH">
	  <svg></svg>
	</div>
<!--Bullet Chart-->