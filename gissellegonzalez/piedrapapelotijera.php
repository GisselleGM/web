<html>
<head>
<title>Piedra, papel o tijera</title>
</head>
<body>
 <?php
 $num = rand(1,3);
echo $num;
echo "<br>";
 if ($num ==1) {
echo "Piedra";
 } elseif ($num ==2) {
echo "Papel";
} else {
echo "Tijera";
 }
 ?>
</body>
</html>