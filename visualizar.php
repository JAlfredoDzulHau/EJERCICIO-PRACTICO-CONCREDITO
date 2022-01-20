<?php include("includes/header.php")?>
<?php
 include ('config/conexion.php');

    $id = $_GET['id'];
    $result = mysqli_query($conexion,"select * from clientes where id = '$id'");
    $row = mysqli_fetch_assoc($result);

 ?>

<div class="container">
    <BR></BR>
  <form class="row g-3">
    <div class="col-md-4">
      <label for="inputNombre" class="form-label">Nombre del prospecto:</label>
      <input type="text" value="<?php echo $row['nombre']; ?>" class="form-control" disabled>
    </div>
    <div class="col-md-4">
      <label for="inputApellido_Pat" class="form-label">Primer apellido:</label>
      <input type="text" value="<?php echo $row['apellido_pat']; ?>" class="form-control" disabled>
    </div>
    <div class="col-md-4">
      <label for="inputApellido_Mat" class="form-label">Segundo apellido:</label>
      <input type="text" value="<?php echo $row['apellido_mat']; ?>" class="form-control" disabled>
    </div>
    <div class="col-md-3">
      <label for="inputCalle" class="form-label">Calle:</label>
      <input type="text" value="<?php echo $row['calle']; ?>" class="form-control" disabled>
    </div>
    <div class="col-md-3">
      <label for="inputNumero" class="form-label">Número:</label>
      <input type="text" value="<?php echo $row['numero']; ?>" class="form-control" disabled>
    </div>
    <div class="col-md-3">
      <label for="inputColonia" class="form-label">Colonia:</label>
      <input type="text" value="<?php echo $row['colonia']; ?>" class="form-control" disabled>
    </div>
    <div class="col-md-3">
      <label for="inputCod_Postal" class="form-label">Código Postal:</label>
      <input type="text" value="<?php echo $row['cod_postal']; ?>" class="form-control" disabled>
    </div>
    <div class="col-md-6">
      <label for="inputTelefonon" class="form-label">Télefono:</label>
      <input type="text" value="<?php echo $row['telefono']; ?>" class="form-control" disabled>
    </div>
    <div class="col-md-6">
      <label for="inputRFC" class="form-label">RFC:</label>
      <input type="text" value="<?php echo $row['rfc']; ?>" class="form-control" disabled>
    </div>
    <div class="col-md-6">
      <label for="inputDocumento" class="form-label">DOCUMENTO:</label>
      <input type="text" value="<?php echo $row['documento']; ?>" class="form-control" disabled>
    </div>
    <div class="col-md-6">
      <label for="inputEstatus" class="form-label">ESTATUS:</label>
      <input type="text" value="<?php echo $row['estatus']; ?>" class="form-control" disabled>
    </div>
    <div class="form-floating">
      <textarea name="observacion" class="form-control" placeholder="Escriba aquí el motivo del Rechazo" style="height: 100px" disabled>
      <?php echo $row['observacion']; ?>
    </textarea>
      <label for="floatingTextarea2">Escriba aquí el motivo del Rechazo</label>
    </div>
    <center class="col-12">
      <BR></BR>
      <a href="listado_prospectos.php" type="submit" class="btn btn-primary btn-lg"><i class="bi bi-skip-backward-btn-fill me-2"></i>Regresar</a>
    </center>
</form>
</div>

<?php include("includes/footer.php")?>