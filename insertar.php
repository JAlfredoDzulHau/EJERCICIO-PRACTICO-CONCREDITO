<?php
 include('config/conexion.php');
 
if(isset($_POST['save'])){

  
  $nombre=$_POST['nombre'];
  $apellido_pat=$_POST['apellido_pat'];
  $apellido_mat=$_POST['apellido_mat'];
  $calle=$_POST['calle'];
  $numero=$_POST['numero'];
  $colonia=$_POST['colonia'];
  $cod_postal=$_POST['cod_postal'];
  $telefono=$_POST['telefono'];
  $rfc=$_POST['rfc'];
  $tipo_doc=$_POST['tipo_doc'];
  $cantidad=$_POST['cantidad'];
  $nom_doc=$_POST['nom_doc'];
  $documento=$_POST['documento'];
  $estatus="ENVIADO";
  $observacion="";
  
  function codAleatorio($length = 5) {
    return substr(str_shuffle(str_repeat($x='0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
  }
  $code_referencia  = codAleatorio();
  
  for ($i=0; $i < count($nom_doc); $i++){
    
    $InserData=("INSERT INTO clientes (nombre, apellido_pat, apellido_mat, calle, numero, colonia, cod_postal, telefono, rfc, tipo_doc, cantidad, nom_doc, documento, estatus, observacion, code_referencia) 
      VALUES('".$nombre."', '".$apellido_pat."','".$apellido_mat."', '".$calle."', '".$numero."', '".$colonia."', '".$cod_postal."', '".$telefono."', '".$rfc."', '".$tipo_doc."', '".$cantidad[$i]."', '".$nom_doc[$i]."', '".$documento[$i]."', '".$estatus."', '".$observacion."','".$code_referencia."')");
      $resultadoInsertUser = mysqli_query($conexion, $InserData);
      
    }
    header('Location: ./');
    
}

?>