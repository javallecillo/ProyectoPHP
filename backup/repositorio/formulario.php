<?php
   $nombre = "";
   $edad = "";

   if ($_GET) {
        if(isset($_GET["txtNombre"])){
            $nombre = $_GET["txtNombre"];
        }

        if(isset($_GET["txtEdad"])) {
            $edad = $_GET["txtEdad"];
        }
   }

   if ($_POST) {
        if(isset($_POST["txtNombre"])) {
            $nombre = $_POST["txtNombre"];
        }

        if(isset($_POST["txtEdad"])) {
            $edad = $_POST["txtEdad"];
        }
   }

   echo $nombre . "<br>" . $edad;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
</head>
<body>
    <fieldset>
        <legend>Datos</legend>

        <form action="" method="post">
            <label for="txtNombre">Nombre: </label>
            <input type="text" name="txtNombre" id="txtNombre" value="<?php echo $nombre ?>">

            <br>

            <label for="txtEdad">Edad: </label>
            <input type="number" name="txtEdad" id="txtEdad" value="<?= $edad ?>">

            <br>
            <button type="submit">Aceptar</button>
        </form>
    </fieldset>
</body>
</html>