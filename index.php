<?php
session_start();
if (!empty($_SESSION['active'])) {
    header('location: src/');
    exit;
} else {
    $alert = '';
    if (!empty($_POST)) {
        if (empty($_POST['usuario']) || empty($_POST['clave'])) {
            $alert = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        Ingrese usuario y contraseña
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
        } else {
            require_once "conexion.php";
            $user = mysqli_real_escape_string($conexion, $_POST['usuario']);
            $clave = md5(mysqli_real_escape_string($conexion, $_POST['clave']));
            $query = mysqli_query($conexion, "SELECT * FROM usuario WHERE usuario = '$user' AND clave = '$clave'");
            mysqli_close($conexion);
            $resultado = mysqli_num_rows($query);
            if ($resultado > 0) {
                $dato = mysqli_fetch_array($query);
                $_SESSION['active'] = true;
                $_SESSION['idUser'] = $dato['idusuario'];
                $_SESSION['nombre'] = $dato['nombre'];
                $_SESSION['user'] = $dato['usuario'];
                header('Location: src/');
                exit;
            } else {
                $alert = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Contraseña incorrecta
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                session_destroy();
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            /* Para asegurar que ocupe toda la altura de la ventana */
        }

        .login-container {
            width: 100%; /* Ocupa todo el ancho en pantallas pequeñas */
            max-width: 400px; /* Ancho máximo en pantallas más grandes */
            padding: 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .login-title {
            text-align: center;
            margin-bottom: 30px;
            color: #343a40;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            border-radius: 5px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            width: 100%;
        }

        .btn-primary:hover {
            background-color: #0069d9;
            border-color: #0062cc;
        }

        .alert {
            margin-bottom: 20px;
        }

        /* Estilos para el container de Bootstrap */
        .container {
            display: flex;
            justify-content: center; /* Centra horizontalmente */
            align-items: center;    /* Centra verticalmente */
            height: 100vh;          /* Ocupa toda la altura de la ventana */
            padding: 0;             /* Elimina el padding predeterminado */
            margin: 0;              /* Elimina los márgenes predeterminados */
            width: 100%;            /* Ocupa todo el ancho */
        }

        /* Media query para pantallas más pequeñas */
        @media (max-width: 576px) {
            .login-container {
                padding: 20px; /* Reduce el padding en pantallas pequeñas */
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-container">
            <h2 class="login-title">Iniciar Sesión</h2>
            <form action="" method="POST">
                <?php echo $alert; ?>
                <div class="form-group">
                    <label for="usuario">Usuario</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                        <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Ingrese su usuario" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="clave">Contraseña</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                        <input type="password" class="form-control" id="clave" name="clave" placeholder="Ingrese su contraseña" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS (optional, but needed for some features) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>