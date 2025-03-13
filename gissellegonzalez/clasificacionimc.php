<html>
<head>
<title>Clasificación del IMC</title>
</head>
<body>
 <?php
 $peso = rand(40,120);
echo $peso;
echo "<br>";
 $altura =rand(1.4, 2.0);
echo $altura;
echo "<br>";
 $imc = $peso / ($altura * $altura);
echo "IMC:$imc";
 if ($imc >=18.5 && $imc<=24.9) {
echo "Peso normal";
 } elseif ($imc >=25 && $imc<=29.9) {
echo "Sobrepeso";
 } elseif ($imc >=30) {
echo "Obesidad";
} else {
echo "Bajo de peso";
 }
 ?>
</body>
</html>