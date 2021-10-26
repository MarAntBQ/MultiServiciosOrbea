<header>
    <div class="logo">Estructuras Metálicas Orbea</div>
    <nav>
        <ul id="primaryNav">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="index.php#about">Quienes Somos</a></li>
            <li><a href="services.php">Servicios</a></li>
            <li><a href="contact.php">Contactanos</a></li>
        </ul>
    </nav>
    <div class="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></div>

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script>
        $(document).ready(function() {
            $('.menu-toggle').click(function() {
                $('nav').toggleClass('activer');
            })
        })

    </script>

    <script>
        var urlString, urlArray, pageHREF, menu, i, currentURL;
        urlString = document.location.href;
        urlArray = urlString.split('/');
        pageHREF = urlArray[urlArray.length - 1];

        if (pageHREF !== "") {
            menu = document.querySelectorAll('ul#primaryNav li a');
            for (i = 0; i < menu.length; i++) {
                currentURL = (menu[i].getAttribute('href'));
                menu[i].className = '';
                if (currentURL === pageHREF) {
                    menu[i].className = 'active';
                }
            }
        }

    </script>

</header>
