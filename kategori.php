<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Else If</title>
</head> 
<body style="padding-top: 50px;">
    <h1>Menghitung BMI</h1><br>
    <form method="post" action=""> 
    NAMA : <input type="text" name="nama"/><br><br>
    TINGGI BADAN (CM) : <input type="text" name="tinggi"/><br><br>
    BERAT BADAN  (KG) : <input type="text" name="berat"/><br><br><br>
    <input type="submit" name="submit" value="Submit"/><br><br> 
    </form> 


    <?php
        if(isset($_POST['submit'])){
            $nama=$_POST['nama'];
            $tb=$_POST['tinggi'];
            $bb=$_POST['berat'];

            $rumustb=$tb/100;

            $rumusbmi=$bb/($rumustb*$rumustb);
            $bmi= number_format($rumusbmi,1,'.','');
        
        echo "Hallo, $nama. <br><br>";
        echo "TINGGI BADAN ANDA = $tb cm, <br>";
        echo "BERAT BADAN ANDA = $bb kg, <br><br>";
        echo "Nilai BMI anda adalah : $bmi, anda termasuk manusia ";

            if ($bmi < 17) {
                echo "<b>Kurus</b>";
            }elseif ($bmi < 23) {
                echo "<b>Sedang</b>";
            }elseif ($bmi > 25) {
                echo "<b>Gemuk</b>";
            };
        }

    ?>
</body>
</html>