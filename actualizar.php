<?php include("includes/header.php")?>
<?php

    include ('config/conexion.php');
    $id = $_GET['updateid'];
    $result = mysqli_query($conexion,"select * from clientes where id = '$id'");
    $row = mysqli_fetch_assoc($result);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     
        $estatus      = $_POST['estatus']; 
        $observacion  = $_POST['observacion'];
        $resultt = mysqli_query($conexion,"update clientes set estatus='$estatus', observacion='$observacion' where id = '$id'");
        if($resultt){
        header('location: evaluacion_prospectos.php');
        }
    }

 ?>

<div class="container">
    <BR></BR>
  <form class="row g-3" method="POST">
    <div class="col-md-4">
      <label for="inputNombre" class="form-label"><h5>Nombre del prospecto:</h5></label>
      <input type="text" value="<?php echo $row['nombre'];?>" name="nombre" class="form-control" disabled>
    </div>
    <div class="col-md-4">
      <label for="inputApellido_Pat" class="form-label"><h5>Primer apellido:</h5></label>
      <input type="text" value="<?php echo $row['apellido_pat'];?>" name="apellido_pat" class="form-control" disabled>
    </div>
    <div class="col-md-4">
      <label for="inputApellido_Mat" class="form-label"><h5>Segundo apellido:</h5></label>
      <input type="text" value="<?php echo $row['apellido_mat'];?>" name="apellido_mat" class="form-control"disabled>
    </div>
    <div class="col-md-3">
      <label for="inputCalle" class="form-label"><h5>Calle:</h5></label>
      <input type="text" value="<?php echo $row['calle'];?>" name="calle" class="form-control"disabled>
    </div>
    <div class="col-md-3">
      <label for="inputNumero" class="form-label"><h5>Número:</h5></label>
      <input type="text" value="<?php echo $row['numero'];?>" name="numero" class="form-control"disabled>
    </div>
    <div class="col-md-3">
      <label for="inputColonia" class="form-label"><h5>Colonia:</h5></label>
      <input type="text" value="<?php echo $row['colonia'];?>" name="colonia" class="form-control"disabled>
    </div>
    <div class="col-md-3">
      <label for="inputCod_Postal" class="form-label"><h5>Código Postal:</h5></label>
      <input type="text" value="<?php echo $row['cod_postal'];?>" name="cod_postal" class="form-control"disabled>
    </div>
    <div class="col-md-6">
      <label for="inputTelefonon" class="form-label"><h5>Télefono:</h5></label>
      <input type="text" value="<?php echo $row['telefono'];?>" name="telefono" class="form-control"disabled>
    </div>
    <div class="col-md-6">
      <label for="inputRFC" class="form-label"><h5>RFC:</h5></label>
      <input type="text" value="<?php echo $row['rfc'];?>" name="rfc" class="form-control"disabled>
    </div>
    <div class="col-md-6">
      <label for="inputnom_doc" class="form-label"><h5>Nombre del Documento:</h5></label>
      <input type="text" value="<?php echo $row['nom_doc'];?>" name="nom_doc" class="form-control"disabled>
    </div>
    <div class="col-md-6">
      <label for="inputDocumento" class="form-label"><h5>Documento:</h5></label>
      <input type="text" value="<?php echo $row['documento'];?>" name="documento" class="form-control"disabled>
    </div>
    <div class="col-md-6">
      <label for="inputEstatus" class="form-label"><h5>Estatus:</h5></label>
        <select name="estatus" class="form-control">
                  <option value="">Selecciona un estatus...</option>
                  <option value="ENVIADO">ENVIADO</option>
                  <option value="AUTORIZADO">AUTORIZADO</option>
                  <option value="RECHAZADO">RECHAZADO</option>
        </select>
    </div>
    <label for="inputEstatus" class="form-label"><h5> Observaciones</h5><em><h6>(Solo si el ESTATUS es RECHAZADO):</h6></em></label>
    <div class="form-floating">
      <textarea class="form-control" name="observacion" placeholder="Escriba aquí el motivo del Rechazo" style="height: 100px"></textarea>
      <label for="floatingTextarea2">Escriba aquí el motivo del Rechazo</label>
    </div>
    <center class="col-12">
      <BR></BR>
      <a href="evaluacion_prospectos.php" type="submit" class="btn btn-primary btn-lg" style="background-color: #333333;"><i class="bi bi-skip-backward-btn-fill me-2"></i>Regresar</a>
      <input type="submit" name="editar" value="Editar" class="btn btn-primary btn-lg">
    </center>
</form>
</div>

<?php include("includes/footer.php")?>