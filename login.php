<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Aplicacion de pendientes</title>
</head>
<body>
<form method="POST">
<div class="card">
  <center><h1>Bienvenido</h1></center>
  <center><h6>Ingresa tus credenciales</h6></center>

  <div class="card-body">
<div class="form-group">

        <label for="usuario">Usuario:</label>
        <input class="form-control" type="text" name="usuario" required>
        <br>
        <label for="contrasena">Contraseña:</label>
        <input class="form-control" type="password" name="contrasena" required>
        <br>
        <input class="btn btn-primary" type="submit" value="Iniciar sesión">
</div>
  </div>
</div>
      </form>
      <?php
        require('usuario.class.php');

        session_start();

        if (isset($_POST['usuario']) && isset($_POST['contrasena'])) {
            $IngresadoUsuario = $_POST['usuario'];
            $Ingresadacontrasena = $_POST['contrasena'];
            foreach ($usuarios as $usuario) {
                if ($usuario->autentificacionPassword($Ingresadacontrasena) && $usuario->getUsuario() === $IngresadoUsuario && $usuario->getIdentificador() == '1') {
                $_SESSION['usuario'] = $IngresadoUsuario;
                header("Location: index.php");
                exit();
                }else if($usuario->autentificacionPassword($Ingresadacontrasena) && $usuario->getUsuario() === $IngresadoUsuario && $usuario->getIdentificador() == '2'){
                    $_SESSION['usuario'] = $IngresadoUsuario;
                    header("Location: index.php");
                    exit();
                }else if($usuario->autentificacionPassword($Ingresadacontrasena) && $usuario->getUsuario() === $IngresadoUsuario && $usuario->getIdentificador() == '3'){
                $_SESSION['usuario'] = $IngresadoUsuario;
                header("Location: index.php");
                exit();
            }
            }
            $error = "ERROR.CREDENCIALES INCORRECTAS";
            echo "<script>alert('$error')</script>"; 
        }
    ?> 
</body>
</html>