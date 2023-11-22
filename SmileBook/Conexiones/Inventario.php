<?php
                // Conectar a la base de datos (debes configurar tus credenciales)
                $conexion = new mysqli("localhost", "oscar2", "oscar123", "smilebook");

                // Verificar la conexión
                if ($conexion->connect_error) {
                    die("Error de conexión: " . $conexion->connect_error);
                }

                // Consulta SQL para obtener todos los productos
                $sql = "SELECT * FROM productos";
                $result = $conexion->query($sql);

                // Verificar si se obtuvieron resultados
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["nombre_producto"] . "</td>";
                        echo "<td>" . $row["cantidad"] . "</td>";
                        echo "<td>" . $row["estado"] . "</td>";
                        echo "<td>" . $row["compras"] . "</td>";
                        echo "<td>";
                        echo "<a class='editar' href='editar.php?id=" . $row["id"] . "' data-id='" . $row["id"] . "'>Editar</a>";
                        echo " | ";
                        echo "<a class='eliminar' href='eliminar.php?id=" . $row["id"] . "'>Eliminar</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>No hay productos disponibles</td></tr>";
                }

                // Cerrar la conexión
                $conexion->close();
                ?>