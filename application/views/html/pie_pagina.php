<div class="modal" id="form_reg_docente">
  <div class="modal-dialog">
    <div class="modal-content">
	
	<form action="<?php echo base_url().index_page().'/administrador/registrarDocente'; ?>" method="post" class="form-horizontal">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Registro</h4>
      </div>

      <div class="modal-body">
						
				    	<!--Formulario de registro DOCENTE  -->
				
						<div class="panel panel-info">
						  <div class="panel-heading">Registro de Cuenta DOCENTE</div>
						  	

						  	<div class="panel-body">
						  		<?php if($this->session->flashdata('error')){
						  			echo "<p class=\"alert alert-danger\">".$this->session->flashdata('error')."</p>";
						  		}?>
									  
									  <div class="form-group">
									    <label for="nombre" class="col-sm-2 control-label">Nombre</label>
									    <div class="col-sm-10">
									      <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
									    </div>
									  </div>

									  <div class="form-group">
									    <label for="apellido" class="col-sm-2 control-label">Apellido</label>
									    <div class="col-sm-10">
									      <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" required>
									    </div>
									  </div>

									  <div class="form-group">
									    <label for="telefono" class="col-sm-2 control-label">Telefono</label>
									    <div class="col-sm-10">
									      <input type="text" class="form-control" id="telefono" name="telefono" placeholder="telefono">
									    </div>
									  </div>
									  <div class="form-group">
									    <label for="inputEmail3" class="col-sm-2 control-label">Correo</label>
									    <div class="col-sm-10">
									      <input type="email" class="form-control" id="inputEmail3" name="correo" placeholder="Email">
									    </div>
									  </div>
									  
									  <div class="form-group">
									    <label for="usuario" class="col-sm-2 control-label">USUARIO</label>
									    <div class="col-sm-10">
									      <input type="text" class="form-control" id="usuario" name="usuario" placeholder="usuario" required>
									    </div>
									  </div>

									  <div class="form-group">
									    <label for="clave" class="col-sm-2 control-label">Clave</label>
									    <div class="col-sm-10">
									      <input type="password" class="form-control" id="clave" name="clave" placeholder="Clave" required>
									    </div>
									  </div>
									  <div class="form-group">
									    <label for="clave2" class="col-sm-2 control-label">Confirmaci&oacute;n de Clave</label>
									    <div class="col-sm-10">
									      <input type="password" class="form-control" id="clave2" name="reclave" placeholder="Repita la Clave" required>
									    </div>
									  </div>

									  <div class="form-group">
									    <div class="col-sm-offset-2 col-sm-10">
									      <button id="btn_reg_docente" type="submit" class="btn btn-primary">Registrar</button>
									    </div>
									  </div>

								<!--  Fin del Formulario para Docente -->

      						</div>
      					</div>

      </div>

      <div class="modal-footer">
      </div>
	</form>

    </div>
  </div>
</div>


<!--MODAL Registro seccion -->
<div class="modal" id="form_reg_seccion">
  <div class="modal-dialog">
    <div class="modal-content">
	
	<form action="<?php echo base_url().index_page().'/administrador/registroSeccion'; ?>" method="post" class="form-horizontal">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Registro de Secci&oacute;n</h4>
      </div>

      <div class="modal-body">
						
				    	<!--Formulario de registro SECCION  -->
				
						<div class="panel panel-info">
						  <div class="panel-heading">Apertura de una Secci&oacute;n</div>
						  	

						  	<div class="panel-body">
						  		<?php if($this->session->flashdata('error')){
						  			echo "<p class=\"alert alert-danger\">".$this->session->flashdata('error')."</p>";
						  		}?>
									  
									  <div class="form-group">
									    <label for="seccion" class="col-sm-2 control-label">Secci&oacute;n</label>
									    <div class="col-sm-10">
									      <input type="text" class="form-control" id="seccion" name="seccion" placeholder="Seccion" required>
									    </div>
									  </div>

									  <div class="form-group">
									    <label for="grado" class="col-sm-2 control-label">Grado</label>
									    <div class="col-sm-10">
									      <input type="text" class="form-control" id="grado" name="grado" placeholder="grado" required>
									    </div>
									  </div>

									  <div class="form-group">
									    <label for="capacidad" class="col-sm-4 control-label">Capacidad de alumnos</label>
									    <div class="col-sm-8">
									      <!-- <input type="number" name="capacidad" min="10" max="30"class="form-control" id="capacidad" name="capacidad" placeholder="Capacidad de alumnos (10) (20) (30)" required> -->
									    	<select name="capacidad">
									    		<option value="10">10</option>
									    		<option value="20">20</option>
									    		<option value="30">30</option>
									    	</select>
									    </div>
									  </div>

									  <div class="form-group">
									    <label for="docente" class="col-sm-2 control-label">Docente</label>
									    <div class="col-sm-10">
									      <select name="docente" id="docente" class="form-control">
									      <?php if ($this->session->userdata('docentes_registrados')) {
									      	# Imprimo lo docentes
									      	$docentes=$this->session->userdata('docentes_registrados');
									      	for($p=0;$p<count($docentes);$p++){
									      		echo '<option value="'.$docentes[$p]['enlace'].'">'.strtoupper($docentes[$p]['nombre_completo']).'</option>';
									      	}
									      }?>
									      </select>
									    </div>
									  </div>

									  <div class="form-group">
									    <label for="turno" class="col-sm-2 control-label">Turno</label>
									    <div class="col-sm-10">
									      <select name="turno" id="turno" class="form-control">
									      	<option value="M">Ma&ntilde;ana</option>
									      	<option value="T">Tarde</option>
									      </select>
									    </div>
									  </div>

									  <div class="form-group">
									    <div class="col-sm-offset-2 col-sm-10">
									      <button id="btn_reg_docente" type="submit" class="btn btn-primary">Registrar</button>
									    </div>
									  </div>

								<!--  Fin del Formulario para Docente -->

      						</div>
      					</div>

      </div>

      <div class="modal-footer">
      </div>
	</form>

    </div>
  </div>
</div>



	<footer id="footer">
      <div class="container" role="contentinfo">
        <div class="row">
          <div class="col-sm-12">
          	<div class="row">
              <div class="col-md-12">
                <a href="" rel="nofollow" target="ext" class="upta">UPTA-Maracay</a>
                <ul class="list-inline">
              			<li><a href="" title="BootstrapZero on Google Plus" target="ext" rel="nofollow">Google+</a></li>
              			<li><a href="" title="@BootstrapZero on Twitter" target="ext" rel="nofollow">Twitter</a></li>
              	</ul>
              </div>
           	</div>
            <div class="row">
              <div class="col-md-12">
              	<!--  -->
              </div>
            </div>
          </div>
        </div><!--/row-->

        <div class="row">
        	<div class="col-md-12">
              	<p class="text-right">
              	Patrocinado y producido por Desarrolladores <a href="" >Kelvin Navas , Miguel Díaz y Rainny González</a>.
                </p>
          	</div>
        </div><!--/row-->
      </div>
	</footer>



<script  type="text/javascript">

$(function () {
$('[data-toggle="tooltip"]').tooltip()
});

$('#btnCrearCuenta').click(function(e){
	e.preventDefault();
	$('#form_reg_docente').modal();
});
$('#reg_docente').click(function(e){
	e.preventDefault();
	$('#form_reg_docente').modal();
});


$('#reg_seccion').click(function(e){
	e.preventDefault();
	$('#form_reg_seccion').modal();
});

$('#alergico').change(function(){
	if($("#alergico").val()=='N'){
		$('#descripcion_alergia').attr('disabled','disabled');
	}else{
		$('#descripcion_alergia').removeAttr('disabled');
	}

});

 $(function() {
$( "#fnacimiento" ).datepicker();
});

$("#btn_reg_docente").click(function(){
	if($("#clave").val()!=$("#clave2").val()){
		alert("Las clave no Coincide porfavor corrija");
		event.preventDefault();
	}
});
</script>
</body>