<?php
// Aquí deberías manejar la conexión a tu base de datos
// y realizar la eliminación de la cita utilizando medidas de seguridad apropiadas.
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

$data = json_decode(file_get_contents("php://input"));

$pacienteId = $data->pacienteId;

// Aquí deberías realizar la eliminación en tu base de datos
// usando mysqli_query o PDO, por ejemplo.

// Ejemplo con mysqli
$conexion = new mysqli("localhost", "oscar2", "oscar123", "smilebook");

if ($conexion->connect_error) {
    die("La conexión ha fallado: " . $conexion->connect_error);
}

$sql = "DELETE FROM citas WHERE paciente_id = '$pacienteId'";

if ($conexion->query($sql) === TRUE) {
    echo json_encode(array("message" => "Cita eliminada con éxito"));
} else {
    echo json_encode(array("error" => $conexion->error));
}

$conexion->close();
?>
