<?php
// Configuración de la conexión a la base de datos
include '../../model/database/conexion.php';


// Obtener los datos del formulario
$dni = $_POST['dni'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$curso = $_POST['curso'];

// Procesar imagen  
$foto = $_FILES['foto']['name'];
$target_dir = "../../resource/uploads/";
$target_file = $target_dir . basename($foto);
move_uploaded_file($_FILES['foto']['tmp_name'], $target_file);

// Preparar la consulta SQL para actualizar
$sql = "UPDATE docentes SET nombre=?, apellido=?, curso=?, foto=? WHERE dni=?";

// Ejecutar la consulta
$stmt = $conexion->prepare($sql);
$stmt->bind_param("ssssi", $nombre, $apellido, $curso, $foto, $dni);
$result = $stmt->execute();
// $count=$result-> rowCount();
// if($count>0){
//     $datos=$stmt->fetch();

// }
if ($result) {
    echo "Docente actualizado correctamente.";
} else {
    echo "Error al actualizar el docente: " ;
}

// Cerrar conexión
$stmt->close();
$conexion->close();
header('Location: ../../../../view/admin/dashboard.php');

?>