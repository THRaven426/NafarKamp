<?php
/**
 * @title: Proyecto integrador Ev01 - Salir sistema.
 * @description:  Script para salir borrando la sesión
 *
 * @version    0.1
 * @author ander_frago@cuatrovientos.org
 */

  require_once 'header.php';

  if (isset($_SESSION['user']))
  {
    destroySession();
    echo "<div class='main'>Has salido de tu sesión. " ;
    // redirección a la pantalla principal
    header('Location: ./index.php');
  }
  else echo "<div class='main'><br>" .
            "No puedes salir de sesión por que no estas registrado";
?>
    </div>
  </body>
</html>