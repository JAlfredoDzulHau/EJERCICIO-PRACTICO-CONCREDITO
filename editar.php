<?php include("includes/header.php")?>
<?php
 include ('config/conexion.php');
 
    $id = $_GET['id'];
    $result = mysqli_query($conexion,"select * from clientes where id = '$id'");
    $row = mysqli_fetch_assoc($result);

 ?>

<div class="container my-5">
    <BR></BR>
  <form class="row g-3" method="POST">
    <div class="col-md-4">
      <label for="inputNombre" class="form-label"> <h5>Nombre del prospecto:</h5></label>
      <input type="text" value="<?php echo $row['nombre']; ?>" class="form-control" disabled>
    </div>
    <div class="col-md-4">
      <label for="inputApellido_Pat" class="form-label"><h5>Primer apellido:</h5></label>
      <input type="text" value="<?php echo $row['apellido_pat']; ?>" class="form-control" disabled>
    </div>
    <div class="col-md-4">
      <label for="inputApellido_Mat" class="form-label"><h5>Segundo apellido:</h5></label>
      <input type="text" value="<?php echo $row['apellido_mat']; ?>" class="form-control" disabled>
    </div>
    <div class="col-md-3">
      <label for="inputCalle" class="form-label"><h5>Calle:</h5></label>
      <input type="text" value="<?php echo $row['calle']; ?>" class="form-control" disabled>
    </div>
    <div class="col-md-3">
      <label for="inputNumero" class="form-label"><h5>Número:</h5></label>
      <input type="text" value="<?php echo $row['numero']; ?>" class="form-control" disabled>
    </div>
    <div class="col-md-3">
      <label for="inputColonia" class="form-label"><h5>Colonia:</h5></label>
      <input type="text" value="<?php echo $row['colonia']; ?>" class="form-control" disabled>
    </div>
    <div class="col-md-3">
      <label for="inputCod_Postal" class="form-label"><h5>Código Postal:</h5></label>
      <input type="text" value="<?php echo $row['cod_postal']; ?>" class="form-control" disabled>
    </div>
    <div class="col-md-6">
      <label for="inputTelefonon" class="form-label"><h5>Télefono:</h5></label>
      <input type="text" value="<?php echo $row['telefono']; ?>" class="form-control" disabled>
    </div>
    <div class="col-md-6">
      <label for="inputRFC" class="form-label"><h5>RFC:</h5></label>
      <input type="text" value="<?php echo $row['rfc']; ?>" class="form-control" disabled>
    </div>
    <div class="col-md-6">
      <label for="inputDocumento" class="form-label"><h5>Documento:</h5></label>
      <input type="text" value="<?php echo $row['documento']; ?>" class="form-control" disabled>
    </div>
    <div class="col-md-6">
      <label for="inputEstatus" class="form-label"><h5>Estatus:</h5></label>
        <select name="estatus" class="form-control">
            <option value="">Selecciona un estado..</option>
            <option value="ENVIADO">ENVIADO</option>
            <option value="AUTORIZADO">AUTORIZADO</option>
            <option value="RECHAZADO">RECHAZADO</option>
        </select>
    </div>
    <label for="inputObservacion" class="form-label"><H5>Observaciones </H5>(<em>Solo si se elige el estatus RECHAZADO </em> ):</label>
    <div class="form-floating">
      <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
      <label for="floatingTextarea2">Escribir aquí el motivo de Rechazado</label>
    </div>

    <div class="col-12">
      <BR></BR>
      <button href="listado_prospectos.php" name="submit" type="submit" class="btn btn-primary btn-block">Guardar</button>
    </div>
</form>
</div>

<?php include("includes/footer.php")?>