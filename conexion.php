<?php
$host_db = "localhost:3308";
$user_db = "root";
$pass_db = "123456";
$db_name = "asistencia";

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

if ($creado) {
    echo "El usuario $nombre_usuario se creó correctamente.";
  } else {
    echo "Ocurrió un error al crear el usuario: " . $conexion->error;
  }

// Validación de nombre de usuario
if (empty($nombre_usuario)) {
    echo "El nombre de usuario no puede estar vacío.";
    exit();
  }
  
  // Validación de contraseña
  if (empty($contraseña)) {
    echo "La contraseña no puede estar vacía.";
    exit();
  }
  
  // Creación de datos
  $creado = crearDatos($nombre_usuario, $contraseña);
?>