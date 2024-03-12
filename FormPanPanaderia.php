<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PanPanadería</title>
</head>
<body>
<!--
        En este caso vamos a crear un formulario mediante las etiquetas label e input en donde vamos a 
        insertar los datos de los pan que tenga la panadería para que puedan comprar
-->
<form id="formulariopan" name="formulariopan" method="post">
    <label>Tipo de Pan:</label>
    <input type="text" id="Tipo" name="Tipo">
    <label>Cantidad:</label>
    <input type="text" id="Cantidad" name="Cantidad">
    <input name="Enviar" type="submit"  formaction="procesarpanaderia.php" value="Enviar">
</body>
</html>
