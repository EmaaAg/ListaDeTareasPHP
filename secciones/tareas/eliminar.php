<?php
    include "../../includes/config.php";
    
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = $conn->query("DELETE FROM `tbl_tareas` WHERE `idTarea` = $id");
        if($query){
            header("Location: ../../index.php");
        }
    }
?>