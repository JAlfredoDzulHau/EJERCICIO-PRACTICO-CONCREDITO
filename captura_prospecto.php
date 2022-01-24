<?php include("includes/header.php");?>

<div class="container" style="background-color: #f9f9f9;">
    <div>
      <BR></BR>
      <h1 class="display-4">Captura de Prospecto</h1>
    </div>

<!--Formulario para la captura de datos del prospecto-->
    <div class="card text-dark bg-light mb-3">
        <div class="card-header">
          Nuevo Registro
        </div>
      <div class="card-body">
    
          <form class="row g-3" id="insert-form"action="insertar.php" method="POST">
              <div class="col-md-4">
                <label for="nombre" class="form-label">Nombre del prospecto:</label>
                <input type="text" name="nombre" class="form-control" tabindex="1" autofocus autocomplete="off" required>
              </div>
              <div class="col-md-4">
                <label for="apellido_pat" class="form-label">Primer apellido:</label>
                <input type="text" name="apellido_pat" class="form-control" tabindex="1" autofocus autocomplete="off" required>
              </div>
              <div class="col-md-4">
                <label for="apellido_pat" class="form-label">Segundo apellido:</label>
                <input type="text" name="apellido_mat" class="form-control" tabindex="1" autofocus autocomplete="off">
              </div>
              <div class="col-md-3">
                <label for="inputAddress" class="form-label">Calle:</label>
                <input type="text" name="calle" class="form-control" tabindex="1" autofocus  autocomplete="off" required>
              </div>
              <div class="col-md-3">
                <label for="inputAddress2" class="form-label">Número:</label>
                <input type="text" name="numero" class="form-control"  tabindex="1" autofocus autocomplete="off" required>
              </div>
              <div class="col-md-3">
                <label for="inputCity"  class="form-label">Colonia:</label autocomplete="off" required>
                <input type="text"name="colonia" class="form-control" tabindex="1" autofocus>
              </div>
              <div class="col-md-3">
                <label for="inputCity" class="form-label">Código Postal:</label>
                <input type="text" name="cod_postal" class="form-control" tabindex="1" autofocus autocomplete="off" required>
              </div>
              <div class="col-md-6">
                <label for="inputCity" class="form-label">Teléfono:</label>
                <input type="text" name="telefono" class="form-control" tabindex="1" autofocus autocomplete="off">
              </div>
              <div class="col-md-6">
                <label for="inputCity" class="form-label">RFC:</label>
                <input type="text" name="rfc" class="form-control" tabindex="1" autofocus  autocomplete="off" required>
              </div>
              <BR></BR>
              <P>Documentos:</P>
              <div class="row text-right">
                <div class="col-md-12">
                  <button class="btn btn-primary add-btn" type="button"><i class="bi bi-plus-circle-fill h2"></i></button>
                </div>
              </div>
              <div class="col-md-6">
                <label>TIPO DE DOCUMENTO A CARGAR</label>
                <select name="tipo_doc" class="form-control">
                  <option value="">Selcciones una opción...</option>
                  <option value="PDF">PDF</option>
                  <option value="DOC">DOC</option>
                  <option value="PNG">PNG</option>
                  <option value="JPG">JPG</option>
                </select>
              </div>
              <div class="col-md-6">
                <label> INGRESA LA CANTIDAD DE DOCUMENTOS</label>
                <input type="number" name="cantidad[]" class="form-control">
              </div>
              <div class="col-md-6">
                <label>Nombre del Documento:</label><br>
                <input type="text" name="nom_doc[]" class="form-control" required>
              </div>
              <div class="col-md-6">
                <label>Documento:</label><br>
                <input type="file" required name="documento[]" class="form-control-file" id="formFileMultiple" multiple >
              </div>
             

              <div class="newData"></div>

              <center class="col-12">
                <input type="submit" class="btn btn-success btn-lg"style="background-color: #25d366;" name="save" id="save" value="Guardar"/>
                <a href="home.php" class="btn btn-success btn-lg salir" style="background-color: #333333;">Salir <i class="bi bi-box-arrow-right me-2"></i></a>
              </center>
              
        </form>
      </div>   
    </div>
</div>
    

  <script src="javascript/clonarformulario.js"></script>
 <?php include("includes/footer.php")?>
