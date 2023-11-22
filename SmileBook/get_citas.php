<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

$conexion = new mysqli("localhost", "oscar2", "oscar123", "smilebook");

if ($conexion->connect_error) {
    die("La conexión ha fallado: " . $conexion->connect_error);
}

$sql = "SELECT * FROM citas";
$resultado = $conexion->query($sql);

$citas = array();

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $citas[] = array(
            'title' => $row['paciente_id'],
            'start' => $row['start'],
            'end' => $row['end']
        );
    }
}

echo json_encode($citas);

$conexion->close();
?>
