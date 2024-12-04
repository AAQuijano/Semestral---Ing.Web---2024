<?php
require '../Session/Session_user.php';
//require '../Config_db/Conexion_db.php';
require '../Config_db/Eventos_db.php';
$user_sesion = New User_session();
if(isset($_SESSION['user'])){
    $user = $user_sesion->Obtener_user($_SESSION['user']);
      
}else{
    echo"<script> alert('Debes iniciar sesión');document.location.href = '../Login/Login_Frontend.php';</script>";
    //header('Location: ../Login/Login_Frontend.php'); 
}
$database2 = new connection_db();
$db2 = $database2->conectar();
$event = new Eventos_db($db2);
$eventos = $event->imprimir_evento();
$filas = count($eventos);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Home.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <title>Home Usuario</title>
</head>
<body>
    <h3>Bienvenido <?php echo $user;  ?></h3><br>

    <nav>
        <div>
            <img src="logo.png" alt="">
        </div>
        <div class='nav-links'>
            <a href="Usuario/Mi_Cuenta.php"><i class="ri-user-3-line"></i> Mi Cuenta</a><br>
            <a href="Evento/CrearEvento_Frontend.php"><i class="ri-add-line"></i> Crear Evento</a><br>
            <!--Enlace a api--><a href="../Api/ApiAdmin.php">View Admin | DB</a><br> 
            <a href="Cerrar_session.php"><i class="ri-door-open-line"></i> Cerrar Sesion</a><br>
        </div>
    </nav>
    
    <h4>Eventos</h4>

    <!-- Contenedor principal de los eventos -->
    <div class="eventos-container">
        <?php for($x=0;$x<$filas;$x++){ $id=$eventos[$x]['id_event']; ?>
            <div class="evento-card">
                <a class="carta-evento" href="Evento/ver_evento.php?id=<?php echo $id ?>">
                    <?php 
                        $image = $event->imprimir_image($id);
                        $image_base64 = base64_encode($image['imagen']);
                        echo "<img src='data:image/jpeg;base64,{$image_base64}' alt='Imagen'>"; 
                    ?>
                    <p>Nombre del Evento: </p><?php echo $eventos[$x]['tittle_event']; ?><br>
                    <p>Dirección del Evento: </p><?php echo $eventos[$x]['direccion']; ?><br>
                    <p>Inicio del Evento: </p><?php echo $eventos[$x]['fecha_start']; ?><br>
                    <p>Culminación del Evento: </p><?php echo $eventos[$x]['fecha_end']; ?><br>
                    <p>Hora de Inicio: </p><?php echo $eventos[$x]['hora_start']; ?><br>
                    <p>Hora de Culminación: </p><?php echo $eventos[$x]['hora_end']; ?><br>
                </a>
            </div> 
        <?php } ?>     
    </div>

    <footer>
        <p>Mi Evento - Derechos Reservados © 2024</p>
    </footer>
</body>
</html>
