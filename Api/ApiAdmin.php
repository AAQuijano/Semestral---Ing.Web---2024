<?php
require '../Session/Session_user.php';
require '../Config_db/Conexion_db.php';
require '../Config_db/Metodos_db.php';
require 'ApiClass.php';

$databate = new connection_db();
$db = $databate->conectar();
$metodos = new Metodos_users($db);
$user_sesion = New User_session();
if(!isset($_SESSION['user'])){
    echo"<script> alert('Debes iniciar sesión');document.location.href = '../Login/Login_Frontend.php';</script>";
    exit(); 
}
$user = $metdos->Buscar_user($_SESSION['user']);
if($user['id_rol'] == 1){
    echo"<script> alert('Tu nivel de usuario no es suficiente para ingresar a esta pestaña');document.location.href = '../Vistas/Home.php';</script>"; 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Administrador</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .div-admin {
            background-color: white;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 80%;
            max-width: 800px;
            overflow-y: auto;
            max-height: 90vh;
        }

        h3, h4 {
            text-align: center;
            color: #333;
        }

        pre {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            overflow-x: auto;
            white-space: pre-wrap;
            word-wrap: break-word;
            margin: 10px 0;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            color: #007BFF;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="div-admin">
        <h3>Info de base de datos | View Administrador</h3>
        <?php
            $api = new ApiClass($db);
            $users = $api->Read_usuarios();
            $roles = $api->Read_roles();
            $eventos = $api->Read_eventos();
            $tickets = $api->Read_tickets();
            $images = $api->Read_images();
            $facturas = $api->Read_facturas();
            echo '<h4>Usuarios</h4>';
            echo '<pre>' . json_encode($users, JSON_PRETTY_PRINT) . '</pre>';
            echo '<h4>Roles de usuarios</h4>';
            echo '<pre>' . json_encode($roles, JSON_PRETTY_PRINT) . '</pre>';
            echo '<h4>Eventos</h4>';
            echo '<pre>' . json_encode($eventos, JSON_PRETTY_PRINT) . '</pre>';
            echo '<h4>Tickets</h4>';
            echo '<pre>' . json_encode($tickets, JSON_PRETTY_PRINT) . '</pre>';
            echo '<h4>Imágenes</h4>';
            echo '<pre>' . json_encode($images, JSON_PRETTY_PRINT) . '</pre>';
            echo '<h4>Facturas</h4>';
            echo '<pre>' . json_encode($facturas, JSON_PRETTY_PRINT) . '</pre>';
        ?>
        <br><a href="../Vistas/Home.php">Home</a>
    </div>
</body>
</html>