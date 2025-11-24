<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
    .w-450{
    width: 450px;
  }
  .vh-100{
    min-height: 100vh;
  }
</style>
<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
   
    <form class="shadow w-450 p-3" action="login.php" method="post">
        <h2 class=" display-5 fs-1 ">Login</h2><br>
        <?php if (isset($_GET['error'])){?>
        <div class="alert alert-danger" role="alert">
  <?php echo $_GET['error'];?>
</div>
<?php
        }
        ?>



 

  <div class="mb-3">
    <label for="form-label">Username</label>
    <input type="text" class="form-control" name="uname" value=" <?php echo( isset($_GET['uname']))? $_GET['uname']:""?>"> 
  </div>

  <div class="mb-3">
    <label for="form-label">Password</label>
    <input type="password" class="form-control" name="pass" >
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
  <a href="login.php" class="link-secondary">Sign Up</a>
</form>
    </div>
    
<!-- Code injected by live-server -->
<script>
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
</script>
</body>
</html>