<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $especialidad = htmlspecialchars($_POST['especialidad']);
    $fecha = htmlspecialchars($_POST['fecha']);
    $disponibilidad = htmlspecialchars($_POST['disponibilidad']);
    $obra_social = htmlspecialchars($_POST['obra_social']);
    $dni = htmlspecialchars($_POST['dni']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    if (!empty($name) && !empty($phone) && !empty($email) && !empty($especialidad) && !empty($fecha) && !empty($disponibilidad) && !empty($obra_social) && !empty($dni) && !empty($mensaje)) {
        $host = "localhost";
        $dbname = "formulario";
        $username = "root";
        $password = "";

        try {
            $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $conn->prepare("INSERT INTO dato (nombre, telefono, email, especialidad, fecha, disponibilidad, obra_social, dni, mensaje) VALUES (:nombre, :telefono, :email, :especialidad, :fecha, :disponibilidad, :obra_social, :dni, :mensaje)");
            $stmt->bindParam(':nombre', $name);
            $stmt->bindParam(':telefono', $phone);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':especialidad', $especialidad);
            $stmt->bindParam(':fecha', $fecha);
            $stmt->bindParam(':disponibilidad', $disponibilidad);
            $stmt->bindParam(':obra_social', $obra_social);
            $stmt->bindParam(':dni', $dni);
            $stmt->bindParam(':mensaje', $mensaje);

            $stmt->execute();
            echo "Consulta enviada correctamente.";

            
            header("Refresh: 3; url=index.php"); 
        } catch (PDOException $e) {
            echo "Error al enviar la consulta: " . $e->getMessage();
        }

        $conn = null;
    } else {
        echo "Todos los campos son obligatorios.";
    }
} else {
    echo "Método no soportado.";
}
?>