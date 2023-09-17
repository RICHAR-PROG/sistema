<?php
include_once "../../model/database/conexion.php";

// Obtener datos del formulario
$dni = $_POST['dni'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$curso = $_POST['curso'];

// Procesar imagen
$image_name = $_FILES['foto']['name'];
$image_tmp_name = $_FILES['foto']['tmp_name'];
$image_size = $_FILES['foto']['size'];
$image_ext = pathinfo($image_name, PATHINFO_EXTENSION);
$image_new_name = uniqid() . "." . $image_ext;

// Directorio para guardar imágenes
$upload_dir = "../../resource/uploads/";

// Mover imagen al directorio
if (!move_uploaded_file($image_tmp_name, $upload_dir . $image_new_name)) {
  die("Error al subir la imagen.");
}

// Consulta SQL para insertar datos
$sql = "INSERT INTO docentes (dni, nombre, apellido, curso, foto)
VALUES ('$dni', '$nombre', '$apellido', '$curso', '$image_new_name')";

// Ejecutar consulta
if ($conexion->query($sql) === TRUE) {
  echo "Estudiante agregado exitosamente.";
} else {
  echo "Error: " . $sql . "<br>" ;
}

// Cerrar conexión
$conexion->close();
header('Location: ../../../../view/admin/dashboard.php');

?>