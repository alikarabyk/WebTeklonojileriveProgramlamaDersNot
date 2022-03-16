<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ödev</title>
</head>
<body>
    <?php
   $universite="Adnan Menderes";
   $myo="Myo";
   $ad="Ali";
   $soyad="Karabıyık";
   $numara=12345;
     ?>

<table>

<?php
echo "<table border='5''>";
echo "<tr>";
echo "<th>Universite</th>";
echo "<th>$universite</th>";
echo "</tr>";
echo "<tr>";
echo "<th>Bolum</th>";
echo "<th>$myo</th>";
echo "</tr>";
echo "<tr>";
echo "<th>Ad,Soyad</th>";
echo "<th>$ad$soyad</th>";
echo "</tr>";
echo "<tr>";
echo "<th>Telefon Numarasi</th>";
echo "<th>$numara</th>";
echo "</tr>";
echo "</table>";
?>
</body>
</html>