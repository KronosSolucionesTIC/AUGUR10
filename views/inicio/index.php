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
    <div class="col-lg-12 col-md-12 col-xs-12">
      <div class="">
        <br>
        <br>
        <br>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-6 col-md-12 col-xs-12">
      <div class="">
          <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-8 text-center">
                <br>
                <br>
            </div>
            <div class="col-lg-2">
            </div>
          </div>
          <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-10">
                <div id="caja1">
                    <div class="pt-4 pb-3 pl-3 pr-3" id="bordes">
                        <label class="titulo1">Herramienta de Autogestion de Riesgos</label>
                    </div>
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-10" >
                <div class="mt-2" id="caja2">
                    <div class="pt-4 pb-3 pl-3 pr-3">
                      <div class="row">
                        <div class="col-lg-12">
                          <label class="titulo2">
                            Aqui se diagnosticara su cadena de abastecimiento en tres etapas:
                          </label>
                        </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col-lg-2 text-right">
                          <label class="fondo_numeros text-center">1</label>
                        </div>
                        <div class="col-lg-10">
                          <label class="texto1">Indicadores KPI’s y KRI’s en los procesos claves de la cadena de abastecimiento.</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-2 text-right">
                          <label class="fondo_numeros text-center">2</label>
                        </div>
                        <div class="col-lg-10">
                          <label class="texto1">Gestión de riesgo en los procesos de la cadena de abastecimiento.</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-2 text-right">
                          <label class="fondo_numeros text-center">3</label>
                        </div>
                        <div class="col-lg-10">
                          <label class="texto1">Evaluación de siniestralidad.</label>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="row">
      <div class="col-lg-6 col-md-12 col-xs-12">
      <div class="">
        <br>
        <br>
        <br>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12 col-md-12 col-xs-12">
      <div class="">
        <br>
        <br>
      </div>
    </div>
  </div>
</div>
