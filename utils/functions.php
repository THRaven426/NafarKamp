<?php
/**
 * @title: Proyecto integrador Ev01 - Funciones genéricas
 * @description:  Funciones para la conexión con base de datos y tratamiento de sesiones
 *
 * @version    0.1
 * @author ander_frago@cuatrovientos.org
 */

$dbhost  = '172.16.10.3';    // Probablemente no necesite modificación
$dbname  = 'nafarkampdb';   // Modificar esto..
$dbuser  = 'root';   // ...las variables según
$dbpass  = '4Vientos';   // ...tu instalación
$appname = "NAFARKAMP:"; // ...y configuración

// Cuando se llama a este script se realiza la conexión con la base de datos
$connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($connection->connect_error) die($connection->connect_error);
/***
/***
 * Función que lanza una consulta SQL contra la base de datos,
 * si ha ido bien devuelve la respuesta.
 */
function queryMysql($query)
{
  global $connection;
  $result = $connection->query($query);
  if (!$result) die($connection->error);
      return $result;
}

/***
 * Función para destruir la sesión
 */
function destroySession()
{
  $_SESSION=array();

  if (session_id() != "" || isset($_COOKIE[session_name()]))
    setcookie(session_name(), '', time()-2592000, '/');

  session_destroy();
  }
