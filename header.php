<?php

session_start([
    'cookie_lifetime' => 86400,
]);

// Realizando la llamada al script functions establezco la conexión con base de datos
require_once 'utils/functions.php';
$userstr = ' (Invitado)';
// Gestión de la sesión de usuario
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
    // last request was more than 30 minutes ago
    session_unset();     // unset $_SESSION variable for the run-time 
    session_destroy();   // destroy session data in storage
}
$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp

if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    $loggedin = TRUE;
    $userstr = " ($user)";
} else{
    $loggedin = FALSE;
   
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Nafarkamp | Login </title>
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://kit.fontawesome.com/dbc44b90e8.js" crossorigin="anonymous"></script>
    <style>
        #nav_user {
            color: green;
            margin-bottom: 10px;
            padding:10px 15px;
            border: green solid 2px;
            border-radius:10px;
        }
        @media (min-width: 850px){
            #nav_user{
              margin-top: 10px;
              position: absolute;
              margin-left: 1200px;
            }
        }
    </style>
</head>
<body>
    <?php    
        if ($loggedin)
        {
            // En caso de tener una sesión registrada con antelación mostramos las opciones avanzadas de la aplicación
        ?>
            <header>
            <div class="container">
                <p class="logo">NAFARKAMP</p>
                <nav>
                    <a class="hvr-bounce-to-top" href="./index.php">Inicio</a>
                    <a class="hvr-bounce-to-top" href="./bungalows.php">Bungalows</a>
                    <a class="hvr-bounce-to-top" href="./contacto.php">Contacto</a>
                    <a class="hvr-bounce-to-top" href="./aboutus.php">About us</a>
                    <a class="hvr-bounce-to-top" href="./reservas.php">Reservas</a>
                    <a id="button_login" href="./logout.php">Salir</a>
                </nav>
                <p id="nav_user"><i class="fa-solid fa-user-large"></i><?php echo " $user"?></p>         
            </div>
        </header>
        <?php
        }
        else
        {
            // En caso de ser usuario no registrado, (Invitado)  
        ?>
        <header>
            <div class="container">
                <p class="logo">NAFARKAMP</p>
                <nav>
                    <a class="hvr-bounce-to-top" href="./index.php">Inicio</a>
                    <a class="hvr-bounce-to-top" href="./bungalows.php">Bungalows</a>
                    <a class="hvr-bounce-to-top" href="./contacto.php">Contacto</a>
                    <a class="hvr-bounce-to-top" href="./aboutus.php">About us</a>
                    <a class="hvr-bounce-to-top" href="./reservas.php">Reservas</a>
                    <a id="button_login" href="./login.php">Iniciar sesión <i class="fa-solid fa-arrow-right-to-bracket"></i></a>
                </nav>
            </div>
        </header>
        <?php
        }
        ?>