<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
<?php
$ac=fopen("dosya.txt","r","<br>");
if($ac) {
		echo "dosya.txt açıldı";
		}
		else{ echo "dosya açılamadı";
		}
	
	while (!feof($ac)){
		echo fgets($ac);
	}
	fclose($ac);
	?>
</body>
</html>