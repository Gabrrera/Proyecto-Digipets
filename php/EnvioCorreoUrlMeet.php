<?php

namespace EnvioCorreoMeet\EnvioCorreoMeet\EnvioCorreoMeet;  


require '../PHPMailer-PHPMailer-dd01c56/src/Exception.php';
require '../PHPMailer-PHPMailer-dd01c56/src/PHPMailer.php';
require '../PHPMailer-PHPMailer-dd01c56/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

global $Url ;
$Url = $_POST['Url'] ?? NULL;

global $NombreParaCita ;
$NombreParaCita = $_POST['Nombre'] ?? NULL;

$action = $_POST['miData'] ?? NULL;
if($action==("Enviar")){
    Enviar($Url, $NombreParaCita);
}else{
    echo "Ninguna acción enviada";
}

function Enviar($Url, $NombreParaCita){
    try {

        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        
        $mail = new PHPMailer(true);
        $mail->SMTPDebug = 2;  // Sacar esta línea para no mostrar salida debug
        $mail->isSMTP();
        $mail->Host = 'mail.digipets.com.co';//'sandbox.smtp.mailtrap.io';  // Host de conexión SMTP
        $mail->SMTPAuth = true;
        $mail->Username = 'f48cf08deef282';                 // Usuario SMTP
        $mail->Password = '053ce72ebec877';                           // Password SMTP
        $mail->SMTPSecure = 'tls';                            // Activar seguridad TLS
        $mail->Port = 587;                                    // Puerto SMTP
    
        #$mail->SMTPOptions = ['ssl'=> ['allow_self_signed' => true]];  // Descomentar si el servidor SMTP tiene un certificado autofirmado
        $mail->SMTPSecure = false;				// Descomentar si se requiere desactivar cifrado (se suele usar en conjunto con la siguiente línea)
        $mail->SMTPAutoTLS = false;			// Descomentar si se requiere desactivar completamente TLS (sin cifrado)
    
        $mail->setFrom('pruebasdigi00@gmail.com');		// Mail del remitente
        $mail->addAddress('destrucman23@gmail.com');     // Mail del destinatario
    
        $mail->isHTML(true);
        $mail->Subject = 'Contacto desde formulario';  // Asunto del mensaje
        $mail->Body    = 'Este es el contenido del mensaje <b>en negrita!</b> prueba <br></br>' . " " . $Url . $NombreParaCita;    // Contenido del mensaje (acepta HTML)
        $mail->AltBody = 'Este es el contenido del mensaje en texto plano';    // Contenido del mensaje alternativo (texto plano)
    
        $mail->send();
        echo 'El mensaje ha sido enviado';
        } catch (Exception $e) {
            echo 'El mensaje no se ha podido enviar, error: ', $mail->ErrorInfo;
        }
}
?>    