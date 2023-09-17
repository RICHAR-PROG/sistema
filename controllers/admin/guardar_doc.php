<?php
include_once ("../../model/database/conexion.php");
// Si se ha enviado el formulario, guardar los datos en la base de datos
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $titulo = $_POST["titulo"];
  $libro = $_FILES["archivo"]["name"];
  $libro_tmp = $_FILES["archivo"]["tmp_name"];

  // Mover el archivo cargado a la carpeta de archivos
  $ruta_archivo = "../../resource/pdf/" . basename($libro);
  move_uploaded_file($libro_tmp, $ruta_archivo);

  // Preparar la consulta SQL
  $sql = "INSERT INTO documentos (titulo, libro) VALUES ('$titulo', '$ruta_archivo')";

  // Ejecutar la consulta SQL
  if ($conexion->query($sql) === TRUE) {
    echo "Los datos se han guardado correctamente en la base de datos";
  } else {
    echo "Error al guardar los datos: " . $conexion;
  }
}

// Cerrar la conexión
$conexion->close();
?>