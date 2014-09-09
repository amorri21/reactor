<script type="text/javascript">
//Start Line Chart
nv.addGraph(function() {
  var chart = nv.models.lineChart();

  chart.xAxis
      .axisLabel('TimeStamp')
//This part is important for the timestamp to show up correctly.
      .tickFormat(function(d) { return d3.time.format('%y%m%d.%H%M')(new Date(d)); });

  chart.yAxis
      .axisLabel('Temperature (C)')
      .tickFormat(d3.format('.02f'));

  d3.select('#chart svg')
      .datum(data())
    .transition().duration(500)
      .call(chart);

  nv.utils.windowResize(chart.update);

  return chart;
});
function data() {
  var sin = [],
	  tan = [];

<?
include("readdata.php");
?>

//  for (var i = 0; i < 100; i++) {
//    sin.push({x: i, y: Math.sin(i/10)});
//    cos.push({x: i, y: .5 * Math.cos(i/10)});
//  }

  return [
    {
      values: sin,
      key: 'Ambient - Centigrade',
      color: '#ff7f0e'
    },
    {
      values: tan,
      key: 'Internal - Centigrade',
      color: '#2ca02c'
    }
  ];
}
//End Line Chart
</script>
	<style>
	#chart svg {
	  height: 400px;
	  width: 97%;
	}
	</style>
	<div id="chart">
	  <svg></svg>
	</div>
