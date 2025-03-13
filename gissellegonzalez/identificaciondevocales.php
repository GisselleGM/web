<html>
<head>
<title>Identificación de vocales</title>
</head>
<body>
 <?php
$vocales = ['a', 'e', 'i', 'o', 'u'];
$letra_aleatoria = $vocales[array_rand($vocales)];
echo "$letra_aleatoria<br>";
if (in_array($letra_aleatoria, $vocales)) {
echo "La letra '$letra_aleatoria' es una vocal.";
} else {
echo "La letra '$letra_aleatoria' no es una vocal."; 
}
 ?>
</body>
</html>