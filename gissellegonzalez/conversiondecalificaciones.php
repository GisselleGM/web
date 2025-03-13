<html>
<head>
<title>Piedra, papel o tijera</title>
</head>
<body>
 <?php
 $num = rand(1,5);
echo $num;
echo "<br>";
 if ($num ==1) {
echo "Muy deficiente";
 } elseif ($num ==2) {
echo "Insuficiente";
 } elseif ($num ==3) {
echo "Suficiente";
 } elseif ($num ==4) {
echo "Notable";
 } else {
echo "Sobresaliente";
 }
 ?>
</body>
</html>