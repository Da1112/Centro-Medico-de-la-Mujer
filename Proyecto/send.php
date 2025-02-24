<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("conexion.php");  

// Verific si el formulario fue enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // verific si los datos llegan
    echo "Recibiendo datos del formulario...<br>";
    echo "Nombre: " . $_POST["name"] . "<br>";
    echo "Teléfono: " . $_POST["phone"] . "<br>";
    echo "Correo: " . $_POST["email"] . "<br>";
    echo "Mensaje: " . $_POST["mensaje"] . "<br>";

    // Verificación básica de los campos
    if (
        !empty($_POST["name"]) &&
        !empty($_POST["phone"]) &&
        !empty($_POST["email"]) &&
        !empty($_POST["mensaje"])
    ) {
        // limp los campos
        $name = $conex->real_escape_string(trim($_POST["name"]));
        $phone = $conex->real_escape_string(trim($_POST["phone"]));
        $email = $conex->real_escape_string(trim($_POST["email"]));
        $mensaje = $conex->real_escape_string(trim($_POST["mensaje"]));

        // Consulta SQL 
        $consulta = $conex->prepare("INSERT INTO datos (nombre, telefono, email, mensaje) VALUES (?, ?, ?, ?)");
        $consulta->bind_param("ssss", $name, $phone, $email, $mensaje);

        // Ejecuta query y verificar si fue exitosa o no
        if ($consulta->execute()) {
            echo "<script>alert('Los datos han sido enviados exitosamente.'); window.location.href='http://localhost/Proyecto';</script>";
        } else {
            echo "<script>alert('Error al enviar los datos: " . $conex->error . "');</script>";
        }

        $consulta->close();  // Ceierra la consulta
    } else {
        echo "<script>alert('Por favor, complete todos los campos.');</script>";
    }
} else {
    echo "Método no soportado.";
}
?>
