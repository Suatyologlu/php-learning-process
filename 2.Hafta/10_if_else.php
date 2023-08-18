<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
	<?php
	$a=15;
	$b=9;
	if($a<$b){
	echo"a değeri b değerinden büyüktür";
	}
	else{
	echo "a değeri b değerinden küçüktür";
	}
	echo"<hr>";
	
	$a=15;
	$b=9;
	if($a==$b){
		echo"a değeri b değerinden büyüktür";
	}
	elseif($a<$b){
	echo "a değeri b değerinden küçüktür";
	}
	else{
		echo "a değeri ile b değeri birbirine eşittir";
	}
	echo"<hr>";
	
	$kullanici_adi="elginkan";
	$sifre=123456;
	if($kullanici_adi=="elginkan" and $sifre==123456){
		echo "Hoşgeldiniz ".$kullanici_adi."Bey";
	
		}
		else{
		echo"Kullanıcı adınız yada şifreniz yanlıştır";	
		}	
	
	?>
	
	
	
	
	
</body>
</html>