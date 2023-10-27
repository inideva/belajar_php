<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Bangun Ruang</title>
</head>
<body>
    <?php
// Bangun Ruang Kubus
    echo "<b>1. Menghitung Volume Kubus</b><br><br>";   

    $sisi=4;

    $volume=$sisi**3;
    
    echo "Volume Kubus : S<sup>3</sup><br><br>";
    echo "Diketahui : <br>";
    echo "Sisi = $sisi <br>";
    echo "V = $sisi * $sisi * $sisi <br>";
    echo "V = $volume <br>";

    echo "<br><br>";

// Bangun Ruang Prisma
    echo "<b>2. Menghitung Volume Prisma</b><br><br>";   

    $la=60;
    $t=4;

    $volume=$la*$t;
    
    echo "Volume Prisma : Luas Alas * Tinggi<br><br>";
    echo "Diketahui : <br>";
    echo "Luas Alas = $la <br>";
    echo "Tinggi = $t <br>";
    echo "V = $la * $t<br>";
    echo "V = $volume <br>";

    echo "<br><br>";

// Bangun Ruang Balok
    echo "<b>3. Menghitung Volume Balok</b><br><br>";   

    $p=15;
    $l=6;
    $t=4;
    
    $volume=$p*$l*$t;
    
    echo "Volume Balok : Panjang * Lebar *Tinggi<br><br>";
    echo "Diketahui : <br>";
    echo "Panjang = $p <br>";
    echo "Lebar = $l <br>";
    echo "Tinggi = $t <br>";
    echo "V = $p * $l * $t<br>";
    echo "V = $volume <br>";    
    ?>
</body>
</html>