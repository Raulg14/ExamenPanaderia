<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClientesPanaderia</title>
</head>
<body>
    <!--
        En este caso vamos a crear un formulario mediante las etiquetas label e input en donde vamos a 
        insertar los datos de los clientes que tenga la panadería para que puedan comprar
-->
    <form id="formularioclientes" name="formularioclientes" method="post">
    <label>DNI:</label>
    <input type="text" id="DNI" name="DNI">
    <label>Email:</label>
    <input type="text" id="Email" name="Email">
    <label>Telefono:</label>
    <input type="text" id="Telefono" name="Telefono">
    <input name="Procesar" type="submit"  formaction="procesarpanaderia.php" value="Procesar"> 
</body>
</html>
