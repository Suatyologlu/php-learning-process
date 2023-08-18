<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
	<?php
$host			="localhost";
$kullanici_adi	="root";
$sifre			="12345678";
$veritabani_adi	="satilik";
	
	$baglanti= mysql_connect($host,$kullanici_adi,$sifre);
	if($baglanti){
		echo"Sunucuya bağlantı sağlandı <br>";
	}else{
		echo"sunucu bağlantı hatası".mysql_error();
	}
	
	
	
	
	
	
	
	?>
</body>
</html>