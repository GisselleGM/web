<html>
<head>
<title>Dias de un mes</title>
</head>
<body>
 <?php
 $num = rand(1,12);
echo $num;
echo "<br>";
 if ($num ==1) {
echo "Enero 31 días";
 } elseif ($num ==2) {
echo "Febrero 28 días o 29 si es bisiesto";
 } elseif ($num ==3) {
echo "Marzo 31 días";
 } elseif ($num ==4) {
echo "Abril 30 días";
 } elseif ($num ==5) {
echo "Mayo 31 días";
 } elseif ($num ==6) {
echo "Junio 30 días";
 } elseif ($num ==7) {
echo "Julio 31 días";
 } elseif ($num ==8) {
echo "Agosto 31 días";
 } elseif ($num ==9) {
echo "Septiembre 30 días";
 } elseif ($num ==10) {
echo "Octubre 31 días";
 } elseif ($num ==11) {
echo "Noviembre 30 días";
} else {
echo "Diciembre 31 días"; 
}
 ?>
</body>
</html>