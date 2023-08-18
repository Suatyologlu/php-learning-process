<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Diziler</title>
</head>

<body>
	<?php
	//diziler birden fazla veri tutar
	$dizi1=array(1,3,5,7); //*dizilerde birinci eleman 0'dan başlar.
	echo $dizi1[1]; 
	echo "<hr>";

	$dizi2=array(1,"ali","murat",5);
	echo $dizi2[1]."<br>";
	echo $dizi2[0];
	echo "<hr>";
	
	$dizi3=array("isim"=>"ahmet","soyisim"=>"aslan");
	echo $dizi3[isim]."<br>";
	echo $dizi3[soyisim];
	echo "<hr>";
	
	$gunler=array("pazartesi","salı","çarşamba");
	echo $gunler[2];
	
	?>
	
</body>
</html>