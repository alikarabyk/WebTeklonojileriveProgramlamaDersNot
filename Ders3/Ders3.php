<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ders3</title>
</head>
<body>
    
<?php 

/* Uygulama Ödevi
Kuyruk ve yığın veri yapılarıın php üzerinde dizileri kullanarak örneklendirlilmesini gerçekleştiriniz*/

/* Uygulama: Rastgele üretilen sayının 50'den büyükse:
              Geçtiniz-Notunuz: xx
          50'den küçükse
              Kaldınız-Notunuz: xx
          Uygulamasını gerçekleştiriniz.            

*/
 //Uygulama Kodu:

 $not = rand (10,100);
 if ($not >=50){
     echo("Geçtiniz-Notunuz: $not");
}
 else{
     echo("Kaldınız-Notunuz: $not");

 }

echo "<br>";
echo "<hr>";


echo "<h3> Sık kullanılan String Fonksiyonlar </h3>";

$yazi = "Aydın Adnan Menderes Üniversitesi";
echo gettype($yazi);
echo "<br> Değişken İçeriği: $yazi(". gettype($yazi) . ")";


echo "<br>";
echo "<hr>";



//İçeriğin Büyük Harge Dönüştürülmesi 

echo "\$yazi İçeriğinin Büyük Harfle Yazılması(strtoupper ile): " . $buyuk_yazi = strtoupper($yazi);
echo "<br>";
echo "<br>";
echo "\$yazi İçeriğinin Büyük Harfle Yazılması(mb_strtoupper ile): " . $buyuk_yazi = mb_strtoupper($yazi);
echo "<br>";
echo "<br>";
 
//İçeriğinin Küçük Harfe Dönüştürülmesi
echo "\$yazi İçeriğinin Küçük Harfle Yazılması:" . $kucuk_yazi = strtolower($buyuk_yazi);
echo "<br>";
echo "\$yazi İçeriğinin Küçük Harfle Yazılması:" . $kucuk_yazi = mb_strtolower($buyuk_yazi);


echo "<br>";
echo "<hr>";

//İçeriğin İlk Harfinin,Büyük Harfe Dönüştürülmesi
echo "\$yazi İçeriğinin İlk harfinin büyük harfle yazılması: " . $ilk_yazi = ucfirst($kucuk_yazi);
echo "<br>";
echo "<hr>";

//İçeriğinin Tüm Kelimelerinin İlk harfinin,Büyük harfe dönüştürülmesi
echo "\$yazi Tüm Kelimerinin İlk Harfinin,Büyük harfle Yazılması:" . $kelime = ucwords($kucuk_yazi);

echo "<br>";
echo "<hr>";

//İçeriğin Harf Sayısı:
echo "\$yazi İçerisindeki Harf Sayısı:" . strlen($yazi);

echo "<br>";
echo "<hr>";

// Ascii Char Karşılığı : Ascii tablosunun sayı karşılığı.
echo "Ascii Karakter:";
echo "<br>";
echo "Karakter Karşılığı:" . chr(109);
echo "<br>";
echo "Karakter Karşılığı:" . chr(64);
echo "<br>";
echo "<br>";
echo "<hr>";

//Uygulama 1-255 char karşılıkları:
echo "Ascii Karakterleri:";
for ($i=1; $i <=255; $i++) { 
    echo "$i " . chr($i) . "-";
}


echo "<br>";
echo "<hr>";

//Metnin parçalanarak diziye dönüştürülmesi (explode)
$dizi = explode(" ",$yazi);
echo "<br>";
print_r($dizi);

echo "<br>";
echo "<hr>";

//Uygulama:Paragraftaki Kelime ve Cümle Sayılarını alt alta yazdırınız.
$metin="Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
Nisi nemo totam dolores hic, odio autem? Ea assumenda mollitia eaque nesciunt, 
dolorem incidunt beatae voluptate a vero tenetur delectus eveniet earum! ";

echo $metin;
echo "<br>";

$kelimelerDizisi = explode(" ", $metin);
$cumlelerDizisi = explode(".",$metin);

echo "Kelime Sayısı:" . count($kelimelerDizisi);
echo "<br>";
echo "Cümle Sayısı:" . count($cumlelerDizisi);

echo "<br>";
echo "<hr>";

/*   Uygulama: 
    Veri tabanından gelen 2021-12-25 değerini 25-12-2021 şeklinde ekrana yazdırınız.  */

//explode ile veriyi parçaladık ve düzenini değiştirip sondan yazdırık.
$tarih = "2021-12-25";
$yenitarih = explode ("-", $tarih);
echo "$yenitarih[2] - $yenitarih[1] - $yenitarih[0] ";

echo "<br>";
echo "<hr>";

//Dizinin Metne Dönüştürülmesi İşlemi (implode)
$aylar = ["Ocak","Şubat","Mart","Nisan","Mayıs"];
echo print_r($aylar);
echo "<br>";
$aylarString = implode(" ",$aylar);
echo "String: $aylarString";

echo "<br>";
echo "<hr>";

/* str_split();
Verilen bir metnin belirtilen sayı kadar ayrılarak bir dizi içeriğine aktarılması.
Eğer Sayı belirtilmezse o metni harf harf böler. */

$iban = "TR0010002000300040005000";
$ibanYeni = str_split($iban,4);
print_r($ibanYeni);
echo "<br>";

//Foreach ile diziyi yazdırma 
foreach ($ibanYeni as $parca ) {
    echo "$parca";
}




echo "<br>";
echo "<hr>";





?>



</body>
</html>
