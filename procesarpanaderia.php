<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesarpanaderia</title>
</head>
<body>
    <?php
    ///////////////////////////////Datos de nuestra BBDD
    $servername = 'localhost';
    $username = 'phpmyadmin';
    $password = 'phpmyadmin';
    ////////////////////////////////Datos que vamos a traer del formulario clientes
    $DNI = $_POST["DNI"];
    $Email = $_POST["Email"];
    $Telefono = $_POST["Telefono"];
    ///////////////////////////////Datos que vamos a traer del formulario pan
    $Tipo = $_POST["Tipo"];
    $Cantidad = $_POST["Cantidad"];
    ///////////////////////////////Datos que traemos del formulario pedidos
    $DNI_Clientes = $_POST["DNI_Clientes"];
    $Tipo_pan = $_POST["Tipo_pan"];
    $Cantidad = $_POST["Cantidad"];
    $Fechapedido = $_POST["Fechapedido"];
    ///////////////////////////////Para comprobar que se hace bien la conexión a la base de datos
    $conexion = new mysqli($servername, $username, $password);
    if (!$conexion) {
        die("Conexión fallida:". $conexion->connect_error);
    }
    ////////////////////////////Realizamos la conexion a nuestra base de datos y ahí a la de panadería
    mysqli_select_db($conexion,"panaderia");
    ///////////////////////////Insertamos los datos de clientes, 
    ///mediante el insert into realizamos la introdución de los datos en la tabla clientes.
    if($DNI){
        $clientes = "INSERT clientes (dni,email,telefono)
                        VALUES ('$DNI','$Email','$Telefono')";
    mysqli_query($conexion,$clientes);
    echo "Linea insertada en la tabla libros en la BBDD correctamente";
    }
    ////////////////////////////Insertamos los datos de los panes,
    //////////////////////////como en el caso anterior se realiza la introducción de los datos mediante
    /////////////////////////mediante el insert into a la tabla pan.
    if($Tipo){
        $pan = "INSERT pan (tipo,cantidad)
                    VALUES ('$Tipo','$Cantidad')";
    mysqli_query($conexion,$pan);
    echo "Linea insertada en la tabla libros en la BBDD correctamente";
    }
    ////////////////////////////////////Insertamos los datos de los pedidos,
    //////////////////////como en los anteriores casos lo vamos a hacer por insert into para meter los datos.
    if($DNI_Clientes){
        $pedidos = "INSERT pedidos (dni_clientes,tipo_pan,cantidad,fecha_pedido)
                        VALUES ('$DNI_Clientes','$Tipo_pan','$Cantidad','$Fechapedido')";
    mysqli_query($conexion,$pedidos);
    echo "Linea insertada en la tabla libros en la BBDD correctamente";
    }
    $conexion->close();
    ?>
</body>
</html>
