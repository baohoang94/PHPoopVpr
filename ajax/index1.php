<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ajax</title>
</head>
<body>
	<img src="ajax.JPG" alt="">
	<hr>
	<script>
		function ajaxFunction(str) {
			// B1. khoi tao doi tuong XMLHttpRequest
			var xmlHttp;
			// Kiem tra cac trinh duyet ie7, firefox, opera, sarafi co ho tro ajax hay ko
			if (window.XMLHttpRequest) {
				xmlHttp = new XMLHttpRequest();
			} else /*ie6,ie5*/ {
				xmlHttp = new ActiveXObject('Microsoft.XMLHTTP');
			}
			// B2. tiep nhan du lieu tra ve tu may chu
			xmlHttp.onreadystatechange = function() {
				// B3. kiem tra trang thai
				if (xmlHttp.readyState == 4) {
					document.getElementById('outputTxt').innerHTML = xmlHttp.responseText;
				}
			}
			// b5 gui du lieu den may chu
			xmlHttp.open('GET', 'actionpara.php?q='+str, true);
			xmlHttp.send(null);
		}
	</script>
	Vui long nhap ky tu bat ky
	<input type="text" name="txt" onkeyup="ajaxFunction(this.value)" value=""> <span id="outputTxt"></span>
</body>
</html>