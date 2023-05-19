<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/icon_circle.png" type="image/png">
    <title>Bienvenido</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        header {
            background-color: #2c7a7b;
        }

        .navbar-brand {
            display: flex;
            align-items: center;
        }

        .navbar-nav .nav-link {
            padding-right: 10px;
            padding-left: 10px;
        }

        .jumbotron {
            background-color: #f8f9fa;
            padding: 2rem 1rem;
            text-align: center;
            color: #333;
        }

        .jumbotron h2 {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .jumbotron p {
            font-size: 18px;
            line-height: 1.5;
            margin-bottom: 20px;
        }

        .jumbotron .btn-primary {
            font-size: 18px;
            padding: 12px 30px;
        }

        .community-section {
            background-color: #f8f9fa;
            padding: 50px 0;
            text-align: center;
        }

        .community-section h3 {
            font-size: 24px;
            margin-bottom: 30px;
        }

        .community-section ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .community-section ul li {
            display: inline-block;
            margin: 0 10px;
        }

        .community-section ul li a {
            font-size: 20px;
        }

        footer {
            background-color: #2c7a7b;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        footer p {
            margin: 0;
            font-size: 16px;
        }
        .bg-custom {
                background-color: #64c603;
              }
    </style>
</head>

<body background="img/home screen.png">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-custom">
            <a class="navbar-brand" href="bienvenido.php">
                Forest
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="bienvenido.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Como funciona2.html">¿Cómo funciona?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Bosque2.html">Bosque</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="donaciones2.html">Donaciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacto2.html">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Cerrar Sesión</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="container mt-4">
            <div class="row">
                <div class="col-md-8">
                    <article>
                        <section>
                            <div class="jumbotron">
                                <h1 class="jumbotron-heading">Bienvenido a
                                    The Forest</h1>
                                <p class="jumbotron-subheading">En The Forest queremos
                                    ayudar a nuestro bello estado de Chiapas a reforestar
                                    gran parte de nuestras selvas y bosques.
                                    ¡Necesitamos tu ayuda!
                                </p>
                            </div>
                            <div class="feature-box">
                                <h3>¿Cómo funciona?</h3>
                                <p>Te damos una breve explicación acerca de nuestra aplicación.</p>
                                <a href="Como funciona.html" class="btn
                                    btn-primary">Saber más...</a>
                            </div>
                            <div class="feature-box">
                                <h3>Bosque</h3>
                                <p>Aquí podrás encontrar los árboles plantados.</p>
                                <a href="Bosque.html" class="btn
                                    btn-primary">Ir a plantar</a>
                            </div>
                            <div class="feature-box">
                                <h3>Donaciones</h3>
                                <p>En esta pestaña puedes aportar tu granito de arena
                                </p>
                                <a href="donaciones.html" class="btn
                                    btn-primary">Donaciones</a>
                            </div>
                            <div class="feature-box">
                                <h3>Contacto</h3>
                                <p>Ponte en contacto con nosotros.</p>
                                <a href="contacto.html" class="btn
                                    btn-primary">Contactar</a>
                            </div>
                            <div class="feature-box">
                                <h3>Registro</h3>
                                <p>Registrate totalmente gratis
                                </p>
                                <a href="login.php" class="btn btn-primary">Login</a>
                            </div>
                        </section>
                    </article>
                </div>
                <div class="col-md-4">
                    <aside>
                        <a class="navbar-brand" href="#">
                            <img src="img/icon4.png" width="500" >
                        </a>
                    </aside>
                    <aside>
                        <h3>¡Únete a la comunidad chiapaneca!</h3>
                        <p>Síguenos en nuestras redes sociales.</p>
                        <ul>
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Instagram</a></li>
                            <li><a href="#">Twitter</a></li>
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
    <footer class="container-fluid bg-dark text-white text-center py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>Boulevard Belisario Domínguez Km 1081, sn, Terán, Tuxtla Gutiérrez, Chiapas, México</p>
                </div>
                <div class="col-md-6">
                    <p>&copy; Forest 2023</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>