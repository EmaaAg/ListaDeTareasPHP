<?php 
    $urlBase = "http://localhost/tareasCrud/"; // Cambiar por la URL de su proyecto
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tareas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <br> <br>
            <div class="botones-container">
                <a href="<?php echo $urlBase;?>secciones/tareas/agregar.php">
                    <button class="btn btn-warning">Agregar Tarea</button>
                </a>
                <a href="<?php echo $urlBase;?>">
                    <button class="btn btn-primary">Tareas Pendientes</button>
                </a>
                <a href="<?php echo $urlBase;?>secciones/tareas/completar.php">
                    <button class="btn btn-success">Completar Tarea</button>
                </a>
        </div>
