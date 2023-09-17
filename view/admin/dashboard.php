<?php

include_once("../../includes/admin/header_admin.php");


?>
<button onclick="toggleDiv() "  class="square-btn">Agregar docentes<i class="bi bi-caret-down"></i></button>

<div id="miDiv" style="display:none;">
    <div class="container ">
        <div class="row justify-content-center ">
            <form action="../../controllers/admin/insertar.php" method="post" enctype="multipart/form-data">
                <div class="form-group col-md-5 offset-md-3 border py-4">

                    <h2 class="my-1 text-center"> </h2>
                    <label for="dni">DNI:</label>
                    <input type="text" class="form-control" name="dni" id="dni" required>
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" required>

                    <label for="apellido">Apellido:</label>
                    <input type="text" class="form-control" name="apellido" id="apellido" required>

                    <label for="curso">Curso:</label>
                    <input type="text" class="form-control" name="curso" id="curso" required>
                    <label for="foto">Foto:</label>
                    <input type="file" class="form-control-file form-control" name="foto" id="foto" accept="image/*" required>
                    <button type="submit" class="btn btn-primary my-2" value="Agregar " >Agregar <i class="bi bi-upload"></i></button>
                </div>

            </form>
        </div>

    </div>

</div>
<script>
    function toggleDiv() {
        var div = document.getElementById("miDiv");
        if (div.style.display === "none") {
            div.style.display = "block";
        } else {
            div.style.display = "none";
        }
    }
</script>
<?php
// Incluir el archivo de configuración
include '../../model/database/conexion.php';
$sql = "SELECT dni, nombre, apellido, curso, foto FROM docentes";
$result = $conexion->query($sql);
?>
<div class="card shadow table-responsive my-5 p-2">
    <h2 class="text-center  ">Docentes</h2>
    <table class="table table-bordered:">
        <thead style=" background-color: #003D83; color:white;">
            <tr>
                <th>DNI</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Curso</th>
                <th>Foto</th>
                <th></th>
            </tr>
            <!-- Hover added -->

        </thead>
        <tbody>
            <?php
            // Verificar si hay resultados
            if ($result->num_rows > 0) {
                // Mostrar los datos de cada fila
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["dni"] . "</td>";
                    echo "<td>" . $row["nombre"] . "</td>";
                    echo "<td>" . $row["apellido"] . "</td>";
                    echo "<td>" . $row["curso"] . "</td>";
                    echo "<td><img src='../../resource/uploads/" . $row["foto"] . "' alt='Foto' width='50' height='50'></td>";
                    echo "<td align='center'>  
                        
                        <a type='button' href='formulario_actualizar.php?dni=" . $row["dni"] . "' class='btn btn-secondary m-1'> Editar<i class='bi bi-arrow-repeat'></i></a>
                        <a type='submit' href='../../controllers/admin/eliminar_docentes.php?dni=" . $row["dni"] . "' class='btn m-1' onclick='mostrarAlert(); return false;'> <i class='bi bi-trash'></i></a>
                        
                        </td>";
                    echo "</tr>";

                }
            } else {
                echo "<tr><td colspan='5'>0 resultados</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>
<script>
    function mostrarAlert() {
        if (confirm("¿Está seguro que desea eliminar este registro?")) {
            // Si el usuario da clic en "Aceptar" en el alert, se envía el formulario para eliminar el registro
            document.getElementById("formulario_eliminar").submit();
        } else {
            // Si el usuario da clic en "Cancelar" en el alert, no se hace nada
            return false;
        }
    }
</script>
<?php
// Cerrar conexión
$conexion->close();
?>

<?php

include_once("../../includes/admin/footer_admin.php")

    ?>