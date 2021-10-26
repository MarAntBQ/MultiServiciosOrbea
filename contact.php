<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estructuras Metálicas Orbea | Nuestros Servicios</title>
    <?php
    include 'includes/headsetup.php';
    ?>

</head>

<body id="main">
    <?php
    include 'includes/header.php';
    ?>
    <main>
        <div class="contactanos">
            <h1>Contactanos</h1>
            <p>Estaremos gustosos de atender todas tus preguntas, si necesitas contactarte con nosotros, utiliza alguna de las formas indicadas a continuación.</p>
            <div class="contactways">
                <div class="contactbox">
                    <h2>ASISTENCIA PERSONAL</h2>
                    <p><b>Contactos:</b> Llámanos o escríbenos al Whatsapp</p>
                    <p><b>Santo Domingo</b></p>
                    <p><a href="https://api.whatsapp.com/send?phone=+593987251117&amp;text=Hola queremos obtener mas información sobre MultiServicios Orbea" target="_blank"><img alt="ws ico" src="https://whatsapp.com/favicon.ico" style="width: 16px; height: 16px;" /></a><a class="footertextlink" href="https://api.whatsapp.com/send?phone=+593987251117&amp;text=Hola queremos obtener mas información sobre MultiServicios Orbea" style="font-size:18px;" target="_blank">+593 (98) 725-1117</a></p>
                </div>
                <div class="contactbox">
                    <h2>HORARIOS DE ATENCIÓN</h2>
                    <p><b>Lunes - Viernes</b></p>
                    <p>9h00 - 18h00</p>
                </div>
                <div class="contactbox">
                    <h2>Medios Digitales</h2>
                    <p>Correo Electronico:</p>
                    <p><a href="mailto:info@multiserviciosorbea.com">Centro de Soporte</a></p>
                    <p><a class="contactboxsocial" target="_blank" href="https://www.facebook.com/lobo.orbea/"><i class="fab fa-facebook-f"></i>acebook</a>&nbsp;&nbsp;&nbsp;</p>
                    <p><a class="contactboxsocial" target="_blank" href="https://twitter.com/MetalOrbea"><i class="fab fa-twitter"></i>Twitter</a></p>
                </div>
                <div class="contactbox">
                    <h2>Dirección</h2>
                    <p><b>Matriz: Santo Domingo - Ecuador</b></p>
                    <p>Av. de los Colonos, cerca de la Av. Patricio Romero</p>
                </div>
            </div>
            <br>
            <form class="contactform" action="mailer.php" method="POST">
                <div class="row">
                    <label for="name">Su Nombre:</label>
                    <input id="name" class="input" name="name" type="text" value="" size="30" required/><br />
                </div>
                <div class="row">
                    <label for="email">Su email:</label>
                    <input id="email" class="input" name="email" type="email" value="" placeholder="name@example.com" size="30" required/><br />
                </div>
                <div class="row">
                    <label for="message">Su Mensaje:</label>
                    <textarea id="message" class="input" name="message" rows="7" cols="30"></textarea><br />
                </div>
                <input id="submit_button" type="submit" value="Enviar Mensaje" />
            </form>
            <br>
            <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.7837730196793!2d-79.18524189633457!3d-0.23843422074561044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMMKwMTQnMTguNCJTIDc5wrAxMCc1OS45Ilc!5e0!3m2!1ses-419!2sec!4v1546890010894" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe></p>
        </div>
    </main>
    <?php
    include 'includes/footer.php';
    ?>
</body>

</html>
