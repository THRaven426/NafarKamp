<!DOCTYPE html>
<html lang="es">
<head>
    <title>Nafarkamp | Inicio </title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
</head>
<body>
    <?php
    include('header.php')
    ?>
    <section id="sec1">
        <h1>NAFARKAMP</h1>
        <h2>Bungalows auto check-in</h2>
        <button onclick="location.href='./reservas.php'">Reservar ahora</button>
    </section>
    <section id="sec2">
        <div class="container">
            <div class="img-container"></div>
            <div class="texto">
                <h2>Somos <span>NAFARKAMP</span></h2>
                <p>Bienvenidos a NAFARKAMP, la empresa líder en alquiler de bungalows en la preciosa región de Navarra.
                    Ofrecemos una amplia variedad de opciones de alojamiento para satisfacer todas sus necesidades,
                    desde pequeñas cabañas privadas hasta grandes bungalows familiares. Y lo mejor, es AUTO CHECK-IN.
                </p>
            </div>
        </div>
    </section>
    <section id="sec3">
        <input type="radio" name="slider" id="s1" checked />
        <input type="radio" name="slider" id="s2" />
        <input type="radio" name="slider" id="s3" />
        <input type="radio" name="slider" id="s4" />
        <input type="radio" name="slider" id="s5" />
        <label for="s1" id="slide1">
            <img src="./assets/imagenes/camping-norte1-grande.png" alt />
        </label>
        <label for="s2" id="slide2">
            <img src="./assets/imagenes/camping-norte2-pequeno.png" alt />
        </label>
        <label for="s3" id="slide3">
            <img src="./assets/imagenes/camping-sur1-pequeno.png" alt />
        </label>
        <label for="s4" id="slide4">
            <img src="./assets/imagenes/camping-sur2-mediano.png" alt />
        </label>
        <label for="s5" id="slide5">
            <img src="./assets/imagenes/camping-sur3-mediano.png" alt />
        </label>
    </section>
    <section id="sec4">
        <div class="container">
            <h2>Nuestro equipo</h2>
            <div class="cards-list">
                <div class="card 1">
                    <div class="card_image">
                        <img src="./assets/imagenes/maitane.png" />
                    </div>
                    <div class="titulo_carta">
                        <p>Maitane</p>
                    </div>
                </div>
                <div class="card 2">
                    <div class="card_image">
                        <img src="./assets/imagenes/Aimar.png" />
                    </div>
                    <div class="titulo_carta">
                        <p>Aimar</p>
                    </div>
                </div>
                <div class="card 3">
                    <div class="card_image">
                        <img src="./assets/imagenes/Haritza.png" />
                    </div>
                    <div class="titulo_carta">
                        <p>Haritza</p>
                    </div>
                </div>
                <div class="card 4">
                    <div class="card_image">
                        <img src="./assets/imagenes/Daniel.png" />
                    </div>
                    <div class="titulo_carta">
                        <p>Daniel</p>
                    </div>
                </div>
                <div class="card 5">
                    <div class="card_image">
                        <img src="./assets/imagenes/David.png" />
                    </div>
                    <div class="titulo_carta">
                        <p>David</p>
                    </div>
                </div>
                <div class="card 6">
                    <div class="card_image">
                        <img src="./assets/imagenes/Adrian.png" />
                    </div>
                    <div class="titulo_carta">
                        <p>Adrián</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <?php
        include('footer.php')
    ?>
</body>
</html>
