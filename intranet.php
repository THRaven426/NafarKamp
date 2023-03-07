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
    <title>Nafarkamp | Intranet </title>
    <link rel="stylesheet" href="./assets/css/intranet.css">
    <script src="https://kit.fontawesome.com/dbc44b90e8.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div id="titulo">
        <div class="container">
        <div>
            <p>INTRANET</p>
            <p id="username"><i class="fa-solid fa-user-large"></i><?php echo " ".$_SESSION['user']?></p>
        </div>  
        </div>
    </div>
    <div id="names">
        <div class="container">
        <div>
            <p>NextCloud</p>
            <p>Blog</p>
            <p>Peppermint</p>
        </div>  
        </div>
    </div>
    <div class="buttons">
        <a href="http://172.16.10.6:8080"><i class="fa-solid fa-cloud"></i></a>
        <a href="http://172.16.10.6"><i class="fa-solid fa-chalkboard-user"></i></a>
        <a href="#"><i class="fa-sharp fa-solid fa-ticket"></i></a>
      </div>
</body>
</html>
