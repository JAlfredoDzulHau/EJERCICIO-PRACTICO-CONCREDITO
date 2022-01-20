<?php include("includes/header.php")?>
        <div class="container">
          <BR></BR>
        <h1 class="display-4">Listado de Prospectos</h1>
            <table class="table table-hover">
                <BR></BR>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre del Prospecto</th>
                        <th>Primer Apellido</th>
                        <th>Segundo Apellido</th>
                        <th>Estatus</th>
                        <th>ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include('config/conexion.php');
                    $sqlclientes = "SELECT * FROM clientes";
                    $result_clientes = mysqli_query($conexion, $sqlclientes);
                
                    while ($row = mysqli_fetch_array($result_clientes)){
                    ?>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['nombre'] ?></td>
                        <td><?php echo $row['apellido_pat'] ?></td>
                        <td><?php echo $row['apellido_mat'] ?></td>
                        <td><?php echo $row['estatus'] ?></td>
                        <td><a href="visualizar.php?id=<?php echo $row['id']?>" class="btn btn-primary btn-lg">VER</a></td>
                       
                      </tr>
                      <?php
                    }
                    ?>
                </tbody>
          
            </table>
        </div>
<div>
<?php include("includes/footer.php")?>