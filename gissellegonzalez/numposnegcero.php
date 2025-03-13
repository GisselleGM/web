<html>
<head>
<title>Determinar si un número es positivo, negativo o cero</title>
</head>
<body>
 <?php
 $num = rand(-50,50);
echo $num;
echo "<br>";
 if ($num <0) {
echo "es un número negativo";
 } elseif ($num >0) {
echo "es un número positivo";
} else {
echo "es el número cero";
 }
 ?>
</body>
</html>