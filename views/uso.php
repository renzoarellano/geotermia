<?php


require_once 'config.php';
require_once 'common/lib/phpmailer/class.phpmailer.php';
include 'models/sendmail.class.php';

$mail = new Sendmailweb();


# Mails receptores
$argMailRecep = array(
	'AddAddress'=>array('CORREO1','CORREO2')//CORREO NORMAL
	,'AddBCC'=>array('CORREO1','CORREO2')//COPIA OCULTA
);


#Datos dinamicos para Mailing
$argMail = array(
	"xxxxxx" =>$xxxxxxx
);

# Obtiene el html de mailing
$htmlMail = $mail->NOMBRE_DE_METODO($argMail);

# Método que envia correo
$send = $mail->sendMail($htmlMail,$argMailRecep,'AQUI VA EL ASUNTO DE CORREO');


if($send==''){
	# ERROR DE ENVIO
}else if($send==1){
	# ENVIO EXITOSO
}


 ?>
