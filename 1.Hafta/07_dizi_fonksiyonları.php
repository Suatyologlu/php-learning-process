<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Dizi Fonksiyonları</title>
</head>

<body>
	
<?php
	$dizi=array(1,3,"ali",7,9);
	print_r($dizi); //dizi içerisindekileri sırasıyla gösterir
	echo "<hr>";
	
	echo count($dizi);
	echo "<hr>"; //dizi içerisindekileri rakamla gösterir
	
	echo max($dizi);
	echo "<hr>"; //dizi içerisindeki en büyük sayıyı gösterir
	
	echo min($dizi);
	echo "<hr>"; //dizi içerisindeki en kuçük sayıyı gösterir
	
	?>
</body>
</html>