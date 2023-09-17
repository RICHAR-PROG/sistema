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
<div class=" row justify-content-center ">
    <div class="col-md-10 mt-1 p-5">
        <div class="card">
            <div class="card-body">
                <div class="container-fluid mb-8">
                    <div class="card shadow mb-4">
                        <table class="table">
                            <thead  style=" background-color: #003D83; color:white">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Documentos </th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>NORMAS DE CONVIVENCIA </td>
                                    <td><a name="" id="" class="btn " style=" background-color: #003D83; color:white" data-bs-toggle="modal"
                                            data-bs-target="#convivenciaDocentes" role="button">Ver</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>REGLAMENTO INTERNO</td>
                                    <td><a name="" id="" class="btn " style=" background-color: #003D83; color:white"data-bs-toggle="modal"
                                            data-bs-target="#reglamento" role="button">Ver</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>PROYECTO EDUCATIVO INSTITUCIONAL</td>
                                    <td><a name="" id="" class="btn " style=" background-color: #003D83; color:white"data-bs-toggle="modal"
                                            data-bs-target="#pei" role="button">Ver</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>PLAN ANUAL DE TRABAJO</td>
                                    <td><a name="" id="" class="btn " style=" background-color: #003D83; color:white" data-bs-toggle="modal"
                                            data-bs-target="#pat" role="button">Ver</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>


<!-- Modal normas de convivencia entre docentes -->
<div class="modal fade " id="convivenciaDocentes" tabindex="-1" aria-labelledby="convivenciaDocentes"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">NORMAS DE CONVIVENCIA</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <object class="PDFdoc" width="100%" height="500px" type="application/pdf"
                    data="../resource/pdf/normas.pdf"></object>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<br>

<!-- Modal normas de PEI -->
<div class="modal fade " id="pei" tabindex="-1" aria-labelledby="pei" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">PEI</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
                <object class="PDFdoc" width="100%" height="500px" type="application/pdf"
                    data="../resource/pdf/PEI.ABQ.pdf"></object>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal reglamento -->
<div class="modal fade " id="reglamento" tabindex="-1" aria-labelledby="reglamento"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">PAT</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <object class="PDFdoc" width="100%" height="500px" type="application/pdf"
                    data="../resource/pdf/REGLAMENTO.INTERNO.pdf"></object>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal pat-->
<div class="modal fade " id="pat" tabindex="-1" aria-labelledby="pat" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">NORMAS DE CONVIVENCIA ENTRE DOCENTES</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <object class="PDFdoc" width="100%" height="500px" type="application/pdf"
                    data="../resource/pdf/PAT.PP.2022ABQ.pdf"></object>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<?php

include_once("../../includes/user/footer.php")

?>