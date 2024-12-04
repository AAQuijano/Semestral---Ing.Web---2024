<?php
require '../Config_db/Conexion_db.php';
require '../Config_db/Metodos_db.php';
require '../Session/Session_user.php';
$userSession = new User_session();
/*if(isset($_SESSION['user']) && !empty($_SESSION['user'])){
    echo"<script> alert('Ya existe una sesion');document.location.href = '../Vistas/Home.php';</script>";

}*/
if(isset($_POST['NameL']) && !empty($_POST['NameL']) && isset($_POST['passL']) && !empty($_POST['passL'])){
    $name = $_POST['NameL'];
    $pass = $_POST['passL'];

    try{
        //Conectar con la base de datos
        
        $database = new connection_db();
        $db = $database->conectar();
        $verificar = new Metodos_users($db);
        echo '<br>';
        if($verificar->Login($name,$pass)){ 
            $userSession->UserSession_actual($name);
            //echo $_SESSION['user'];
            header('Location: ../Vistas/Home.php');
        }else{
            //$errorLogin = "Usuario y/o contraseña incorrecto";
            echo"<script> alert('Usuario y/o contraseña incorrecto');document.location.href = 'Login_Frontend.php';</script>";
            //header('Location: Login_Frontend.php');
            //include_once 'Login_Frontend.php';
        }
        
    }catch(PDOException $e){
        echo "Error de sentencia: " . $e->getMessage()."<br>";
        echo "Código de error SQLSTATE: " . $e->getCode()."<br>";
        echo "Detalles adicionales:"."<br>";
        print_r($e->errorInfo);
    }    
}