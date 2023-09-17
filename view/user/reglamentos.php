<?php

include_once("../../includes/user/header.php")


    ?>
    
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Reglamentos</h2>
            </div>
            <div class="col-12">
                <a href="./index.php">Inicio</a>
                <a href="./docentes.php">Reglamentos</a>
            </div>
        </div>
    </div>
</div>


<?php
include('../../model/database/conexion.php');

$tmp = array();
$res = array();

$sel = $conexion->query("SELECT * FROM documentos");
while ($row = $sel->fetch_assoc()) {
    $tmp = $row;
    array_push($res, $tmp);
}
?>


<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-auto">
            <h1>Subir Archivos</h1>
        </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="col-8">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Nuevo
            </button>

            <table class="table mt-2">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">titulo</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($res as $val) { ?>
                        <tr>
                            <td>
                                <?php echo $val['id'] ?>
                            </td>
                            <td>
                                <?php echo $val['titulo'] ?>
                            </td>
                            <td>
                                <button onclick="openModelPDF('<?php echo $val['libro'] ?>')" class="btn btn-primary"
                                    type="button">Ver Archivo Modal
                                </button>
                               
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="modalPdf" tabindex="-1" aria-labelledby="modalPdf" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ver archivo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <iframe id="iframePDF" frameborder="0" scrolling="no" width="100%" height="500px"></iframe>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
    crossorigin="anonymous"></script>
<script>
    function onSubmitForm() {
        var frm = document.getElementById('form1');
        var data = new FormData(frm);
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4) {
                var msg = xhttp.responseText;
                if (msg == 'success') {
                    alert(msg);
                    $('#exampleModal').modal('hide')
                } else {
                    alert(msg);
                }

            }
        };
        xhttp.open("POST", "upload.php", true);
        xhttp.send(data);
        $('#form1').trigger('reset');
    }
    function openModelPDF(url) {
        $('#modalPdf').modal('show');
        $('#iframePDF').attr('  ', '<?php echo 'http://' . $_SERVER['HTTP_HOST'] . '/uploadfile/'; ?>' + url);
    }
</script>

<?php

include_once("../../includes/user/footer.php")

    ?>

    