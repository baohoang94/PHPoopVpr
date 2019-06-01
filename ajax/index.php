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
		function ajaxFunction(num) {
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
					document.getElementById('outputRecords').innerHTML = xmlHttp.responseText;
				}
			}
			// b5 gui du lieu den may chu
			xmlHttp.open('GET', 'actiondata.php?q='+num, true);
			xmlHttp.send(null);
		}
	</script>
	Vui long lua chon mau tin hien thi
	<select name="num" onchange="ajaxFunction(this.value)">
		<?php for ($i=1; $i < 9 ; $i++) { ?>
			<option value="<?php echo $i ?>"><?php echo $i ?> mau tin</option>
		<?php } ?>
	</select>
	<hr>
	<span id="outputRecords"></span>
</body>
</html>