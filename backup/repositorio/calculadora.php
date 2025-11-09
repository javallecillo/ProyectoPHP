<?php
    $number1 = "";
    $number2 = "";
    $result = "";

    if($_POST) {
        if(isset($_POST["txtNumber1"])) {
            $number1 = $_POST["txtNumber1"];
        }

        if(isset($_POST["txtNumber1"])) {
            $number2 = $_POST["txtNumber2"];
        }
    }

    $result = $number1 + $number2;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <fieldset>
        <legend>Calculadora Básica</legend>

        <form action="" method="post">
            <label for="txtNumber1">Número 1: <br></label>
            <input type="number" name="txtNumber1" id="txtNumber1">

            <br><br>

            <label for="txtNumber2">Número 2: <br></label>
            <input type="number" name="txtNumber2" id="txtNumber2">

            <br><br>

            <label for="txtResult">Resultado: <br></label>
            <input type="number" name="txtResult" id="txtResult" value="<?=$result?>">

            <br><br>

            <button type="submit">Calcular</button>
        </form>

    </fieldset>
</body>
</html>