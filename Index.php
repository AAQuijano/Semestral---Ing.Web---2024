<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MiEventos - Home</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
    <div class="container">
        <div class="logo">
            <img src="logo.png" alt="MiEventos Logo" class="logo-img">
        </div>
        <div class="search-bar">
            <input type="text" placeholder="Search for Event">
        </div>
        <nav>
            <ul>
                <li><a href="#">English</a></li>
                <li><a href="#">Sign Up</a></li>
                <li><a href="#">Login</a></li>
                <li><a href="#">Help</a></li>
                <li><a href="#" class="btn-create">Create Event</a></li>
            </ul>
        </nav>
    </div>
</header>

    <main>
        <section class="hero">
            <div class="container">
                <h2>Organiza, Promociona y Vende Entradas</h2>
                <p>Crea eventos de manera sencilla y conecta con tus asistentes.</p>
                <a href="#" class="btn-primary">Crear Evento</a>
            </div>
        </section>

        <section class="events">
            <div class="container">
                <h3>Próximos Eventos</h3>
                <div class="events-grid">
                    <!-- Tarjeta de evento 1 -->
                    <div class="event-card">
                        <div class="event-image">
                            <img src="image1.jpg" alt="Festival Madretambor">
                        </div>
                        <div class="event-content">
                            <h4>Festival Madretambor</h4>
                            <p><strong>Editoris, Inc</strong> - <a href="#">Follow (29)</a></p>
                            <p><span class="date">Dec-07, 2024</span></p>
                            <p><span class="time">3:00 pm - 11:30 pm</span></p>
                            <p><span class="location">Panama Convention Center, Calle General Juan D. Peron, Panama</span></p>
                            <p>Desde <span class="price">$0</span></p>
                            <a href="#" class="btn-secondary">Ver Detalles</a>
                        </div>
                    </div>

                    <!-- Tarjeta de evento 2 -->
                    <div class="event-card">
                        <div class="event-image">
                            <img src="image2.jpg" alt="Kalunga Cowboy Edition">
                        </div>
                        <div class="event-content">
                            <h4>Kalunga Cowboy Edition</h4>
                            <p><strong>Kalunga Fest</strong> - <a href="#">Follow (52)</a></p>
                            <p><span class="date">Dec-14, 2024</span></p>
                            <p><span class="time">6:00 pm - 4:00 am</span></p>
                            <p><span class="location">Isla Naos, Panamá</span></p>
                            <p>Desde <span class="price">$40</span></p>
                            <a href="#" class="btn-secondary">Ver Detalles</a>
                        </div>
                    </div>

                    <!-- Tarjeta de evento 3 -->
                    <div class="event-card">
                        <div class="event-image">
                            <img src="image3.jpg" alt="MOLA Rodríguez Jr & Francis de Simone">
                        </div>
                        <div class="event-content">
                            <h4>MOLA Rodríguez Jr & Francis de Simone</h4>
                            <p><strong>Hafle & Events SA</strong> - <a href="#">Follow (11)</a></p>
                            <p><span class="date">Dec-07, 2024</span></p>
                            <p><span class="time">7:00 pm - 11:30 pm</span></p>
                            <p><span class="location">Isla Naos, Panamá</span></p>
                            <p>Desde <span class="price">$20</span></p>
                            <a href="#" class="btn-secondary">Ver Detalles</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <div id="cookie-banner" class="cookie-banner">
    <p>Este sitio utiliza cookies para mejorar la experiencia del usuario. <a href="#">Saber más</a>.</p>
    <button id="accept-cookie" class="btn-primary">Aceptar</button>
</div>

<script src="cookie.js"></script>

    <footer>
        <div class="container">
            <p>&copy; 2024 MiEventos. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>
