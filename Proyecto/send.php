<?php
error_reporting(E_ALL); // Mostrar todos los errores
ini_set('display_errors', 1); // Mostrar errores en pantalla
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar los datos del formulario
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    // Validar que los campos no estén vacíos
    if (!empty($name) && !empty($phone) && !empty($email) && !empty($mensaje)) {
        // Configurar el correo electrónico
        $to = "tucorreo@example.com"; // Cambia esto por tu dirección de correo
        $subject = "Nuevo mensaje de contacto";
        $body = "Nombre: $name\nTeléfono: $phone\nEmail: $email\nMensaje: $mensaje";
        $headers = "From: $email";

        // Enviar el correo
        if (mail($to, $subject, $body, $headers)) {
            echo "Mensaje enviado correctamente.";
        } else {
            echo "Error al enviar el mensaje.";
        }
    } else {
        echo "Todos los campos son obligatorios.";
    }
} else {
    echo "Método no soportado.";
}
?>