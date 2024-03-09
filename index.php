<?php include "includes/header.php";?>
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
                        require "includes/config.php";
                        $query = $conn->query("SELECT * FROM `tbl_tareas` WHERE `tareaCompleta` = 0");
                        foreach($query as $key => $value){
                    ?>
                    <tr>
                        <td><?php echo $value['nombreTarea']?></td>
                        <td><?php echo $value['descripcionTarea']?></td>
                        <td>
                            <a href="<?php echo $urlBase?>secciones/tareas/eliminar.php?id=<?php echo $value['idTarea'];?>">
                                <button class="btn btn-danger">Eliminar</button>
                            </a>
                            <a href="<?php echo $urlBase;?>secciones/tareas/editar.php?id=<?php echo $value['idTarea'];?>">
                                <button class="btn btn-info">Editar</button>
                            </a>
                        </td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>

<?php include "includes/footer.php";?>
