<?php

include_once("../../includes/admin/header_admin.php");
// include_once("../../controllers/admin/actualizar_docente.php");
$dni = $_GET["dni"]; // Obtener el DNI del docente a actualizar

$sql = "SELECT * FROM docentes WHERE dni = '$dni'";
$resultado = mysqli_query($conexion, $sql);

if (mysqli_num_rows($resultado) > 0) {
    $row = mysqli_fetch_assoc($resultado);

    // Mostrar los datos en el formulario
}
?>
<script>
    function cargarDocente() {
        var urlParams = new URLSearchParams(window.location.search);
        var dni = urlParams.get('dni');
        if (dni) {
            document.getElementById('dni').value = dni;
            // Aquí puedes agregar una llamada AJAX para cargar el resto de los campos del formulario
        }
    }

</script>
</head>

<body onload="cargarDocente()">
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-5 border py-3 m-1">
                <h2 class="text-center">Actualizar Docente</h2>

                <form action="../../controllers/admin/actualizar_docente.php" method="post"
                    enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="dni">DNI:</label>
                        <input type="text" name="dni" id="dni" class="form-control" required readonly>
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" name="nombre" id="nombre" value="<?= $row['nombre'] ?>" class="form-control"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="apellido">Apellido:</label>
                        <input type="text" name="apellido" id="apellido" value="<?= $row['apellido'] ?>"
                            class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="curso">Curso:</label>
                        <input type="text" name="curso" id="curso" value="<?= $row['curso'] ?>" class="form-control"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="foto">Foto:</label>
                        <input type="file" name="foto" id="foto" value="<?= $row['foto'] ?>" class="form-control-file form-control"
                            required>
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
    
    <?php

    include_once("../../includes/admin/footer_admin.php")

        ?>