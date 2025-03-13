<html>
<head>
<title>Identificar tipo de número</title>
</head>
<body>
 <?php
 $num = rand(1,100);
echo $num;
echo "<br>";
 if ($num %2 == 0) {
echo "el número es par ";
 } else {
echo "el número es impar ";
 } if ($num %5 == 0) {
echo "el número es multiplo de 5";
 } else {
echo "el número no es multiplo de 5 ";
 } if ($num%1==$num && $num%$num =1) {
echo "el número es primo";
 } else {
echo "el número no es primo";
 }
 ?>
</body>
</htm