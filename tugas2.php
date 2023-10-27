<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2 PHP</title>
</head>
<body>
    <?php
    $b=9;
	for($a=1; $a<=$b; $a++){
	for($c=$b; $c>=$a; $c-=1){
		echo "*";
	}
	echo "<br>";
	}
    ?>
</body>
</html>