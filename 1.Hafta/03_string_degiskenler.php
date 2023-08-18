<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>String Ve Değişkenler</title>
</head>

<body>
	<?php
	
	echo "merhaba türkiye <br/>";
	echo "merhaba türkiye <br/>";
	echo "merhaba türkiye <br/>";
	echo "<hr>";
	
	$metin="Merhaba TÜRKİYE";
	echo $metin."<br>";
	echo $metin."<br>";
	echo $metin."<br>";
	echo "<hr>";
												/*Stringler*/
	echo strtoupper($metin)."<br>"; 		/*metnin bütün Harfleri Büyük Yazdırır*/
	echo strtolower($metin)."<br>";			/*metnin bütün harfleri küçük yazdırır*/
	echo ucfirst($metin)."<br>";			/*metnin ilk karakterini büyük harfe dönüştürür*/
	echo ucwords($metin)."<br>";			/*metnin ilk harflerini büyük harfe dönüştürür.*/
	echo strlen($metin)."<br>";				/*cümledeki karakter sayısını gösterir*/
	echo str_replace("merhaba","nasılsın".$metin)."<br>";/*merhaba kelimesini nasılsın kelimesi ile değiştirir*/
	echo substr($metin,0,3)."<br>";			/*metinin istenen uzunluktaki bir parçasını gönderir*/

	
		
		
		
		
	?>
</body>
</html>