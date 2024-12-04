<?php
require '../Session/Session_user.php';
$userSession = new User_session();
if(isset($_SESSION['user']) && !empty($_SESSION['user'])){
    echo"<script> alert('Ya existe una sesion');document.location.href = '../Vistas/Home.php';</script>";

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO DE SESION</title>
    <link rel="stylesheet" href="Login.css">
</head>
<body>
    <h3>INICIO DE SESION</h3>
    <form method="post" action="Login_Backend.php">

        Nombre de usuario: <input type="text" name="NameL" required><br>
        Contraseña: <input type="password" name="passL" required><br>
        <input type="submit" name="boton0" value="Enviar"><br><br>  
        <a href="../Registro/Registro_Frontend.php">Registrarse</a><br>
        <!--<a href="../Index.php">Index</a><br>-->
        
    </form>
    
</body>
</html>