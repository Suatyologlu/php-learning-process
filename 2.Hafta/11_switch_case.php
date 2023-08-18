<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
	<?php
	/* açıklama alanı (birden fazla açıklama alanı)
	switch($degisken){
	case durum1:
	echo "yapılacak işlemler"
	break;
	case durum2:
	echo "yapılacak işlemler"
	break;
	case durum3:
	echo "yapılacak işlemler"
	break;
	default:
	echo "hiçbiri değilse yapılacak işlemler"
	break;
	}
	*/
	
	$a=5;
	switch($a){
	case 0:
	echo "a değişkeninin değeri 0";
	break;
	
	case 1:
	echo "a değişkeninin değeri 1";
	break;
	
	case 2:
	echo "a değişkeninin değeri 2";
	break;
	
	case 3:
	echo "a değişkeninin değeri 3";
	break;
			
	default:
	echo "bu sayı bende yok";
	break;
	}
	echo "<hr>";
	
	$hava_tahmini="rüzgarlı";
	switch($hava_tahmini){
	case "günesli":
	echo "hava bugün güneşli olacak";
	break;
	
	case "yagmurlu":
	echo "hava bugün yağmurlu olacak";
	break;
	
	case "karli":
	echo "hava bugün karlı olacak";
	break;
	
	default:
	echo "hava tahmini bulunamadı";
	break;
	
	}
	
	
	?>
	
</body>
</html>