<!DOCTYPE html>
<html>
<head>
<title>Temperature Converter</title>
</head>
<body>
<h1>Temperature Converter</h1><br><br>
<h3>Enter the temperature in the box and select its type...</h3>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
<input type="number" name="temperature">
<input type="radio" name="units" value="C">Celcius
<input type="radio" name="units" value="F">Farenheit <br><br>
<input type="submit" name="submit" value="CONVERT"><br><br>
</form>
<?php
if(isset($_POST['submit']))
{
$temperature=$_POST['temperature'];
$units=$_POST['units'];
if($units=="C")
{
$result=$temperature*9/5+32;
echo "$temperature degree Celcius = " .$result . " degree Farenheit";
}
else
{
$result=($temperature-32)*5/9;
echo "$temperature degree Farenheit = " .$result . " degree Celcius";
}
}
?>
<!-- Code injected by live-server -->
<script type="text/javascript">
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script></body>
</html>