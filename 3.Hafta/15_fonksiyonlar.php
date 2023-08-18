<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
	<?php
	function merhaba(){
		
		echo "nasılsınız arkadaşlar";
		//echo "<br>";
	}
	
	merhaba();
		//merhaba();
		//merhaba();
		//merhaba();
	echo "<hr>";
	
	function ortalama_al($sayi1,$sayi2){
		$ortalama=($sayi1+$sayi2)/2;
		echo "verdiğiniz iki sayının ortalaması = ".$ortalama;
		
	}
	ortalama_al(5,15);
	
	
	
	?>
	
	
	
	
	
</body>
</html>