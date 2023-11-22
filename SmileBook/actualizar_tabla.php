<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// Conectar a la base de datos (debes configurar tus credenciales)
$conexion = new mysqli("localhost", "oscar2", "oscar123", "smilebook");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Consulta SQL para obtener todos los productos
$sql = "SELECT id, nombres, fecha_nacimiento	 FROM pacientes1";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    // Imprime los datos en la tabla
    echo '<div class="lista-pacientes">';
    echo '<table id="tabla-pacientes">';
    echo '<tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Fecha nacimiento</th>
            <th>Acciones</th>
          </tr>';

    // Imprime los datos de cada fila
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["nombres"] . "</td><td>" . $row["fecha_nacimiento"] . "</td><td>Acciones</td></tr>";
    }
    echo "</table>";
    echo "</div>";
} else {
    echo "0 resultados";
}

// Cierra la conexión a la base de datos
$conexion->close();
?>
