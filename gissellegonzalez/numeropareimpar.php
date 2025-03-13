<html>
<head>
<title>Número random</title>
</head>
<body>
 <?php
 $num = rand(1,1000);
echo $num;
echo "<br>";
 if ($num%2 <=0) {
echo "es un número par";
 } else {
echo "es un número impar";
 }
 ?>
</body>
</html>