<?php
// Verifica si se recibieron datos del formulario
if(isset($_POST['register'])) {
    // Conexión a la base de datos (modifica los valores según tu configuración)
  

    $conn = new mysqli("localhost", "oscar2", "oscar123", "smilebook");

    // Verifica la conexión
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Obtiene los datos del formulario
    $fecha_elaboracion = $_POST['fecha_elaboracion'];
    $nombres = $_POST['nombres'];
    $apellido_paterno = $_POST['apellido_paterno'];
    $apellido_materno = $_POST['apellido_materno'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $genero = $_POST['genero'];
    $telefono_fijo = $_POST['telefono_fijo'];
    $telefono_movil = $_POST['telefono_movil'];
    $domicilio = $_POST['domicilio'];
    $codigo_postal = $_POST['codigo_postal'];
    $estado_civil = $_POST['estado_civil'];
    $tipo_sanguineo = $_POST['tipo_sanguineo'];
    $nombre_emergencia = $_POST['nombre_emergencia'];
    $contacto_emergencia = $_POST['contacto_emergencia'];
    $razon_consulta = $_POST['razon_consulta'];
    $consulto_profesional = $_POST['consulto_profesional'];
    $tomo_medicamento = $_POST['tomo_medicamento'];
    $nombre_medicamentos = $_POST['nombre_medicamentos'];
    $desde_cuando_medicamentos = $_POST['desde_cuando_medicamentos'];
    $obtuvo_resultados = $_POST['obtuvo_resultados'];
    $sintio_dolor = $_POST['sintio_dolor'];
    $tipo_dolor = implode(", ", $_POST['tipo_dolor']);  // Convertir array a cadena
    $ubicacion_dolor = $_POST['ubicacion_dolor'];
    $sufrio_golpe_dientes = $_POST['sufrio_golpe_dientes'];
    $cuando_golpe_dientes = $_POST['cuando_golpe_dientes'];
    $como_golpe_dientes = $_POST['como_golpe_dientes'];
    $fracturo_diente = $_POST['fracturo_diente'];
    $cual_fracturo_diente = $_POST['cual_fracturo_diente'];
    $recibio_tratamiento_fractura = $_POST['recibio_tratamiento_fractura'];
    $cual_tratamiento_fractura = $_POST['cual_tratamiento_fractura'];
    $dificultad_hablar = $_POST['dificultad_hablar'];
    $dificultad_masticar = $_POST['dificultad_masticar'];
    $dificultad_abrir_boca = $_POST['dificultad_abrir_boca'];
    $dificultad_tragar_alimentos = $_POST['dificultad_tragar_alimentos'];
    $estado_higiene_bucal = $_POST['estado_higiene_bucal'];
    $tratamiento_recomendado = $_POST['tratamiento_recomendado'];
    $costo_tratamiento = $_POST['costo_tratamiento'];
    $duracion_tratamiento = $_POST['duracion_tratamiento'];
    $visitas_seguimiento = $_POST['visitas_seguimiento'];

    // Consulta SQL para insertar los datos en la base de datos
    $sql = "INSERT INTO pacientes1 (fecha_elaboracion, nombres, apellido_paterno, apellido_materno, fecha_nacimiento, genero, telefono_fijo, telefono_movil, domicilio, codigo_postal, estado_civil, tipo_sanguineo, nombre_emergencia, contacto_emergencia, razon_consulta, consulto_profesional, tomo_medicamento, nombre_medicamentos, desde_cuando_medicamentos, obtuvo_resultados, sintio_dolor, tipo_dolor, ubicacion_dolor, sufrio_golpe_dientes, cuando_golpe_dientes, como_golpe_dientes, fracturo_diente, cual_fracturo_diente, recibio_tratamiento_fractura, cual_tratamiento_fractura, dificultad_hablar, dificultad_masticar, dificultad_abrir_boca, dificultad_tragar_alimentos, estado_higiene_bucal, tratamiento_recomendado, costo_tratamiento, duracion_tratamiento, visitas_seguimiento)
            VALUES ('$fecha_elaboracion', '$nombres', '$apellido_paterno', '$apellido_materno', '$fecha_nacimiento', '$genero', '$telefono_fijo', '$telefono_movil', '$domicilio', '$codigo_postal', '$estado_civil', '$tipo_sanguineo', '$nombre_emergencia', '$contacto_emergencia', '$razon_consulta', '$consulto_profesional', '$tomo_medicamento', '$nombre_medicamentos', '$desde_cuando_medicamentos', '$obtuvo_resultados', '$sintio_dolor', '$tipo_dolor', '$ubicacion_dolor', '$sufrio_golpe_dientes', '$cuando_golpe_dientes', '$como_golpe_dientes', '$fracturo_diente', '$cual_fracturo_diente', '$recibio_tratamiento_fractura', '$cual_tratamiento_fractura', '$dificultad_hablar', '$dificultad_masticar', '$dificultad_abrir_boca', '$dificultad_tragar_alimentos', '$estado_higiene_bucal', '$tratamiento_recomendado', '$costo_tratamiento', '$duracion_tratamiento', '$visitas_seguimiento')";

    // Ejecuta la consulta y verifica si fue exitosa
    if ($conn->query($sql) === TRUE) {
        echo "Registro exitoso";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Cierra la conexión a la base de datos
    $conn->close();
}
?>
