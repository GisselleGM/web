<html>
<head>
<title>Comparación de tres números</title>
</head>
<body>
 <?php
 $num1 = rand(1,50);
echo $num1;
echo "<br>";
 $num2 = rand(1,50);
echo $num2;
echo "<br>";
 $num3 = rand(1,50);
echo $num3;
echo "<br>";
 if ($num1 <=$num2 && $num2<=$num3) {
echo "$num3 es el número mayor ";
echo "$num1 es el número menor";
 } elseif ($num3 <=$num2 && $num2<=$num1) {
echo "$num1 es el número mayor ";
echo "$num3 es el número menor";
 } elseif ($num3 <=$num1 && $num1<=$num2) {
echo "$num2 es el número mayor ";
echo "$num3 es el número menor";
 } elseif ($num2 <=$num3 && $num3<=$num1) {
echo "$num1 es el número mayor ";
echo "$num2 es el número menor";
 } elseif ($num2 <=$num1 && $num1<=$num3) {
echo "$num3 es el número mayor ";
echo "$num2 es el número menor";
 } elseif ($num1 <=$num3 && $num3<=$num2) {
echo "$num2 es el número mayor ";
echo "$num1 es el número menor";
 } elseif ($num1 == $num2) {
echo "$num1 es igual a $num2";
 } elseif ($num1 == $num3) {
echo "$num1 es igual a $num3";
 } else {
echo "$num3 es igual a $num2";
 }
 ?>
</body>
</html>