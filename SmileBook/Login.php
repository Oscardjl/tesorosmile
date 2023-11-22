<?php
// Establece la conexión a la base de datos (reemplaza estos valores con los tuyos)


// Crea la conexión
$conn = new mysqli("localhost", "oscar2", "oscar123", "smilebook");

// Verifica la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Verifica si se enviaron datos de inicio de sesión
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera los datos del formulario
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contraseña"];

    // Consulta SQL para verificar las credenciales
    $sql = "SELECT * FROM usuario WHERE Usuario = '$usuario' AND Contraseña = '$contrasena'";
    $result = $conn->query($sql);

    // Verifica si hay una coincidencia en la base de datos
    if ($result->num_rows > 0) {
        // Redirecciona a la página de inicio
        header("Location: inicio.html");
        exit();
    } else {
        // Muestra un mensaje de error
        echo "Usuario o contraseña incorrectos";
    }
}

// Cierra la conexión a la base de datos
$conn->close();
?>
