<html>
<head>
<title>Horario de saludos</title>
</head>
<body>
 <?php
 $num = rand(0,23);
echo $num;
echo "<br>";
 if ($num >=5 && $num<=11) {
echo "¡Buenos días!";
 } elseif ($num >=12 && $num<=18) {
echo "¡Buenas tardes!";
} else {
echo "¡Buenas noches!";
 }
 ?>
</body>
</html>