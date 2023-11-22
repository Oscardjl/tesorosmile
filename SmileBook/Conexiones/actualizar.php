<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si se recibió la ID del producto a actualizar
    if (isset($_POST['id'])) {
        $id = $_POST['id'];

        // Conectar a la base de datos (debes configurar tus credenciales)
        $conexion = new mysqli("localhost", "oscar2", "oscar123", "smilebook");

        // Verificar la conexión
        if ($conexion->connect_error) {
            die("Error de conexión: " . $conexion->connect_error);
        }

        // Obtener los datos del formulario
        $nombre_producto = $_POST["nombre_producto"];
        $cantidad = $_POST["cantidad"];
        $estado = $_POST["estado"];
        $compras = $_POST["compras"];

        // Consulta SQL para actualizar el producto
        $sql = "UPDATE productos SET nombre_producto = '$nombre_producto', cantidad = $cantidad, estado = '$estado', compras = '$compras' WHERE id = $id";

        if ($conexion->query($sql) === TRUE) {
            echo "Producto actualizado correctamente.";
        } else {
            echo "Error al actualizar el producto: " . $conexion->error;
        }

        // Cerrar la conexión
        $conexion->close();
    } else {
        echo "ID de producto no proporcionada.";
    }
}
?>