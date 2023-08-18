<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php 
$kullanici_adiniz=$_POST["kullanici_adi"];

$sifreniz=$_POST["sifre"];

if ($_POST["Cinsiyet"]==0){
	$cinsiyetiniz="Erkek";
    }
	else{
	$cinsiyetiniz="Kadın";
	};
	
switch ($_POST["il"]){
	case 0:  $iliniz="Seçim yapmadınız";break;
	case 1:  $iliniz="Bolu";break;
	case 2:  $iliniz="Bursa";break;
	case 3:  $iliniz="Çanakkale";break;
	case 4:  $iliniz="Ankara";break;
	}

$adresiniz=$_POST["adres"];
	
	echo "Kullanıcı Adınız = ".$kullanici_adiniz."<br/>";
	echo "Şifreniz         = ".$sifreniz."<br/>";
	echo "Cinsiyetiniz     = ".$cinsiyetiniz."<br/>";
	echo "İliniz           = ".$iliniz."<br/>";
	echo "Adresiniz        = ".$adresiniz."<br/>";
?>
</body>
</html>