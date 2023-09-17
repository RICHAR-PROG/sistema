<?php

include_once("../../includes/user/header.php");
include_once("../../model/database/conexion.php");
?>

<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Nuestro equipo</h2>
            </div>
            <div class="col-12">
                <a href="../user/index.php">Inicio</a>
                <a href="../user/docentes.php">Docentes</a>
            </div>
        </div>
    </div>
</div>
<!-- Team Start -->
<div class="team">
    <div class="container">
        <div class="section-header text-center">
            <p>Nuestro equipo</p>
            <h2>CONOZCA A NUESTROS DOCENTES</h2>    
        </div>
        <?php
        // Paso 2: Obtener los datos de la base de datos
        $resultado = mysqli_query($conexion, "SELECT nombre,apellido, curso, foto FROM docentes");

        echo "<div class='row'>";
        while ($fila = mysqli_fetch_assoc($resultado)) {
            echo "<div class='col-lg-3 col-md-6 wow fadeInUp' data-wow-delay='0.2s'>";
            echo '<div class="team-item">';
            echo '<div class="team-img">';
            echo '<img src="../../resource/uploads/' . $fila['foto'] . '" height="280px" alt="' . $fila['nombre'] . '">';
            echo '</div>';
            echo '<div class="team-text">';
            echo '<h2>' . $fila['nombre'] . ' ' . $fila['apellido'] . '</h2>';
            echo '<br>';
            echo '<p>' . $fila['curso'] . '</p>';
            echo '</div>';
            echo '<div class="team-social">';
            echo '<a class="social-tw" href=""><i class="fab fa-twitter"></i></a>';
            echo '<a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>';
            echo '<a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>';
            echo '<a class="social-in" href=""><i class="fab fa-instagram"></i></a>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        echo "</div>";
        ?>

    </div>
</div>
<!-- About End -->

<?php

include_once("../../includes/user/footer.php")

    ?>