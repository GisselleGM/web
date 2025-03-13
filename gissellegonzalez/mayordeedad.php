<html>
<head>
<title>Persona menor o mayor de edad</title>
</head>
<body>
 <?php
 $num = rand(1,30);
echo $num;
echo "<br>";
 if ($num >= 18) {
 echo "es mayor de edad";
 } else {
 echo "es menor de edad";
 }
 ?>
</body>
</html>