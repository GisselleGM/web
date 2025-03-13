<html>
<head>
<title>Elección de color del semáforo</title>
</head>
<body>
 <?php
 $num = rand(1,7);
echo $num;
echo "<br>";
 if ($num ==1) {
echo "Lunes";
 } elseif ($num ==2) {
echo "Martes";
 } elseif ($num ==3) {
echo "Miercoles";
 } elseif ($num ==4) {
echo "Jueves";
 } elseif ($num ==5) {
echo "Viernes";
 } elseif ($num ==6) {
echo "Sábado";
} else {
echo "Domingo";
 }
 ?>
</body>
</html>