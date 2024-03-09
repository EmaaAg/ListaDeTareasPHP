<?php   include "../../includes/header.php";?>

    <?php
        $idTarea = $_GET['id'];
        require "../../includes/config.php";
        $sql = $conn->query("SELECT * FROM `tbl_tareas` WHERE `idTarea` = $idTarea");
        $row = $sql->fetch_assoc(); //Obtenemos el registro de la base de datos

    ?>
    <div class="container">
        <div>
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nombre de la tarea</label>
                    <input type="text" class="form-control" name="nombre" id="exampleFormControlInput1" placeholder="Nombre de la tarea" value="<?php echo $row['nombreTarea']?>">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1">Descripcion de la tarea</label>
                    <textarea class="form-control" name="descripcion" id="exampleFormControlTextarea1" rows="3" ><?php echo $row['descripcionTarea']?></textarea>
                </div>
                <button type="submit" name="editar" class="btn btn-success">Editar Tarea</button>
            </form>
        </div>
    </div>

    <?php
        if(isset($_POST['editar'])){
            $nombre = $_POST['nombre'];
            $descripcion = $_POST['descripcion'];

            if(!empty($nombre) && !empty($descripcion)){
                require "../../includes/config.php";

                $query = $conn->query("UPDATE `tbl_tareas` SET `nombreTarea`='$nombre',`descripcionTarea`='$descripcion' WHERE `idTarea` = $idTarea");
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
<?php   include "../../includes/footer.php";?>
