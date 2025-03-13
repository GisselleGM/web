<html>
<head>
<title>Evaluación de velocidad</title>
</head>
<body>
 <?php
 $num = rand(10,180);
echo $num;
echo "<br>";
 if ($num >=30 && $num<=80) {
echo "Velocidad normal";
 } elseif ($num >=81 && $num<=120) {
echo "Velocidad rápida";
 } elseif ($num >=120) {
echo "Exceso de velocidad";
} else {
echo "Vehículo muy lento";
 }
 ?>
</body>
</html>