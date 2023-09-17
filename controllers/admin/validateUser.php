<?php
include_once "../../model/database/conexion.php";



// Verificar si se ha enviado el formulario
if($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtener los valores del formulario
  $nombre_usuario = mysqli_real_escape_string($conexion, $_POST['username']);
  $contraseña = mysqli_real_escape_string($conexion, $_POST['password']);

  // Consultar la base de datos para verificar si el nombre de usuario y la contraseña son válidos
  $sql = "SELECT * FROM login WHERE username='$nombre_usuario' AND password='$contraseña'";
//   $consulta = "SELECT id FROM usuarios WHERE nombre_usuario = '$nombre_usuario' and contraseña = '$contraseña'";
  $resultado = mysqli_query($conexion, $sql);
  $fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
  $count = mysqli_num_rows($resultado);

  // Si el nombre de usuario y la contraseña son válidos, iniciar una sesión PHP y redirigir al usuario a una página de inicio de sesión exitoso
  if($count == 1) {
    $_SESSION['username'] = $nombre_usuario;
    header("location:dashboard.php");
  } else {
    // Si el nombre de usuario y la contraseña no son válidos, mostrar un mensaje de error en el formulario de inicio de sesión
    $error = "Nombre de usuario o contraseña incorrectos";
  }
}

