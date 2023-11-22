<?php
require "ConftPagina.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Nombre = $_POST["Nombre"];
    $Edad = $_POST["Edad"];
    $Fecha = $_POST["Fecha"];

    // Realiza la inserción en la base de datos
    $sql = "INSERT INTO pacientes (Nombre, Edad, Fecha) VALUES ('$Nombre', $Edad, '$Fecha')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro de paciente exitoso.";
    } else {
        echo "Error al registrar al paciente: " . $conn->error;
    }
}
?>

