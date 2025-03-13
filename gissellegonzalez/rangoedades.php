<html>
<head>
<title>Rango edades</title>
</head>
<body>
 <?php
 $num = rand(1,100);
echo $num;
echo "<br>";
 if ($num <=10) {
echo "es niño";
 } elseif ($num <=17) {
echo "es adolescente";
} elseif ($num <=30) {
echo "es joven";
} elseif ($num <=55) {
echo "es adulto";
} else {
echo "es adulto mayor";
 }
 ?>
</body>
</html>