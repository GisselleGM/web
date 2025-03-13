<html>
<head>
<title>Elección de color del semáforo</title>
</head>
<body>
 <?php
 $num = rand(1,3);
echo $num;
echo "<br>";
 if ($num ==1) {
echo "Rojo: alto";
 } elseif ($num ==2) {
echo "Amarillo: precaución";
} else {
echo "Verde: siga";
 }
 ?>
</body>
</html>