<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
    <img src="img/logo.jpeg" alt="Logo de la Clínica Médica">
        <h1>Contacto</h1>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="sobre nosotros.php">Sobre Nosotros</a></li>
                <li><a href="servicios.php">Servicios</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="contacto.php">Contacto</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Contáctanos</h2>
        <form action="enviar_contacto.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>
            <label for="mensaje">Mensaje:</label><br>
            <textarea id="mensaje" name="mensaje" rows="4" required></textarea><br>
            <button type="submit">Enviar</button>
        </form>
        <p>Síguenos en nuestras redes sociales:</p>
        <p>
            <a href="https://www.facebook.com">Facebook</a> |
            <a href="https://www.twitter.com">Twitter</a>
        </p>
    </main>
    <footer>
        <p>&copy; 2024 Clínica Médica. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
