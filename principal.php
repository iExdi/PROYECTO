<?php

// Conexión a la base de datos
include "conexion.php";

// Funciones para leer, crear y eliminar datos
function leerDatos()
{
  // Conectarse a la base de datos
  $conexion = new mysqli("localhost:3308", "root", "123456", "asistencia");

  // Ejecutar la consulta
  $consulta = $conexion->query("SELECT * FROM usuarios");

  // Obtener los resultados
  $resultados = $consulta->fetchAll();

  // Cerrar la conexión
  $conexion = null;

  // Devolver los resultados
  return $resultados;
}

function crearDatos($nombre_usuario, $contraseña)
{
  // Conectarse a la base de datos
  $conexion = new mysqli("localhost:3308", "root", "123456", "asistencia");

  // Ejecutar la consulta
  $consulta = $conexion->query("INSERT INTO usuarios (nombre_usuario, contraseña) VALUES ('$nombre_usuario', '$contraseña')");

  // Cerrar la conexión
  $conexion = null;

  // Devolver el resultado
  return $consulta;
}

function eliminarDatos($nombre_usuario)
{
  // Conectarse a la base de datos
  $conexion = new mysqli("localhost:3308", "root", "123456", "asistencia");

  // Ejecutar la consulta
  $consulta = $conexion->query("DELETE FROM usuarios WHERE nombre_usuario = '$nombre_usuario'");

  // Cerrar la conexión
  $conexion = null;

  // Devolver el resultado
  return $consulta;
}

// Inicio del código principal

// Lectura de datos
$datos = leerDatos();

// Mostrar datos
foreach ($datos as $registro) {
  echo $registro['nombre_usuario'] . " - " . $registro['contraseña'] . "<br>";
}

// Creación de datos
$nombre_usuario = "Juan";
$contraseña = "123456";

$creado = crearDatos($nombre_usuario, $contraseña);

if ($creado) {
  echo "El usuario $nombre_usuario se creó correctamente.";
} else {
  echo "Ocurrió un error al crear el usuario.";
}

// Eliminación de datos
$nombre_usuario = "Juan";

$eliminado = eliminarDatos($nombre_usuario);

if ($eliminado) {
  echo "El usuario $nombre_usuario se eliminó correctamente.";
} else {
  echo "Ocurrió un error al eliminar el usuario.";
}

// Fin del código principal
?>