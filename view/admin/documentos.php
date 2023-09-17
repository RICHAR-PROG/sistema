<?php
include_once("../../includes/admin/header_admin.php");
?>

<div class="container">
    <div class="row justify-content-center py-4">
        <div class="col-md-10 col-lg-8 col-xl-6 border p-4">
            <form method="post" action="../../controllers/admin/guardar_doc.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="titulo">Título:</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" required>
                </div>
                <div class="form-group">
                    <label for="libro">Libro:</label>
                    <input type="file" id="archivo" class="form-control" name="archivo">
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
    <div class="card shadow table-responsive my-5 p-2">
        <table class="table table-bordered: ">
            <thead style=" background-color: #003D83; color:white;">
                <tr>
                    <th>Id</th>
                    <th>Titulo del Doc.</th>
                    <th>Ruta</th>
                    <th>fecha ingreso</th>
                    <th></th>
                </tr>
                <!-- Hover added -->

            </thead>
            <?php

            // Preparar la consulta SQL
            $sql = "SELECT * FROM documentos";

            // Ejecutar la consulta SQL
            $resultado = $conexion->query($sql);

            // Mostrar los datos en una tabla de Bootstrap
            if ($resultado->num_rows > 0) {

                while ($fila = $resultado->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . $fila["id"] . '</td>';
                    echo '<td>' . $fila["titulo"] . '</td>';
                    echo '<td><a href="' . $fila["libro"] . '">' . basename($fila["libro"]) . '</a></td>';
                    echo '<td>' . $fila["fecha_ingreso"] . '</td>';
                    echo '</tr>';
                }
                echo '</div>';
                echo '</div>';
                echo '</div>';
            } else {
                echo 'No se han encontrado datos';
            }

            // Cerrar la conexión
            $conexion->close();
            ?>
            </tbody>
    </div>
    </table>
</div>



<?php

include_once("../../includes/admin/footer_admin.php")

    ?>