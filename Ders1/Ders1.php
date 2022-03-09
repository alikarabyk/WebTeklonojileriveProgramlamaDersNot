<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Ders-1</title>
</head>
<body>
    <!-- Yorum Satırı -->




<?php


/* Açıklama Bloğu kısayolu : shift + alt + a  

*/ 

// Tek satır açıklama satırı


/* Kullanılan komut: 
   echo: Ekrana yazdırma işlemi yapar.
      Komut içerisinde html etiketleri kullanılabilir
      Çift veya tek tırnak kullanılabilir
      Çift tırnak ile kullanıldığında içerisindeki değişkenlerin içeriğini ekrana yazar 
      . (Nokta) operatörü ile birleştirme işlemi yapılabilir.
      \ (Ters Slash) kaçış karakteridir. Özel ifadelerden önce kullanılır.


    






*/

echo "<h3>Adnan Menderes Üniversitesi</h3>";
echo "<h4>Aydın Meslek Yüksek Okulu </h4>";
echo "Bilgisayar Mühendisliği "  . "Aymes";
echo "<br>Bilgisayar Mühendisliği "  . "<br>". "Aymes";

echo "<hr> <h4> Değişken tanımlama </h4>";

echo "<ol> 
      <li> Değişken isimleri $ ile başlar. </li>
      <li> Değişken isimleri sayısal ifadelerle başlayamaz  </li>
      <li> Değişken isimlerinde boşluk kullanılmaz. İki kelime varsa : birinci_sinif birinciSinif 
      birinci-sinif örnekleri kullanılabilir. </li>
      <li> Değişken isimleri küçük büyük harfe duyarlıdır. \$sayi != \$Sayi   </li>
      <li> Değişken ismi, değişkenin taşıdığı içeri ifade etmeli. </li>
      <li> Değişken içeriğinde metinsel ifade varsa çift tırnak (\") veya 
      tek tırnak (') kullanılabilir. </li>
      <li> Değişken içeriğinde sayısal bir ifade varsa tırnak kullanmak gerekli değildir. </li>
      <li> Değişken içerikleri ekrana echo komutu ile yazdırılabilir (Hepsi olmasa da geneli ) </li>
      

</ol>";

 echo "<hr> </h4> Değişken Tanımlama Örnekleri </h4>";
 $isim = "Ahmet";
 $soyisim = "Erimez";
 $gsm = "123123123";
 
 echo $isim. "<br>";
 echo "$isim $soyisim $gsm";

 /* Uygulama: 
     Üniversite-myo-ad-soyad-numara değişkenlerini tanımlayınız.
     Bu değişkenlerin içerikleri tablo veya form içeriğinde ekrana yazdırınız.
 */

 echo "Değişkenler";
 $uni="Adü"; 
 $myo="Aymes";
 $ad="Ali";
 $soyad="Karabıyık";
 $numara="123";


?>

<form action="">

<label for="Üniversite">Üni: </label>
<input type="text" name="" value="<?php echo $uni; ?>" id="Üniversite"> <br>

<label for="myo">Myo: </label>
<input type="text" name="" value="<?php echo $myo; ?>" id="myo"> <br>

<label for="ad">Öğrenci Adı: </label>
<input type="text" name="" value="<?php echo $ad; ?>" id="Ad"> <br>

<label for="soyad">Öğrenci Soyadı: </label>
<input type="text" name="" value="<?php echo $soyad; ?>" id="Soyad"> <br>

<label for="numara">Öğrenci Numara: </label>
<input type="text" name="" value="<?php echo $numara; ?>" id="Numara"> <br>

</form>







</body>
</html>