<?php
// Establece la conexión con la base de datos
$servername = "localhost";
$username = "oscar2";
$password = "oscar123";
$dbname = "smilebook";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Recibe los datos del formulario
    $nombre_producto = $_POST['nombre_producto'];
    $cantidad = $_POST['cantidad'];
    $estado = $_POST['estado'];
    $compras = $_POST['compras'];

    // Inserta los datos en la tabla "productos"
    $sql = "INSERT INTO productos (nombre_producto, cantidad, estado, compras) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$nombre_producto, $cantidad, $estado, $compras]);

    // Envía una respuesta JSON de éxito
    header("Content-Type: application/json");
    http_response_code(200); // Código de estado HTTP 200 (OK)
    echo json_encode(['success' => true]);
} catch (PDOException $e) {
    // Manejo de errores
    header("Content-Type: application/json");
    http_response_code(500); // Código de estado HTTP 500 (Error interno del servidor)
    echo json_encode(['error' => $e->getMessage()]);
}

// Cierra la conexión
$conn = null;
?>
