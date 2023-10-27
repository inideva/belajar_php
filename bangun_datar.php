<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Bangun Datar</title>
</head>
<body>  
    <?php

// Bangun Datar Persegi
    echo "<b>1. Menghitung Luas Persegi</b><br><br>";   

    $sisi=3;

    $luas=$sisi**2;
    
    echo "Luas Persegi : S<sup>2</sup><br><br>";
    echo "Diketahui : <br>";
    echo "Sisi = $sisi <br>";
    echo "L = $sisi * $sisi <br>";
    echo "L = $luas <br>";

    echo "<br><br>";

// Bangun Datar Persegi Panjang
    echo "<b>2. Menghitung Luas Persegi Panjang</b><br><br>";   

    $p=6;
    $l=3;

    $luas=$p*$l;
    
    echo "Luas Persegi Panjang : Panjang * Lebar<br><br>";
    echo "Diketahui : <br>";
    echo "Panjang = $p <br>";
    echo "Lebar = $l <br>";
    echo "L = $p * $l <br>";
    echo "L = $luas <br>";

    echo "<br><br>";

// Bangun Datar Segitiga
    echo "<b>3. Menghitung Luas Segitiga</b><br><br>";   

    $a=5;
    $t=7;

    $luas=$a*$t/2;

    echo "Luas Segitiga : Alas * Tinggi /2<br><br>";
    echo "Diketahui : <br>";
    echo "Alas = $a <br>";
    echo "Tinggi = $t <br>";
    echo "L = $a * $t /2 <br>";
    echo "L = $luas <br>";

    echo "<br><br>";

// Bangun Datar Lingkaran
    echo "<b>4. Menghitung Luas Lingkaran</b><br><br>";   

    $phi=3.14;
    $r=3;

    $luas=$phi*$r**2;

    echo "Luas Lingkaran : π * r<sup>2</sup> <br><br>";
    echo "Diketahui : <br>";
    echo "π = $phi <br>";
    echo "r = $r <br>";
    echo "L = $phi * $r *$r <br>";
    echo "L = $luas <br>";

    echo "<br><br>";

// Bangun Datar Layang - Layang
    echo "<b>5. Menghitung Luas Layang - layang</b><br><br>";         
        
    $d1=14;
    $d2=25;
        
    $luas=$d1*$d2/2;
    echo "Luas Layang - layang : d1 * d2 /2 <br><br>";
    echo "Diketahui : <br>";
    echo "d1 = $d1 <br>";
    echo "d2 = $d2 <br>";
    echo "L = $d1 * $d2 /2 <br>";
    echo "L = $luas <br>";

    ?> 
</body>
</html>