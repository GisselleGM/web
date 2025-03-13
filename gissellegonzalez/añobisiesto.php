<html>
<head>
<title>Año bisiesto</title>
</head>
<body>
 <?php
 $num = rand(1900,2100);
echo $num;
echo "<br>";
 if ($num %4 == 0) {
echo "el año es bisiesto";
 } elseif ($num %100 != 0) {
echo "el año no es bisiesto";
} elseif ($num %400 ==0) {
echo "el año es bisiesto";
} else {
echo "el año no es bisiesto";
 }
 ?>
</body>
</htm