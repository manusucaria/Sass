<?php
if (isset($_POST['enviar'])) {
    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['telefono']) && !empty($_POST['product'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono];
        $product = $_POST['product];
        $header = "from: noreply@example.com" . "\r\n";
        $header = "Reply-To: noreply@example.com" . "\r\n";
        $header = "X-Mailer: PHP/". phpversion();
        $mail = @mail($email,&asunto,$msj,$header);
        if ($email) {
            echo "<h4>¡Enviado Exitosamente!</h4>";
        }
    }
}