<?php
#inicializo variables
$usuario=$this->session->userdata('datos_usuarios');


//ALERTAS E INFORMACIONES
if($this->session->flashdata('error')): ?>
	<!-- Divicion en caso  de algun mensaje de error	-->
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<p class="alert alert-danger">
					<?php echo $this->session->flashdata('error');?>
				</p>
			</div>
		</div>
	</div>
<?php endif; ?>


<?php if($this->session->flashdata('info')): ?>
	<!-- Divicion en caso  de alguna INFORMACION	-->
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<p class="alert alert-info">
					<?php echo $this->session->flashdata('info');?>
				</p>
			</div>
		</div>
	</div>
<?php endif; ?>



<?php if($this->session->flashdata('ok')): ?>
	<!-- Divicion en caso  de algun mensaje satosfactorio	-->
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<p class="alert alert-success">
					<?php echo $this->session->flashdata('ok');?>
				</p>
			</div>
		</div>
	</div>
<?php endif; ?>

<!-- Inicio del contenedor del Contenido -->
<div id="contenedor_centar" class="container">
		<div class="row">
			<!-- Barra LATERAL de Navegacion -->
			<div class="col-xs-3"> 
				<ul class="nav nav-pills nav-stacked">
					<li class="active"><a href="">OPCIONES</a></li>
					<li><a href="<?php echo base_url().index_page().'/docente/registro_alumno'; ?>">Registro de Alumno</a></li>
					<li><a href="<?php echo base_url().index_page().'/docente/'; ?>">Mis Secciones</a></li>
					<li><a href="<?php echo base_url().index_page().'/docente/'; ?>">Cargar Avances</a></li>
					<li><button class="btn btn-info form-control" type="button">
					  Mensajes <span class="badge">0</span>
					</button></li>
				</ul>
			</div>
		<!-- FIN Barra Lateral -->


<!-- EN CASO DE REGISTRO DE ESTUDIANTE SE MOSTRARA ESTA PARTE -->	
<?php if($this->session->flashdata('registroAlumno')):?>
<!-- Registro de cuentas Representane-->
			<!-- FIN Barra de Navegacion -->
			
			<div class="col-xs-8"> 
				<form action="<?php echo base_url().index_page().'/docente/procesar_registro_alumno'; ?>" class="form-horizontal" method="post" role="form">
					    	<!--Formulario de registro DOCENTE  -->				
										<div class="panel panel-warning">
										  <div class="panel-heading"><label>Registro</label> Representante del Alumno</div>
										  <div class="panel-body">

													  
													  <div class="form-group">
													    <label for="nombreR" class="col-sm-2 control-label">Nombres</label>
													    <div class="col-sm-10">
													      <input type="text" name="nombreR" class="form-control" id="nombreR" placeholder="Nombres" required>
													    </div>
													  </div>

													  <div class="form-group">
													    <label for="apellidoR" class="col-sm-2 control-label">Apellido</label>
													    <div class="col-sm-10">
													      <input type="text" name="apellidoR" class="form-control" id="apellidoR" placeholder="Apellidos" required>
													    </div>
													  </div>

													  <div class="form-group">
													    <label for="cedulaR" class="col-sm-2 control-label">Cedula</label>
													    <div class="col-sm-10">
													      <input type="text" name="cedulaR" class="form-control" id="cedulaR" value="V-">
													    </div>
													  </div>

													  <div class="form-group">
													    <label for="edadR" class="col-sm-2 control-label">Edad</label>
													    <div class="col-sm-10">
													      <input type="number" name="edadR" class="form-control" id="edadR" placeholder="18 a 70 años" min="18" max="70">
													    </div>
													  </div>

													  <div class="form-group">
													    <label for="telefono" class="col-sm-2 control-label">Telefono</label>
													    <div class="col-sm-10">
													      <input type="text" name="telefono" class="form-control" id="telefono" placeholder="telefono">
													    </div>
													  </div>

													  <div class="form-group">
													    <label for="inputEmail3" class="col-sm-2 control-label">Correo</label>
													    <div class="col-sm-10">
													      <input type="email" name="correo" class="form-control" id="inputEmail3" placeholder="correo@electronico.com">
													    </div>
													  </div>

													  <div class="form-group">
													    <label for="direccion" class="col-sm-2 control-label">Direcci&oacute;n</label>
													    <div class="col-sm-10">
													      <textarea name="direccion" id="direccion" rows="10" class="form-control" placeholder="Direccion Completa"></textarea>
													    </div>
													  </div>

													

										<!--  Fin del Formulario para REPRESENTANE -->
										  </div>
										</div>
					<!--ALUMNO-->

							<div class="panel panel-success">
							  <div class="panel-heading">Registro de ALUMNO</div>
							  <div class="panel-body">

										
										  
										  <div class="form-group">
										    <label for="nombreA" class="col-sm-2 control-label">Nombres</label>
										    <div class="col-sm-10">
										      <input type="text" name="nombreA" class="form-control" id="nombreA" placeholder="Nombre" required>
										    </div>
										  </div>

										  <div class="form-group">
										    <label for="apellidoA" class="col-sm-2 control-label">Apellidos</label>
										    <div class="col-sm-10">
										      <input type="text" name="apellidoA" class="form-control" id="apellidoA" placeholder="Apellido" required>
										    </div>
										  </div>

										  <div class="form-group">
										    <label for="cedulaA" class="col-sm-2 control-label">Cedula</label>
										    <div class="col-sm-10">
										      <input type="text" name="cedulaA" class="form-control" id="cedulaA" value="V-">
										    </div>
										  </div>
										  

										  <div class="form-group">
										    <label for="edadA" class="col-sm-2 control-label">Edad</label>
										    <div class="col-sm-10">
										      <input type="number" name="edadA" class="form-control" id="edadA">
										    </div>
										  </div>



										  <div class="form-group">
										    <label for="alergico" class="col-sm-2 control-label">Alegico?</label>
										    <div class="col-sm-10">
										    	<select name="alergico" id="alergico" class="form-control" >
										    		<option value="S">SI</option>
										    		<option value="N">NO</option>
										    	</select>
										    </div>
										  </div>
										  <div class="form-group">
										    <label for="descripcion_alergia" class="col-sm-2 control-label">En caso de Alergia</label>
										    <div class="col-sm-10">
										      <input type="text" class="form-control" name="descripcion_alergia" id="descripcion_alergia" placeholder="En caso de ser ALRGICO describa">
										    </div>
										  </div>

										  <div class="form-group">
										    <label for="peso" class="col-sm-2 control-label">Peso</label>
										    <div class="col-sm-10">
										      <input type="number" name="peso" class="form-control" id="peso">
										    </div>
										  </div>

										  <div class="form-group">
										    <label for="estatura" class="col-sm-2 control-label">Estatura</label>
										    <div class="col-sm-10">
										      <input type="text" name="estatura" class="form-control" id="estatura">
										    </div>
										  </div>

										  <div class="form-group">
										    <label for="ult_consulta" class="col-sm-2 control-label">Ultima Visita Psicologica</label>
										    <div class="col-sm-10">
										      <input type="text" name="ult_consulta" class="form-control" id="ult_consulta" placeholder="Ejemplo 10-05-2014">
										    </div>
										  </div>


										  <div class="form-group">
										    <label for="seccion" class="col-sm-2 control-label">Seccion</label>
										    <div class="col-sm-10">
										      	<select name="seccion" class="form-control" id="seccion">
										    		<?php #recorro para Buscar las secciones
										    			if($this->session->userdata('secciones_registradas')){
										    				$secciones=$this->session->userdata('secciones_registradas');
										    				for ($i=0; $i < count($secciones) ; $i++) { 
										    					$turno="";
										    					if($secciones[$i]['turno']=='M'){$turno='Mañana';}
										    					if($secciones[$i]['turno']=='T'){$turno='Tarde';}
										    					# Recorro las secciones para imprimirlas
										    					echo '<option value="'.$secciones[$i]['id'].'">'.$secciones[$i]['seccion'].' - '.$secciones[$i]['grado'].' [ '.strtoupper($secciones[$i]['nombre_docente']). ' ] ('.$turno. ') </option>';
										    				}
										    			}
										    		?>
										    	</select>
										    </div>
										  </div>



										  <div class="form-group">
										    <div class="col-sm-offset-2 col-sm-10">
										      <button type="submit" class="btn btn-primary">Registrar</button>
										    </div>
										  </div>
				

							<!--  Fin del Formulario para ALUMNO -->
							  </div>
							</div>
					<!--Fin de ALUMNO -->

				</form>
				<!-- ** cierre de col-7 -->	
			</div>

			<div class="col-xs-1"></div>


	<!-- FIN DE REGISTRO DE Representante -->

<!-- FIN DE REGISTRO DE ALUMNO -->
<?php endif; #fin del if si recibe flashdata('registroAlumno') ?>
<!-- <<<<  FIN DE REGISTRO DE ESTUDIANTE -->





<?php if($this->session->flashdata('selecciono_seccion')): 
$seccion=$this->session->flashdata('selecciono_seccion');
$secciones_docente=$this->session->userdata('secciones_docente');
?>
	<!--  si selecciona Una seccion especifica	-->
	<div class="col-md-9 docs">
		<pre>Selecciono la seccion <?php 
		//echo $seccion['id']; 
		for ($i=0; $i < count($secciones_docente); $i++) { 
			if ($secciones_docente[$i]['id']==$seccion['id']) {
							# Describimos la seccion
							echo "<br>Secci&oacute;n : ".$secciones_docente[$i]['seccion'];
							echo "  Grado : ".$secciones_docente[$i]['grado'];
							echo "<br>Cantidad de Alumnos Inscritos:".count($seccion['alumnos']);
							echo "  - CAPACIDAD DE [".$secciones_docente[$i]['cap_alumnos']."] ALUMNOS";
						}			
		}
		echo "\n <br><hr>";
		$alumnos=$seccion['alumnos'];

		?></pre>
				
		<div class="panel panel-success">
		      <!-- Default panel contents -->
		      <div class="panel-heading">Listado de Alumnos</div>
		      <div class="panel-body">
		        <p>A continuacion se mustra los alumnos de la seccion seleccionada.</p>
		      </div>

		      <!-- Table -->
		      <table class="table">
		        <thead>
		          <tr>
		            <th>#</th>
		            <th>Alumno</th>
		            <th>Representante</th>
		            <th>Edad</th>
		            <th>OPCIONES</th>
		          </tr>
		        </thead>
		        <tbody>
		        <?php
		        	for ($a=0; $a < count($alumnos); $a++) { 
		        		$btn_cargar_avance='<button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Cargar Avances" data-original-title="Cargar Avances"><span class="glyphicon glyphicon-export" aria-hidden="true"></span></button>';
		        		$btn_actualizar='<button type="button" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Actualizar Datos" data-original-title="Actualizar Datos"><span class="glyphicon glyphicon-repeat" aria-hidden="true"></span></button>';
		        		$btn_cambiar_de_seccion='<button type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Cambiar de Seccion" data-original-title="Cambiar de Seccion"><span class="glyphicon glyphicon-random" aria-hidden="true"></span></button>';
		        		$btn_info_avances='<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Ver Avances" data-original-title="Ver Avances"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span></button>';
		        		# imprimimos cuerpo de tabla
		        		echo "<tr><td>".($a+1)."</td><td>".strtoupper( $alumnos[$a]['nombres']." ".$alumnos[$a]['apellidos'])."</td><td>".strtoupper($alumnos[$a]['representante'])."</td><td>".$alumnos[$a]['edad']."</td><td> <a href=\"#\"> $btn_cargar_avance </a>  <a href=\"#\"> $btn_actualizar </a>   <a href=\"#\"> $btn_cambiar_de_seccion </a>   <a href=\"#\"> $btn_info_avances </a> </td></tr>";
		        	}
		        ?>
		        </tbody>
		      </table>
		    </div>

		    <script type="text/javascript">
		    	$(function () {
  					$('[data-toggle="tooltip"]').tooltip()
				});
		    </script>
	</div>
	<!--  FIN de IF si selecciona Una seccion especifica	-->
<?php endif;?>



<?php if(!$this->session->flashdata('registroAlumno') && !$this->session->flashdata('selecciono_seccion') ):?>
			<!-- Contenido Central -->
			<div class="col-md-9 docs">
						<h1 id="getting-started">Bienvenido <?php echo $usuario['nombre_completo'];?> al panel del Docente</h1>
						<p>Texto de introduccion algo que pueda ser  <code>&lt;Relevante&gt;</code> en esta seccion.</p>
						

						<div class="jumbotron">
							<h1>Selecciona una Secci&oacute;n</h1>
						 	<div class="panel panel-primary">
						      <div class="panel-heading">
						        <h3 class="panel-title">Mis Secciones</h3>
						      </div>
						      <div class="panel-body">
						        	<!-- IMPRESION DE SECCIONES -->
						        	<div class="list-group">
						        	<?php
						        			$secciones=$this->session->userdata('secciones_docente');
						        			for ($i=0; $i < count($secciones); $i++) { 
						        				# Imprimo Las Secciones
						        				echo '<a href="'.base_url().index_page().'/docente/seleccionar_seccion/'.$secciones[$i]['id'].'" class="list-group-item"><h4 class="list-group-item-heading">Seccion [ <span class="label label-success">'.$secciones[$i]['seccion'].'</span> ]</h4><p class="list-group-item-text">Grado : <span class="label label-warning">'.$secciones[$i]['grado'].'</span> / capacidad de Alumnos: <span class="badge">'.$secciones[$i]['cap_alumnos'].'</span> Turno: 	<span class="label label-info">'.$secciones[$i]['turno'].'</span></p></a>';
						        			}
						        	?>
								      <!-- Texto de muestra <a href="#" class="list-group-item active">
								        <h4 class="list-group-item-heading">List group item heading</h4>
								        <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
								      </a> -->
								    </div>
						        	<!-- FIN DE SECCIONES -->
						      </div>
						    </div> 
						 </div>
			</div>
			<!-- Fin Contenido Central -->

<?php endif;?>


	</div>
</div>
<!-- Final del contenedor del Contenido -->