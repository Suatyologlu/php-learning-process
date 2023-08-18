<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
 Kayıt Formu
<form action="Form_isle.php" method="post">
<table border="1">
<tr>
 <td>Kullanıcı Adı</td>
 <td><input type="text" name="kullanici_adi"></td>
</tr>
<tr>
 <td>Şifre</td>
 <td><input type="password" maxlength="8" name="sifre"></td>
</tr>
<tr>
 <td>Cinsiyet</td>
 <td><input type="radio" name="Cinsiyet" value="0">Erkek
     <input type="radio" name="Cinsiyet" value="1">Kadın</td>
</tr>
<tr>
   <td>İliniz</td>
   <td>
     <select name="il">
        <option value="0">Seçiniz</option>
        <option value="1">Bolu</option>
        <option value="2">Bursa</option>
        <option value="3">Çanakkale</option>
        <option value="4">Ankara</option>
     </select>
   </td>
</tr>
<tr>
  <td>Adresiniz</td>
  <td>
    <textarea name="adres" cols="22" rows="4"></textarea>
  </td>
</tr>
<tr>
 <td><input type="reset" value="Temizle"></td>
 <td><input type="submit" value="Kayıt Ol"></td>
</tr>
</table>
</form>
</body>
</html>