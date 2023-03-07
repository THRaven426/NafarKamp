<?php
/**
 * @title: Proyecto integrador Ev01 - Acceso al sistema.
 * @description:  Script PHP para acceder al sistema
 *
 * @version    0.1
 *
 * @author ander_frago@cuatrovientos.org
 */

require_once 'header.php'; 
$error = $user = $pass = "";
// Al pulsar el boton del formulario se recarga la misma página, volviendo a ejecutar este script.
// En caso de que se haya  completado los valores del formulario se verifica la existencia de usuarios en la base de datos
// para los valores introducidos.
if (isset($_POST['user']))
{
  $user = $_POST['user'];
  $pass = $_POST['password'];

  if ($user == "" || $pass == ""){
      $error = "Debes completar todos los campos<br>";
  }
  else
  {
      // TODO Esta la consulta de base de datos correspondiente para verificar si el usuario existe
    $result = queryMysql("SELECT * FROM usuarios WHERE user='$user' AND password='$pass'");
    
    if ($result->num_rows == 0)
    {
      $error = "<span class='error'>Email/Contraseña invalida</span><br><br>";
    }
    else
    {
      // TODO Realiza la gestión de la sesión de usuario:
      // Almacena en la variables de sesión user el valore de $user
      //
      $_SESSION['user']=$_POST['user'];

      // Control de vida de la sesión antes de que expire
      if (!isset($_SESSION['CREATED'])) {
        $_SESSION['CREATED'] = time();
      } else if (time() - $_SESSION['CREATED'] > 1800) {
        // session started more than 30 minutes ago
        session_regenerate_id(true);    // change session ID for the current session and invalidate old session ID
        $_SESSION['CREATED'] = time();  // update creation time
      }
        
      // En caso de un registro  exitoso 
      // La gestión de usuario en la página principal se hace a través de la variable de sesión
      header('Location: intranet.php');
    }
  }
}
// En caso de que no se haya completado el formulario,
// analizamos si hay variable de sesión almacenada.
else if (isset($_SESSION['user'])){
    // En caso de que exista variable de sesión redireccionamos a la página principal
     header('Location: index.php'); 
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Nafarkamp | Login </title>
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="./assets/css/footer.css">  
</head>
<body>
    <section id="sec-login">
        <div class="container">
            <div class="title">Iniciar Sesión</div>
            <form role="form" method="POST" action="login.php">
                <div class="field">
                    <input type="text" name="user" class="form-control" id="user" placeholder="Usuario" required autofocus>
                </div>
                <div class="field">
                   <input type="password" name="password" class="form-control" id="password" placeholder="Contraseña" required>
                </div>
                <div class="field">
                    <input type="submit" value="Acceder">
                </div>
            </form>
        </div>
    </section>
</body>
 <?php
    include('footer.php')
 ?>
</html>