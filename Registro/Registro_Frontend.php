<?php
require '../Session/Session_user.php';
$user_sesion = New User_session();
if(isset($_SESSION['user'])){
    echo"<script> alert('Debes cerrar sesion para registrar usuario');document.location.href = '../Vistas/Home.php';</script>";
    //header('Location: ../Login/Login_Frontend.php');   
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO DE USUARIO</title>
    <link rel="stylesheet" href="registro.css">
</head>
<body>
    <h3>REGISTRO DE USUARIO</h3><br>
    <form method="post" action="Registro_Backend.php">
        Nombre de usuario: <input type="text" name="NameR" required><br>
        Nombre y apellido: <input type="text" name="NameApe" required><br>
        Cedula: <input type="text" name="Ced"required><br>
        Correo: <input type="email"  name="Correo" required><br>
        Password: <input type="password" name="passR" required><br>

        <!--Telefono: <input type="text" name="TelP"><br>-->
        <input type="submit" name="boton0" value="Enviar"><br><br>
        <a href="../Login/Login_Frontend.php">Iniciar Sesion</a><br>
        <a href="../Index.php">Index</a><br>

    </form>
    
</body>
</html>