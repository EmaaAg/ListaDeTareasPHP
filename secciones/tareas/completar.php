<?php   include "../../includes/header.php";?>
    <div class="container">
        <div class="row">
            <br> <br>
            <a href="<?php echo $urlBase;?>/secciones/tareas/tareasCompletas.php">
                <button class="btn btn-warning">Tareas Completas</button>
            </a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Tarea</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Completar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        require "../../includes/config.php";
                        $query = $conn->query("SELECT * FROM `tbl_tareas` WHERE `tareaCompleta` = 0");
                        foreach($query as $key => $value){
                    ?>
                    <tr>
                        <td><?php echo $value['nombreTarea']?></td>
                        <td><?php echo $value['descripcionTarea']?></td>
                        <td>
                            <a href="<?php echo $urlBase;?>/secciones/tareas/completar.php?id=<?php echo $value['idTarea'];?>">
                                <button class="btn btn-success">Completar</button>
                            </a>
                        </td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>    
    </div>

    <?php
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $query = $conn->query("UPDATE `tbl_tareas` SET `tareaCompleta` = 1 WHERE `idTarea` = $id");
            if($query){
                header("Location: completar.php");
            }
        }
    ?>
<?php   include "../../includes/footer.php";?>
