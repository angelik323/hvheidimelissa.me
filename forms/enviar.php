<?php
if(isset($_POST['enviar'])) {
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['msg_subject'];
        $message = $_POST['message'];

        $header = 'From: ' . $mail . " \r\n";
        $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
        $header .= "Mime-Version: 1.0 \r\n"; 
        $header .= "Content-Type: text/plain";

        mail($email, $subject, $message, $header utf8_decode($email, $subject, $message, $header));
        if(mail) {
            echo "<h4>¡Correo enviado exitosamente!</h4>";
        }
    }
}
?>


$message = "Este mensaje fue enviado por: " . $name . " \r\n";
$message .= "Su e-mail es: " . $email . " \r\n";
$message .= "Asunto: " . $subject . " \r\n";
$message .= "Mensaje: " . $_POST['message'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'angelica.loaiza323@gmail.com';
$asunto = 'Asunto del mensaje';

mail($para, $asunto, utf8_decode($message, $header));

header("Location:index.html");