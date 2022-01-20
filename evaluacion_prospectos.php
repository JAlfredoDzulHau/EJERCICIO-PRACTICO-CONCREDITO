<?php include("includes/header.php")?>


        <div class="container">
          <BR></BR>
        <h1 class="display-4">Evaluación de Prospectos</h1>
            <table class="table table-hover">
                <BR></BR>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre del Prospecto</th>
                        <th>Primer Apellido</th>
                        <th>Segundo Apellido</th>
                        <th>Estatus</th>
                        <th>Observación</th>
                        <th>ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include('config/conexion.php');
                    $sql="SELECT * FROM clientes";
                    $result=mysqli_query($conexion,$sql);
                    if($result){
                        while($row=mysqli_fetch_assoc($result)){
                            $id=$row['id'];
                            $nombre=$row['nombre'];
                            $apellido_pat=$row['apellido_pat'];
                            $apellido_mat=$row['apellido_mat'];
                            $estatus=$row['estatus'];
                            $observacion=$row['observacion'];

                                echo '<tr>
                                <th scope="row"> '.$id.'</th>
                                <td>'.$nombre.'</td>
                                <td>'.$apellido_pat.'</td>
                                <td>'.$apellido_mat.'</td>
                                <td>'.$estatus.'</td>
                                <td>'.$observacion.'</td>
                                <td>
                                    <BR>
                                    <button class="btn btn-primary" style="background-color: #0082ca;"><a href="actualizar.php?updateid='.$id.'" class="text-light"><i class="bi bi-pencil-square"></i></a></button><BR></BR>
                                    <button class="btn btn-danger"><a href="eliminar.php?deleteid='.$id.'" class="text-light"><i class="bi bi-trash"></i></a></button>
                                   
                                </td>
                                </tr>';
                        }
                    }
                    ?>
                      
                </tbody>
          
            </table>
        </div>
        
      

  
   
<div>
<?php include("includes/footer.php")?>