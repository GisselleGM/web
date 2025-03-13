<html>
<head>
<title>Evolución de temperatura</title>
</head>
<body>
 <?php
 $num = rand(-10,40);
echo $num;
echo "<br>";
 if ($num >=-10 && $num<=0) {
echo "Frío extremo";
 } elseif ($num >=1 && $num<=10) {
echo "Frío";
 } elseif ($num >=11 && $num<=20) {
echo "Templado";
 } elseif ($num >=21 && $num<=30) {
echo "Cálido";
} else {
echo "Calor extremo";
 }
 ?>
</body>
</html>