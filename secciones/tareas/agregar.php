<?php   include "../../includes/header.php";
        if(isset($_POST['agregar'])){
            $nombre = $_POST['nombre'];
            $descripcion = $_POST['descripcion'];

            if(!empty($nombre) && !empty($descripcion)){
                require "../../includes/config.php";
                $query = $conn->query("INSERT INTO `tbl_tareas`(`nombreTarea`, `descripcionTarea`)VALUES ('$nombre', '$descripcion')");
                if($query){
                    header("Location: $urlBase");
                }           
            }else{
                ?>
                <div class="alert alert-danger mt-3" role="alert">
                    Error al agregar la tarea
                </div>
            <?php  
            }
        }
?>

<div class="container">
    <div>
        <form action="" method="POST">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nombre de la tarea</label>
                <input type="text" class="form-control" name="nombre" id="exampleFormControlInput1" placeholder="Nombre de la tarea">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1">Descripcion de la tarea</label>
                <textarea class="form-control" name="descripcion" id="exampleFormControlTextarea1" rows="3" ></textarea>
            </div>
            <button type="submit" name="agregar" class="btn btn-primary"> Agregar Tarea</button>
        </form>
    </div>
</div>


<?php include "../../includes/footer.php";?>
