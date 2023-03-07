<!DOCTYPE html>
<html lang="es">

<head>
    <title>Nafarkamp | Contacto </title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./assets/css/styles.css">
</head>
<?php
    include('header.php')
?>
<body>
    <section id="sec-contacto">
        <div class="container">
            <div class="content">
                <div class="left-side">
                    <div class="address details">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="topic">Dirección:</div>
                        <div class="text-one">Avenida San Jorge, 2</div>
                        <div class="text-two">Navarra, Pamplona</div>
                    </div>
                    <div class="phone details">
                        <i class="fas fa-phone-alt"></i>
                        <div class="topic">Teléfono:</div>
                        <div class="text-one">+34 123456789</div>
                        <div class="text-two">+34 987654322</div>
                    </div>
                    <div class="email details">
                        <i class="fas fa-envelope"></i>
                        <div class="topic">Email:</div>
                        <div class="text-one">contact@nafarkamp.eus</div>
                        <div class="text-two">info@nafarkamp.eus</div>
                    </div>
                </div>
                <div class="right-side">
                    <div class="topic-text">Mándanos tu mensaje:</div>
                    <p>Si quieres trabajar con y para nosotros y tienes alguna idea, no dudes en escribirnos por aquí.
                        Nos pondremos en contacto contigo.</p>
                    <form action="#">
                        <div class="input-box">
                            <input type="text" placeholder="Introduce tu nombre">
                        </div>
                        <div class="input-box">
                            <input type="text" placeholder="Introduce tu email">
                        </div>
                        <div class="input-box message-box">
                            <input type="text" placeholder="Introduce tu mensaje">
                        </div>
                        <div class="button">
                            <input type="button" value="Enviar ahora">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
<?php
    include('footer.php')
?>
</html>