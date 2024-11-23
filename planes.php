<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WIFI MARTINEZ</title>
    <!-- Enlace a Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
            body {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 0;
                color: #333;
            }
            .container {
                max-width: 900px;
                margin: 50px auto;
                padding: 30px;
                background-color: #fff;
                border-radius: 10px;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                text-align: center;
            }
            h1 {
                color: #4a90e2;
                font-size: 2em;
                margin-bottom: 20px;
            }
            p {
                color: #666;
                font-size: 1.1em;
                line-height: 1.8;
                margin-bottom: 30px;
            }
            img {
                max-width: 30%;
                height: auto;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                margin-bottom: 30px;
            }
            .button-group {
                display: flex;
                justify-content: center;
                gap: 20px;
            }
            .button {
                padding: 15px 30px;
                font-size: 1.1em;
                font-weight: bold;
                text-decoration: none;
                color: #fff;
                background-color: #4a90e2;
                border-radius: 5px;
                transition: background-color 0.3s ease;
            }
            .button:hover {
                background-color: #357ab7;
            }
            .button-secondary {
                background-color: #7f8c8d;
            }
            .button-secondary:hover {
                background-color: #606f73;
            }
            .navbar-custom {
                background-color: #343a40; /* Color oscuro elegante */
            }
            .navbar-custom .navbar-brand,
            .navbar-custom .nav-link {
                color: white;
            }
            .navbar-custom .navbar-toggler {
                border-color: rgba(255, 255, 255, 0.1);
            }
            .navbar-custom .navbar-toggler-icon {
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='rgba%28255, 255, 255, 0.5%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
            }
            .navbar-custom .nav-link:hover {
                color: #ffc107; /* Color dorado al pasar el mouse */
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

<div class="container">

    <h2>Planes de Servicio</h2>
    <div>
	<style>
        table {
            width: 50%;
            margin: auto;
            border-collapse: collapse;
        }

        th, td {
            
            padding: 10px;
            text-align: center;
            border-radius: 15px; /* Redondea las celdas */
            background-color: #f2f2f2;
        }

        th {
            background-color: #c5c5c5;
            color: white;
        }
    </style>
		<center>
		<table >
        <thead>
            <tr>
                <th>No.</th>
                <th>Plan</th>
                <th>Costo</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>2 Hrs</td>
                <td>$  5.00</td>

            </tr>
            <tr>
                <td>2</td>
                <td>12 Hrs</td>
                <td>$ 10.00</td>

            </tr>
            <tr>
                <td>3</td>
                <td>24 Hrs</td>
                <td>$ 20.00</td>

            </tr>
            <tr>
                <td>4</td>
                <td>1 Semana</td>
                <td>$ 40.00</td>

            </tr>
            <tr>
                <td>5</td>
                <td>1 Mes</td>
                <td>$ 120.00</td>

            </tr>
			<tr>
                <td>6</td>
                <td>4 Dispositivos</td>
                <td>$ 250.00</td>

            </tr>
			<tr>
                <td>7</td>
                <td>Especial <br> Personalizado</td>
                <td>$ 350.00</td>

            </tr>
        </tbody>
    </table>
	</center>
	</div>
    <br>
    <div class="button-group">
			
            <a href="http://192.168.20.254/login" class="button">Ingresar Usuario</a>
        </div>
</div>
<!-- Pie de página -->
    <div class="footer">
        <p>&copy; 2024 WIFI MARTINEZ. Todos los derechos reservados.</p>
    </div>

<!-- Enlace a Bootstrap JS y Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
