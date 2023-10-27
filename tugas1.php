<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1 PHP</title>
</head>
<body>
    <?php
        $d=1;
        $e=1;
        do {
            echo "$d x $e = " .$d*$e;
            echo "<br>";
            $e++; 
        }while ($e <= 10);
    ?>
</body>
</html>