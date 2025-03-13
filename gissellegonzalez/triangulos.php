<html>
<head>
<title>Clasificación de triángulos</title>
</head>
<body>
 <?php
 $num1 = rand(1,10);
echo $num1;
echo "<br>";
 $num2 = rand(1,10);
echo $num2;
echo "<br>";
 $num3 = rand(1,10);
echo $num3;
echo "<br>";
 if ($num1 == $num2 && $num2== $num3) {
echo "Equilatero: todos los lados son iguales";
 } elseif ($num1 == $num2 || $num1 == $num3 || $num2 == $num3) {
echo "Isósceles: Dos lados iguales";
} else {
echo "Escaleno: Todos los lados diferentes";
 }
 ?>
</body>
</html>