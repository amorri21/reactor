    <script type="text/javascript">
        var check = null;

        function printDuration() {
            if (check == null) {
                var cnt = 0;

                check = setInterval(function () {
                    cnt += 1;
                    document.getElementById("para").innerHTML = cnt;
					$('#start').load('curl.php?randval='+ Math.random());
                }, 1000);
            }
        }

        function stop() {
            clearInterval(check);
            check = null;
            document.getElementById("para").innerHTML = '0';
        }
    </script>

	<script>$(document).click(function()
{
   //curl.php is called every 10 seconds to update MySQL database
   var refreshId = setInterval(function()
   {
     $('#start').load('curl.php?randval='+ Math.random());
   }, 1000);

   //stop the clock when this button is clicked
   $("#stop").click(function()
   {
     clearInterval(refreshId);
   });
});
</script>