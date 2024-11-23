<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
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
            max-width: 700px;
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

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            font-weight: bold;
        }

        .form-control {
            border-radius: 4px;
            padding: 10px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            width: 100%;
            padding: 10px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .contact-box {
            background-color: #e9ecef;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            text-align: center;
        }

        .contact-box h4 {
            margin-bottom: 10px;
            color: #333;
        }

        .contact-box p {
            margin-bottom: 0;
            color: #555;
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
            <a class="navbar-brand" href="index.php">WIFI MARTINEZ</a>
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

    <!-- Contenido de la Página de Contacto -->
    <div class="container">
        <h2>Contacto</h2>
        <p class="text-center">Si tienes alguna pregunta, no dudes en contactarnos mediante por Whastapp proporcionados.</p>

        <!-- Bloques de Contacto -->
        <div class="contact-box">
            <h4>Opcion 1</h4>
            <p>Whastapp: <a href="http://api.whatsapp.com/send?phone=2384092442">+52 238 409 2442</a></p>
            <p>Email:<a href="mailto:martinez.trebor97@gmail.com">martinez.trebor97@gmail.com</a> </p>
			
        </div>
		<div class="contact-box">
            <h4>Opcion 2</h4>
            <p>Whastapp: <a href="http://api.whatsapp.com/send?phone=9511839677">+52 951 183 9677</a></p>
            <p>Email:<a href="mailto:martinez.trebor97@gmail.com">@gmail.com</a> </p>
			
        </div>
        
        
    </div>

    <!-- Pie de página -->
    <div class="footer">
        <p>&copy; 2024 WIFI MARTINEZ. Todos los derechos reservados.</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>