<script type="text/javascript">
//Start Line Chart
nv.addGraph(function() {
  var chart1 = nv.models.lineChart();

  chart1.xAxis
      .axisLabel('TimeStamp')
//This part is important for the timestamp to show up correctly.
      .tickFormat(function(d) { return d3.time.format('%y%m%d.%H%M')(new Date(d)); });

  chart1.yAxis
      .axisLabel('Temperature (C)')
      .tickFormat(d3.format('.02f'));

  d3.select('#chart1 svg')
      .datum(datA())
    .transition().duration(500)
      .call(chart1);

  nv.utils.windowResize(chart1.update);

  return chart1;
});
function datA() {
  var sinh = [],
      cosh = [];

<?
include("ReadFurData.php");
?>

//  for (var i = 0; i < 100; i++) {
//    sin.push({x: i, y: Math.sin(i/10)});
//    cos.push({x: i, y: .5 * Math.cos(i/10)});
//  }

  return [
 	{
      values: sinh,
      key: 'Furnace - Centigrade',
      color: '#FE0001'
    },
	{
      values: cosh,
      key: 'Set Value - Centigrade',
      color: '#993CF3'
    }
  ];
}
//End Line Chart
</script>
	<style>
	#chart1 svg {
	  height: 400px;
	  width: 97%;
	}
	</style>
	<div id="chart1">
	  <svg></svg>
	</div>