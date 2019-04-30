<?php
include '../header.php';

include '../../models/users.php';
$user = new Users();

$CIUU   = $user->getCIIU();
$sector = $user->getSector();
$tamano = $user->getTamano();
$dpto   = $user->getDpto();
$muni   = $user->getMuni();
?>
<div class="container-fluid" id="principal">
  <div class="row">
    <div class="col-lg-1">
    </div>
    <div class="col-lg-10">
      <br>
    </div>
    <div class="col-lg-1">
    </div>
  </div>
  <div class="row">
    <div class="col-lg-1">
    </div>
    <div class="col-lg-10 fondo_diag">
      <br>
    </div>
    <div class="col-lg-1">
    </div>
  </div>
  <div class="row">
    <div class="col-lg-1">
    </div>
    <div class="col-lg-10 text-left fondo_diag">
      <label class="titulo_verde">DIAGNÓSTICOS</label>
    </div>
    <div class="col-lg-1">
    </div>
  </div>
  <div class="row">
    <div class="col-lg-1">
    </div>
    <div class="col-lg-10 fondo_diag">
      <br>
    </div>
    <div class="col-lg-1">
    </div>
  </div>
  <div class="row">
    <div class="col-lg-1">
    </div>
    <div class="col-lg-10 fondo_diag">
      <br>
    </div>
    <div class="col-lg-1">
    </div>
  </div>
  <div class="row">
    <div class="col-lg-1">
    </div>
    <div class="col-lg-10 fondo_diag">
      <br>
    </div>
    <div class="col-lg-1">
    </div>
  </div>
  <div class="row">
    <div class="col-lg-1">
    </div>
    <div class="col-lg-10 fondo_diag">
      <br>
    </div>
    <div class="col-lg-1">
    </div>
  </div>
  <div class="row">
    <div class="col-lg-1">
    </div>
    <div class="col-lg-10 fondo_diag">
      <br>
    </div>
    <div class="col-lg-1">
    </div>
  </div>
  <div class="row">
    <div class="col-lg-1">
      <br>
    </div>
    <div class="col-lg-10 col-md-12 col-xs-12">
      <div class="fondo_diag">
        <label class="titulo_gris">¡HOLA! ACTUALMENTE NO TIENE HISTORIAL DE DIAGNÓSTICOS</label>
      </div>
    </div>
    <div class="col-lg-1">
      <br>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-1">
      <br>
    </div>
    <div class="col-lg-10 col-md-12 col-xs-12">
      <div class="fondo_diag">
        <label class="titulo_gris">LE INVITAMOS A REALIZAR SU PRIMER DIGANÓSTICO</label>
      </div>
    </div>
    <div class="col-lg-1">
    </div>
  </div>
  <div class="row">
    <div class="col-lg-1">
    </div>
    <div class="col-lg-10 fondo_diag">
      <br>
    </div>
    <div class="col-lg-1">
    </div>
  </div>
  <div class="row">
    <div class="col-lg-1">
      <br>
    </div>
    <div class="col-lg-10 col-md-12 col-xs-12">
      <div class="fondo_diag">
        <div class="Rectangle-66 pt-2 text-center" >
          <input type="submit" value="CREAR DIAGNÓSTICO" class="boton" name="create">
        </div>
      </div>
    </div>
    <div class="col-lg-1">
    </div>
  </div>
  <div class="row">
    <div class="col-lg-1">
    </div>
    <div class="col-lg-10 fondo_diag">
      <br>
    </div>
    <div class="col-lg-1">
    </div>
  </div>
  <div class="row">
    <div class="col-lg-1">
    </div>
    <div class="col-lg-10 fondo_diag">
      <br>
    </div>
    <div class="col-lg-1">
    </div>
  </div>
  <div class="row">
    <div class="col-lg-1">
    </div>
    <div class="col-lg-10 fondo_diag">
      <br>
    </div>
    <div class="col-lg-1">
    </div>
  </div>
  <div class="row">
    <div class="col-lg-1">
    </div>
    <div class="col-lg-10 fondo_diag">
      <br>
    </div>
    <div class="col-lg-1">
    </div>
  </div>
  <div class="row">
    <div class="col-lg-1">
    </div>
    <div class="col-lg-10 col-md-12 col-xs-12">
      <div class="fondo_diag">
      </div>
    </div>
    <div class="col-lg-1">
    </div>
  </div>
  <div class="row">
    <div class="col-lg-1">
    </div>
    <div class="col-lg-10 col-md-12 col-xs-12">
      <div class="fondo_diag">
      </div>
    </div>
    <div class="col-lg-1">
    </div>
  </div>
  <div class="row">
    <div class="col-lg-1">
    </div>
    <div class="col-lg-10 fondo_diag">
      <br>
    </div>
    <div class="col-lg-1">
    </div>
  </div>
  <div class="row">
    <div class="col-lg-1">
    </div>
    <div class="col-lg-10 fondo_diag">
      <br>
    </div>
    <div class="col-lg-1">
    </div>
  </div>
  <div class="row">
    <div class="col-lg-1">
      <br>
    </div>
    <div class="col-lg-10">
    </div>
    <div class="col-lg-1">
    </div>
  </div>
</div>
<?php
include '../footer.php';
?>