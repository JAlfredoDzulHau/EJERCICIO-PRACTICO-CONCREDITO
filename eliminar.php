<?php
include('config/conexion.php');
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="DELETE FROM clientes WHERE id=$id";
    $result=mysqli_query($conexion,$sql);

    if($result){
        //echo "Eliminado Satisfactoriamente";
        header('location:evaluacion_prospectos.php');
    }else{
        die(mysqli_error($conexion));
    }
}
?>