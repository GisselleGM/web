<html>
<head>
    <title>Adivinar Número</title>
</head>
<body>
<?php
$num = rand(1, 100);
echo "Número generado: " . $num;
echo "<br>";

if ($num <= 50) {
    echo "El número es menor o igual a 50<br>";
    $num = rand(1, 50);
    echo "Nuevo número: " . $num;
    echo "<br>";

    if ($num <= 25) {
        echo "El número es menor o igual a 25<br>";
        $num = rand(1, 25);
        echo "Nuevo número: " . $num;
        echo "<br>";

        if ($num <= 13) {
            echo "El número es menor o igual a 13<br>";
            $num = rand(1, 13);
            echo "Nuevo número: " . $num;
            echo "<br>";

            if ($num <= 10) {
                echo "El número es menor o igual a 10<br>";
                $num = rand(1, 10);
                echo "Nuevo número: " . $num;
                echo "<br>";

                if ($num == 10) {
                    echo "¡El número 10 ha sido encontrado!";
                } else {
                    echo "Aún no es 10, seguir intentando.<br>";
                }
            } else {
                echo "El número está entre 11 y 13<br>";
            }
        } else {
            echo "El número está entre 14 y 25<br>";
        }
    } else {
        echo "El número está entre 26 y 50<br>";
    }
} else {
    echo "El número es mayor a 50, descartado.<br>";
}
?>
</body>
</html>