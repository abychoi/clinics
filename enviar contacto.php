<?php
// Configuración de la base de datos
$host = 'localhost';
$dbname = 'clinica'; // Nombre de la base de datos
$username = 'root'; // Usuario por defecto de XAMPP
$password = ''; // Contraseña por defecto de XAMPP (generalmente está vacía)

// Crear conexión
$conn = new mysqli($host, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $conn->real_escape_string($_POST['nombre']);
    $email = $conn->real_escape_string($_POST['email']);
    $mensaje = $conn->real_escape_string($_POST['mensaje']);

    // Preparar y ejecutar la consulta SQL
    $sql = "INSERT INTO contactos (nombre, email, mensaje) VALUES ('$nombre', '$email', '$mensaje')";

    if ($conn->query($sql) === TRUE) {
        echo "Gracias por tu mensaje, $nombre. Tu mensaje ha sido recibido.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();
}
?>
