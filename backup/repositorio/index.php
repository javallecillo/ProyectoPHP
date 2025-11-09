<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Mi Primer Página Web PHP</h1>

    <?php
        include "header.php";
        echo "<h2>Titulo 2</h2>";

        $numero1 = "5";
        $numero2 = "6";
        $suma = $numero1 + $numero2;

        echo "La suma es: " .  $suma . "<br>";

        for($i=0; $i<10; $i++) {
            echo "Valor: " . ($i+1) . "<br>";
        }
    ?>

</body>
</html>