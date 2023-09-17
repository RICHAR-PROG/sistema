<?php
include_once "../../model/database/conexion.php";

// Obtener el ID del docente a eliminar
$docente_id = $_GET['dni'];

// Obtener la ruta de la imagen a eliminar
$sql = "SELECT foto FROM docentes WHERE dni = $docente_id";
$resultado = mysqli_query($conexion, $sql);
$datos = mysqli_fetch_assoc($resultado);
$ruta_imagen = $datos['foto'];

// Eliminar la fila de la tabla
$sql = "DELETE FROM docentes WHERE dni = $docente_id";
mysqli_query($conexion, $sql);

// Eliminar la imagen del servidor
if (file_exists($ruta_imagen)) {
    unlink($ruta_imagen);
}

// Redireccionar al listado de docentes
header('Location: ../../../../view/admin/dashboard.php');
?>