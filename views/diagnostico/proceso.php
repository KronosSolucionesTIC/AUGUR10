<?php
include '../../models/proceso.php';
$proceso= new Proceso();

$preguntas   = $proceso->getPreguntas();
$resp = $proceso->getResp();
?>
<div class="col-12">
	<br>
</div>
<div class="col-12 titulo_verde">
	 Procesos en Planta de Produccion
</div>
<div class="col-12">
	<br>
</div>
<div class="col-12 texto_verde text-center">
	<br>
</div>
<div class="col-12">
	<br>
</div>
	<?php
		if (count($preguntas) > 0) {
    		foreach ($preguntas as $column => $value) {
	?>
<div class="col-12 text-center">
	<label class="titulo_gris">	
	<?php	
    			echo utf8_encode($value['type_approach']);
    ?>		
	</label>
</div>
<div class="col-12">
	<br>
</div>
<div class="col-12 text-center">
	<?php
		if (count($resp) > 0) {
    		foreach ($resp as $column => $value) {
    ?>
    <button id="mi-boton" class="btn respuestas">
    <?php
    			echo utf8_encode($value['answer']);
   	?>
   	</button>
   	<?php
    		}
    	}
    ?>			
</div>
<div class="col-12">
	<br>
</div>
<?php    		
			}
    	}
?>
<div class="row">
	<div class="col-2 footer_form">
        <br>
        <div class="Rectangle-66 pt-2 text-center" >
            <a id="nav-encuesta-tab" data-toggle="tab" href="#nav-encuesta" role="tab" aria-controls="nav-encuesta" aria-selected="false">
                <input type="submit" value="Volver" class="boton" name="create">
            </a>
        </div>
        <br>        
	</div>
    <div class="col-8 footer_form">
    </div>
	<div class="col-2 footer_form">
        <br>
        <div class="Rectangle-66 pt-2 text-center" >
        	<a id="nav-company-tab" data-toggle="tab" href="#nav-company" role="tab" aria-controls="nav-company" aria-selected="false">
            	<input type="submit" value="Continuar" class="boton" name="create">
          	</a>
        </div>
        <br>
    </div>
</div>