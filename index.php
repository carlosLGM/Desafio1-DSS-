<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
</body>
</html>

<?php
//Se selecciona la clase que se necesita 
require('usuario.class.php');
require_once('eventos.class.php');


$identificador = "";
$usuario = "";

if(!isset($_SESSION['usuario'])){
    header("Location: login.php");
    exit();
}

if($_SESSION['usuario'] == "CheGuebara200"){
    $identificador = "1";
}else if($_SESSION['usuario'] == "PaolitaFresa254"){
    $identificador = "2";
}else if($_SESSION['usuario'] == "MarFigue145"){
    $identificador = "3";
}
echo "<h3><center>Bienvenido " . $_SESSION['usuario'] . " a su aplicacion de eventos importantes</center><br></h3>";

?>
<form action="logout.php" >
    <center><input type="submit" value="Cerrar sesion" class="btn btn-block btn-primary"></center>
</form>

<form class="form" action="agregar_evento.php" method="post">


<div class="card">
  <div class="card-body"> 
  <input type="hidden" value='<?php echo $identificador; ?>' name="identificador">
    <label for="nombre" class="col-sm-2 col-form-label">Titulo del evento:</label>
    <input class="form-control" type="text" name="titulo" required><br>

  
    <label for="fecha">Fecha del evento:</label>
    <input class="form-control" type="date" name="fecha" required><br>

    <label for="lugar">Lugar del evento:</label>
    <input class="form-control" type="text" name="lugar" required><br>


    <label for="lugar">Descripcion del evento:</label>
    <input  class="form-control" type="text" name="descripcion" required><br>


    <input type="submit" value="Agregar evento" class="btn btn-block btn-primary"><br><br><br>

    


</form>

</div>
</div>


<?php
require_once('eventos.class.php');
require_once('usuario.class.php');
$eventos = $_SESSION[SESION_EVENTOS][ARREGLO_EVENTOS];

    echo '<table class="table">';
    echo '<thead class="thead-dark"><tr><th>Titulo</th><th>Fecha</th><th>Lugar</th><th>Descripcion del evento</th></tr></thead>';

foreach ($eventos as $evento) {
    echo '<tr>';
    if ($evento->usuario == $identificador) {
    echo '<td>' . $evento->titulo . '</td>';
    echo '<td>' .$evento->fecha . '</td>';
    echo '<td>' . $evento->lugar . '</td>';
    echo '<td>' . $evento->descripcion . '</td>';
    }
}




?>