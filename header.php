<html lang="en">
<head>
	<script language="JavaScript" type="text/javascript">
		function ajax_7_post(){
		    // Create our XMLHttpRequest object
		    var hr = new XMLHttpRequest();
		    // Create some variables we need to send to our PHP file
		    var url = "pin7.php";
		    var CT = document.getElementById("set_point").value;
		    var vars = "set_point="+CT;
		    hr.open("POST", url, true);
		    // Set content type header information for sending url encoded variables in the request
		    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		    // Access the onreadystatechange event for the XMLHttpRequest object
		    hr.onreadystatechange = function() {
			    if(hr.readyState == 4 && hr.status == 200) {
				    var return_data = hr.responseText;
					document.getElementById("status7").innerHTML = return_data;
			    }
		    }
		    // Send the data to PHP now... and wait for response to update the status div
		    hr.send(vars); // Actually execute the request
		    document.getElementById("status7").innerHTML = "processing...";
		}
	function ajax_44_post(){
	            // Create our XMLHttpRequest object
	            var hr = new XMLHttpRequest();
	            // Create some variables we need to send to our PHP file
	            var url = "pin44.php";
	            var CT = document.getElementById("GasH").value;
	            var vars = "GasH="+CT;
	            hr.open("POST", url, true);
	            // Set content type header information for sending url encoded variables in the request
	            hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	            // Access the onreadystatechange event for the XMLHttpRequest object
	            hr.onreadystatechange = function() {
	                    if(hr.readyState == 4 && hr.status == 200) {
	                            var return_data = hr.responseText;
	                                document.getElementById("status44").innerHTML = return_data;
	                    }
	            }
	            // Send the data to PHP now... and wait for response to update the status div
	            hr.send(vars); // Actually execute the request
	            document.getElementById("status44").innerHTML = "processing...";
	        }
	function ajax_45_post(){
	            // Create our XMLHttpRequest object
	            var hr = new XMLHttpRequest();
	            // Create some variables we need to send to our PHP file
	            var url = "pin45.php";
	            var CT = document.getElementById("GasHN").value;
	            var vars = "GasHN="+CT;
	            hr.open("POST", url, true);
	            // Set content type header information for sending url encoded variables in the request
	            hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	            // Access the onreadystatechange event for the XMLHttpRequest object
	            hr.onreadystatechange = function() {
	                    if(hr.readyState == 4 && hr.status == 200) {
	                            var return_data = hr.responseText;
	                                document.getElementById("status45").innerHTML = return_data;
	                    }
	            }
	            // Send the data to PHP now... and wait for response to update the status div
	            hr.send(vars); // Actually execute the request
	            document.getElementById("status45").innerHTML = "processing...";
	        }
	function ajax_46_post(){
		    // Create our XMLHttpRequest object
		    var hr = new XMLHttpRequest();
		    // Create some variables we need to send to our PHP file
		    var url = "pin46.php";
		    var CT = document.getElementById("GasE").value;
		    var vars = "GasE="+CT;
		    hr.open("POST", url, true);
		    // Set content type header information for sending url encoded variables in the request
		    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		    // Access the onreadystatechange event for the XMLHttpRequest object
		    hr.onreadystatechange = function() {
			    if(hr.readyState == 4 && hr.status == 200) {
				    var return_data = hr.responseText;
					document.getElementById("status46").innerHTML = return_data;
			    }
		    }
		    // Send the data to PHP now... and wait for response to update the status div
		    hr.send(vars); // Actually execute the request
		    document.getElementById("status46").innerHTML = "processing...";
		}
	function ajax_SID_post(){
		    // Create our XMLHttpRequest object
		    var hr = new XMLHttpRequest();
		    // Create some variables we need to send to our PHP file
		    var url = "SID.php";
		    var CT = document.getElementById("SID").value;
		    var vars = "SID="+CT;
		    hr.open("POST", url, true);
		    // Set content type header information for sending url encoded variables in the request
		    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		    // Access the onreadystatechange event for the XMLHttpRequest object
		    hr.onreadystatechange = function() {
			    if(hr.readyState == 4 && hr.status == 200) {
				    var return_data = hr.responseText;
					document.getElementById("statusSID").innerHTML = return_data;
			    }
		    }
		    // Send the data to PHP now... and wait for response to update the status div
		    hr.send(vars); // Actually execute the request
		    document.getElementById("statusSID").innerHTML = "processing...";
		}
	function ajax_Trun_post(){
		    // Create our XMLHttpRequest object
		    var hr = new XMLHttpRequest();
		    // Create some variables we need to send to our PHP file
		    var url = "truncate.php";
		    var CT = document.getElementById("truncatePIN").value;
		    var vars = "truncatePIN="+CT;
		    hr.open("POST", url, true);
		    // Set content type header information for sending url encoded variables in the request
		    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		    // Access the onreadystatechange event for the XMLHttpRequest object
		    hr.onreadystatechange = function() {
			    if(hr.readyState == 4 && hr.status == 200) {
				    var return_data = hr.responseText;
					document.getElementById("statusTrun").innerHTML = return_data;
			    }
		    }
		    // Send the data to PHP now... and wait for response to update the status div
		    hr.send(vars); // Actually execute the request
		    document.getElementById("statusTrun").innerHTML = "processing...";
		}
	function ajax_Shutdown_post(){
		    // Create our XMLHttpRequest object
		    var hr = new XMLHttpRequest();
		    // Create some variables we need to send to our PHP file
		    var url = "shutdown.php";
		    var CT = document.getElementById("TimeShutdown").value;
		    var vars = "TimeShutdown="+CT;
		    hr.open("POST", url, true);
		    // Set content type header information for sending url encoded variables in the request
		    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		    // Access the onreadystatechange event for the XMLHttpRequest object
		    hr.onreadystatechange = function() {
			    if(hr.readyState == 4 && hr.status == 200) {
				    var return_data = hr.responseText;
					document.getElementById("statusShutdown").innerHTML = return_data;
			    }
		    }
		    // Send the data to PHP now... and wait for response to update the status div
		    hr.send(vars); // Actually execute the request
		    document.getElementById("statusShutdown").innerHTML = "processing...";
		}
		</script>
		
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script> 
<!-- <script> 
var auto_refresh = setInterval(
function()
{
$('#curl').load('curl.php?randval='+ Math.random());
}, 15000);
</script>

<script> 
var auto_refresh = setInterval(
function()
{
$('#tempfurchart').load('tempfurplot.php?randval='+ Math.random());
}, 30000);
</script>

<script> 
var auto_refresh = setInterval(
function()
{
$('#tempchart').load('tempplot.php?randval='+ Math.random());
}, 30000);
</script>

<script> 
var auto_refresh = setInterval(
function()
{
$('#gas').load('gasFlow.php?randval='+ Math.random());
}, 30000);
</script>

<script> 
var auto_refresh = setInterval(
function()
{
$('#sID').load('sample.php?randval='+ Math.random());
}, 30000);
</script>

<script> 
var auto_refresh = setInterval(
function()
{
$('#params').load('params.php?randval='+ Math.random());
}, 30000);
</script> -->

	<title>Reactor Control Center - HG</title>
	<meta name="author" content="Allen  Morris">
	<meta http-equiv="refresh" content="75">
	<link href="callstyles.css" rel="stylesheet" type="text/css">
	<link href="src/nv.d3.css" rel="stylesheet" type="text/css">
</head>	
<body  class="background">
	<div align="center">
		<span class="mainTitle">Holles Group Reactor Control - ReactDuino0</span>
	</div>
