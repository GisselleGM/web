<html>
<head>
<title>Cálculo de impuestos</title>
</head>
<body>
 <?php
 $num = rand(5000,50000);
echo $num;
echo "<br>";
 if ($num >=10000 && $num<=20000) {
echo "10% de impuesto";
 } elseif ($num >=20001 && $num<=35000) {
echo "20% de impuesto";
 } elseif ($num >=35000) {
echo "30% de impuesto";
} else {
echo "Sin impuesto";
 }
 ?>
</body>
</html>