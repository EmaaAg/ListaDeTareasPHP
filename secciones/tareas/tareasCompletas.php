<?php   include "../../includes/header.php";?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Tarea</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        require "../../includes/config.php";
                        $query = $conn->query("SELECT * FROM `tbl_tareas` WHERE `tareaCompleta` = 1");
                        foreach($query as $key => $value){
                    ?>
                    <tr>
                        <td><?php echo $value['nombreTarea']?></td>
                        <td><?php echo $value['descripcionTarea']?></td>
                        <td>
                            <a href="<?php echo $urlBase;?>/secciones/tareas/eliminar.php?id=<?php echo $value['idTarea'];?>">
                                <button class="btn btn-danger">Eliminar</button>
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
    include "../../includes/footer.php";?>