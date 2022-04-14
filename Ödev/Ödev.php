<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ödev</title>
</head>
<body>

<h3> 0 ile 100 arası random sayı oluşturan ve tek mi çift mi olduğunu yazdıran kod  </h3>
<?php
//0 ile 100 arası random sayı oluşturan ve tek mi çift mi olduğunu yazdıran kod:

$sayi = rand(0,100);
if ($sayi%2==1) 
{
    echo $sayi . " " ."tek";
}

else
{
    echo $sayi . " " . "çift";
}
 
?>

<br> <hr>


<h3> 0 ile 100 arasında random sayı yazdıran 50 nin aşağısında ise kaldınız aksi durumda geçtiniz yazdıran program  </h3>

<?php
//0 ile 100 arasında random sayı yazdıran 50 nin aşağısında ise kaldınız aksi durumda geçtiniz yazdıran program

$sayi = rand(0,100);
if ($sayi > 50) 
{
    echo $sayi . " " . "Geçtiniz";
}

else
{
    echo $sayi . " " .  "Kaldınız";
}
 
?>

<br> <hr>


<h3> Ehliyet Yaş Kontrol  </h3>
 

<?php

$yas = 18;

if ($yas < 18 ) 
{
    echo $yas . " " ."Ehliyet Alamazsınız";
}
 
else

   echo $yas . " " ."Ehliyet Alabilirsiniz";


?>


<br> <hr>
<br> 


<h3>Tablo Ödevi :</h3>
<?php
echo "<table border='1' width='200px' CELLPADDING=15 bgcolor= #99FFFF	>";
echo "<tr>";
echo "<th>İd</th>";
echo "<th>Adı</th>";
echo "<th>Soyadı</th>";
echo "<th>Yaş</th>";
echo "<th>Bölüm</th>";
echo "<th>Dersler</th>";
echo "<th>Sınıf</th>";
echo "</tr>";

   echo "<tr>";
   echo "<td>1</td>";
   echo "<td>Ali</td>";
   echo "<td>Karabıyık</td>";
   echo "<td>31</td>";
   echo "<td>Bilgisayar Programcılığı</td>";
   echo "<td> <hr> Web Tasarım <br> <hr> Donanım <br> <hr> Veri Tabanı <hr>  </td>";
   echo "<td>1</td>";
   echo "</tr>";

   echo "<tr>";
   echo "<td>2</td>";
   echo "<td>Havva</td>";
   echo "<td>Ateş</td>";
   echo "<td>31</td>";
   echo "<td>Bilgisayar Programcılığı</td>";
   echo "<td> <hr> Web Tasarım <br> <hr> Donanım <br> <hr> Veri Tabanı <hr>  </td>";
   echo "<td>1</td>";
   echo "</tr>";


   echo "<tr>";
   echo "<td>1</td>";
   echo "<td>Ahmet</td>";
   echo "<td>Yüksel</td>";
   echo "<td>31</td>";
   echo "<td>Bilgisayar Programcılığı</td>";
   echo "<td> <hr> Web Tasarım <br> <hr> Donanım <br> <hr> Veri Tabanı <hr>  </td>";
   echo "<td>1</td>";
   echo "</tr>";


echo "</table>";
?>


</body>
</html>