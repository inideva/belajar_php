<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Switch Case</title>
</head>
<body>
    <?php
    $nilai=100;
    switch ($nilai) {
        case ($nilai >= "90") :
            echo "Anda Mendapat Nilai A";
            break;
        case ($nilai >= "80") :
            echo "Anda Mendapat Nilai B";
            break;
        case ($nilai >= "70") :
            echo "Anda Mendapat Nilai C";
            break;
        case ($nilai < "70") :
            echo "Anda Mendapat Nilai D";
            break;
        default :
            echo "Anda Tidak Mempunyai Nilai";
            break;
    }
    ?>
</body>
</html>