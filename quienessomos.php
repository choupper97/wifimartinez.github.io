<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nosotros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .navbar {
            margin-bottom: 30px;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        .about-section {
            text-align: center;
            margin-bottom: 40px;
        }

        .about-section p {
            font-size: 1.1rem;
            color: #555;
            margin-bottom: 20px;
        }

        .team-section {
            margin-top: 40px;

        }

        .team-section h3 {
            margin-bottom: 20px;
            color: #333;
        }

        .team-member {
            margin-bottom: 30px;
        }

        .team-member img {
            border-radius: 50%;
            margin-bottom: 15px;
        }

        .team-member h4 {
            margin-bottom: 5px;
            color: #007bff;
        }

        .team-member p {
            color: #777;
            font-size: 0.9rem;
        }

        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 14px;
            color: #777;
        }
    </style>
</head>
<body>

    <!-- Caja de Menú -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="http://192.168.20.251">WIFI MARTINEZ</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="http://192.168.20.251">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="planes">Planes de Servicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacto">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="quienessomos">Sobre Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://192.168.20.254/login">Ingresar Usuario</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Sección "Sobre Nosotros" -->
    <div class="container">
        <h2>Sobre Nosotros</h2>
        <div class="about-section">
            <p>Somos una empresa dedicada a ofrecer servicios de internet inalámbrico de alta calidad, brindando conexión estable, rápida a hogares y negocios. Nuestro compromiso es con la excelencia en el servicio al cliente y la innovación tecnológica.</p>
            <p>Hemos construido una reputación sólida basada en la confianza, la responsabilidad y el esfuerzo constante por mejorar nuestras soluciones. Estamos aquí para conectarte con el mundo de manera eficiente y accesible.</p>
        </div>

        <!-- Sección del Equipo -->
        <div class="team-section">
		<center>
            <h3>Nuestro Equipo</h3>
            <div class="row text-center">
                <div class="col-md-4 team-member">
                    <img src="logo2.png" alt="Nombrle del Miembro" class="img-fluid">
                    <h4>Roberto Antonio Mtz</h4>
                    <p></p>
                </div>
                <div class="col-md-4 team-member">
                    <img src="logo2.png" alt="Nombre del Miembro" class="img-fluid">
                    <h4>German Martinez Mtz</h4>
                    <p></p>
                </div>
                
            </div>
			</center>
        </div>
    </div>

    <!-- Pie de página -->
    <div class="footer">
        <p>&copy; 2024 WIFI MARTINEZ. Todos los derechos reservados.</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
