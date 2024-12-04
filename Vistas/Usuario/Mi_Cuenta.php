<?php
require '../../Session/Session_user.php';
require '../../Config_db/Metodos_db.php';
require '../../Config_db/Conexion_db.php';

$user_sesion = New User_session();
if(!isset($_SESSION['user'])){
    echo"<script> alert('Debes iniciar sesión');document.location.href = '../Login/Login_Frontend.php';</script>";
    //header('Location: ../Login/Login_Frontend.php');   
}

$database = new connection_db();
$db = $database->conectar();
$metodos = new Metodos_users($db);
$user = $metodos->Buscar_user($_SESSION['user']);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
    <link rel="stylesheet" href="micuenta.css">
</head>
<body>
    <h3>Perfil de usuario</h3>
    <?php 
        echo '<p>Nombre: ' . $user['name_last'] . '</p>';
        echo '<p>Cedula: ' . $user['ced_user'] . '</p>';
        echo '<p>Email: ' . $user['email_user'] . '</p>';
    ?>
    <div class="container">
        <a href="../Home.php">Home</a>
        <a href="Mis_Tickets.php">Mis Bolestos</a><br>
        <br><a href="Editar_user.php">Editar usuario</a><br>
    </div>
    
    

    
</body>
</html>