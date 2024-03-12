<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PedidosPanaderia</title>
</head>
<body>
    <form id="formulariopedidos" name="formulariopedidos" method="post">
        <!--Introducimos el DNI de la persona que va a realizar el pedido -->
            <label>Escribe el DNI:</label>
            <input type="text" id="DNI" name="DNI">
        <?php
        //Realizamos la conexión al servidor de base de datos
            $servername= "localhost";
            $username= "phpmyadmin";
            $password= "phpmyadmin";
        //Comprobamos que funcione correctamente la conexión con la base de datos
                $conexion = new mysqli($servername,$username,$password);
                if(!$conexion ) {  
                    die("Conexión fallida:". $conexion->connect_error);
                }
        //Nos conectamos a la base de datos de panadería            
                mysqli_select_db($conexion,"panaderia"); 
                 
        //Realizamos la select que será de donde vamos a recoger los datos para el desplegable         
                $consultapedido= "SELECT tipo FROM pan";
        //Hacemos que se ejecute dicha select en la base de datos
                $registrospedidos = mysqli_query($conexion,$consultapedido);
        //Nos creamos el label y en vez de utilizar un input para introducir a mano esos datos, utilizamos un select
        //con lo que pillamos los datos uno por uno de los tipos pan y los vamos poniendo en el desplegable        
                echo "<label for='elegir'>Elige un tipo de pan: </label>";
                echo "<select ' name='elegir' id='elegir'>";
                while($registro=mysqli_fetch_row($registrospedidos)) {
                        echo "<option value='$registro[0]'>".$registro[0]."</option>";
                }
                echo "</select>";
        ?>
            <!--Ya por último creamos los últimos label e input para introducir la cantidad que queremos de pan y
            -- del día que se realiza el pedido-->
            <label>Cantidad de Pan:</label>
            <input type="text" id="cantidadpan" name="cantidadpan">
            <label>Fecha de pedido:</label>
            <input type ="date" id="fechapedido" />
        <!--Nos creamos 2 botones uno para realizar el envio del pedido y otro por si queremos borrar todo 
        -- y crear un nuevo pedido -->
            <button type="submit" formaction="procesarpanaderia.php" >Enviar Pedido</button>
            <button type ="reset">Volver a Realizar</button>
</body>
</html>
