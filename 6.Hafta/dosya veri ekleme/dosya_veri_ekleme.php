<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
	
<?php
//fputs("dosya adı","Ne yazmak istiyosun"); dosyaya veri eklemek için kullanılır.
$ac=fopen("dosya.txt","a+");
if($ac) { echo "dosya.txt açıldı ve veriniz eklendi<br/>";}
fputs($ac,"Nasılsınız \n");
fclose($ac);
?>

</body>
</html>