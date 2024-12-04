<?php
require '../../Session/Session_user.php';
require '../../Config_db/Metodos_db.php';
require '../../Config_db/Conexion_db.php';
require '../../Config_db/Eventos_db.php';
$user_sesion = New User_session();
if(!isset($_SESSION['user'])){
    echo"<script> alert('Debes iniciar sesión');document.location.href = '../Login/Login_Frontend.php';</script>";
    //header('Location: ../Login/Login_Frontend.php');   
}

$database = new connection_db();
$db = $database->conectar();
$metodos = new Metodos_users($db);
$user = $metodos->Buscar_user($_SESSION['user']);
$event = new Eventos_db($db);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Bolestos info</title>
</head>
<body>
    <h4>Tickets comprados info</h4>

    <?php
        $factura = $event->ver_factura($user['id_user']);
        $filas = count($factura);
        for($x=0;$x<$filas;$x++){
            $fiesta = $event->ver_evento($factura[$x]['id_event']);
            $boleto = $event->ver_ticket($factura[$x]['id_ticket']);
            echo 'Evento: '.$fiesta['tittle_event'].'<br>';
            echo 'Tipo de boleto: '.$boleto['tipo_ticket'].'<br>';
            echo 'Cantidad de boletos adquiridos: '.$factura[$x]['qty_ticket'].'<br>';
            echo 'Total pagado: $'.$factura[$x]['Total_pago'].'<br><br>';
        }
        /*print_r($factura);
        echo '<br>';
        $fiesta = $event->ver_evento($factura[0]['id_event']);
        print_r($fiesta);
        echo '<br>';
        $boleto = $event->ver_ticket($factura[0]['id_ticket']);
        print_r($boleto);
        echo '<br>';*/
    ?>


<br><br><a href="../Home.php">Home</a>
    
</body>
</html>