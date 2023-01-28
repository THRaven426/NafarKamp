<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
    <!-- Google Web Fuentes -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">


    <link href="./assets/css/styles.css" rel="stylesheet">
    <title>NAFAR KAMP | Inicio</title>
</head>

<body>
    <?php
    include('nav.php');
    ?>
    <div id="zona_superior">

        <div class="arribatxt">
            <h1>NAFARKAMP</h1>
            <h2>Reserva ya tu bungalow</h2>
        </div>
        <a href="#"><button id="boton_reserva"><b>Reserva ahora</a></b></button>
    </div>
    <div id="slide-bunw">
        <input type="radio" name="slider" id="s1" checked />
        <input type="radio" name="slider" id="s2" />
        <input type="radio" name="slider" id="s3" />
        <input type="radio" name="slider" id="s4" />
        <input type="radio" name="slider" id="s5" />
        <label for="s1" id="slide1">
            <img src="./assets/imagenes/camping-norte1-grande.png" alt />
        </label>
        <label for="s2" id="slide2">
            <img src="./assets/imagenes/camping-norte2-pequeño.png" alt />
        </label>
        <label for="s3" id="slide3">
            <img src="./assets/imagenes/camping-sur1-pequeño.png" alt />
        </label>
        <label for="s4" id="slide4">
            <img src="./assets/imagenes/camping-sur2-mediano.png" alt />
        </label>
        <label for="s5" id="slide5">
            <img src="./assets/imagenes/camping-sur3-mediano.png" alt />
        </label>
    </div>
    <?php
    include('footer.php');
    ?>
</body>

</html>