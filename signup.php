<?php
/**
 * @title: Proyecto integrador Ev01 - Registro en el sistema.
 * @description:  Script PHP para almacenar un nuevo usuario en la base de datos
 *
 * @version    0.1
 *
 * @author ander_frago@cuatrovientos.org
 */

require_once 'header.php';

$error = $user = $pass = "";

if (isset($_POST['user'])) {

  // TODO Realiza la lectura de los campos del formulario en $user y $pass
   $user=$_POST['user'];
   $pass=$_POST['password'];

  if ($user == "" || $pass == "") {
    $error="Debes completar todos los campos";
  }
  else {
    $result = queryMysql("SELECT * FROM usuarios WHERE user='$user'");

    if ($result->num_rows) {
      $error = "El usuario ya existe";
    }
    else {
      queryMysql("INSERT INTO usuarios(user,password) VALUES('$user', '$pass')");

      // TODO
      // Establecer el almacenamiento de usuario en una variable "user" almacenada en sesión
      // para que al pulsar sobre el menú de Acceder no se le vuelva a preguntar por usuario/contraseña
      $_SESSION['user']=$_POST['user'];

      header('Location: login.php?');

    }
  }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Nafarkamp | Register </title>
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="./assets/css/footer.css">  
</head>
<style>
    .form-error {
        color:red;
        position: relative;
        float: right;
        margin:10px 10px; 
    }
    input[type="submit"]{
        margin-top: 20px;
    }
</style>
<body>
    <section id="sec-login">
        <div class="container">
            <div class="title">Registro</div>
            <form role="form" method="POST" action="signup.php">
                <div class="field">
                <input type="text" name="user" class="form-control" id="user" accept="" placeholder="Usuario" required autofocus>
                </div>
                <div class="field">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                </div>
                <!-- comment  <div class="form-error">
                <a href="signup.php"></a>
                    <span class="text-danger">
                        <i class="fa fa-close"></i>
                        <?php
                          # NO CONSIGO LO DE LOS ERRORES :(
                          # 
                          #  if(empty($_POST['user']) || empty($_POST['password'])){
                          #      echo "Rellena todos los campos";
                          #  }
                        ?>
                    </span>
                </div>
                  !-->
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