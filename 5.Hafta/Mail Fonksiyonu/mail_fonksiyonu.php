<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>

	<?php
	/*$kime="Gönderilecek mail adresi";
	$konu="Gönderilecek mesajın konusu";
	$mesaj="Gönderilecek mesajın bilgisi";
	$headers="Gönderilecek kişinin mail adresi yada başka bilgileri";
	mail($kime,$konu,$mesaj,$headers);
	*/
	
	$kime="alonedark18@outlook.com";
	$konu="eğitim içerikleri";
	$mesaj="eğitiminiz gayet başarılı teşekkürler.";
	$headers="suatyologlu19@outlook.com";
	mail($kime,$konu,$mesaj,$headers);
	echo "mailiniz başarı ile sonuçlandırılmıştır";
	
	
	
	
	?>
</body>
</html>