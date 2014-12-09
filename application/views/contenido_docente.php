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
					<li><button class="btn btn-info form-control" type="button">
					  Mensajes <span class="badge">0</span>
					</button></li>
				</ul>

				<div class="baner forml-control">
					<p>Instituto de Educación Especial Nacional Bolivariano “RÓMULO GALLEGOS"</p>
				</div>
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


<?php 
if(isset($avance)):
?>
<div class="col-md-9 docs maquina">
		<div class="bs-callout bs-callout-warning">
		    <h4>Carga de Avances del alumno</h4>
		    <p>En este modulo usted Puede Cargar <code>Los Avances en Distintas areas del alumno</code> .</p>
		 	<pre>Alumno: <?php echo strtoupper($alumno['nombres'].' '.$alumno['apellidos']); ?>
		 		<br>Cedula: <?php echo $alumno['cedula'].'   Edad:'.$alumno['edad'].'  Seccion: '.$alumno['seccion'].'  Grado:'.$alumno['grado'];?> 
			</pre>

			<div class="row-fluid">
				<div class="col-md-12">
					<form class="form-horizontal" method="post" action="<?php echo base_url().index_page().'/docente/registrar_avance';?>" >
					<input type="hidden" name="id_alumno" value="<?php echo $alumno['id'];?>">
					<input type="hidden" name="id_enlace_docente" value="<?php echo $usuario['id_enlace'];?>">
						<h3>Areas del Desarrollo de la Personalidad</h3>
					  <div class="form-group">
					  	<label from="cognitiva">Cognitiva:</label>
					  	<textarea name="cognitiva" id="cognitiva" class="form-control" placeholder="Describa el Pensamiento Logico, matematico, creativo, solucion de problemas, pensamiento critico y afectivo" rows="3"></textarea>
					  </div>


					  <div class="form-group">
					  	<label from="lenguaje">Lenguaje:</label>
					  	<textarea name="lenguaje" id="lenguaje" class="form-control" placeholder="Conversar, Leer Escribir" rows="3"></textarea>
					  </div>


					  <div class="form-group">
					  	<label from="social">Social:</label>
					  	<textarea name="social" id="social" class="form-control" placeholder="Describa el Pensamiento Logico, matematico, creativo, solucion de problemas, pensamiento critico y afectivo" rows="3"></textarea>
					  </div>


					  <div class="form-group">
					  	<label from="afectiva">Afectiva:</label>
					  	<textarea name="afectiva" id="afectiva" class="form-control" placeholder="Detalle su Descripci&oacute;n con las caracteristicas para esta area" rows="3"></textarea>
					  </div>


					  <div class="form-group">
					  	<label from="motora">Motora:</label>
					  	<textarea name="motora" id="motora" class="form-control" placeholder="Detalle su Descripci&oacute;n con las caracteristicas para esta area" rows="3"></textarea>
					  </div>


					  <div class="form-group">
					  	<label from="sexual">Sexual:</label>
					  	<textarea name="sexual" id="sexual" class="form-control" placeholder="Detalle su Descripci&oacute;n con las caracteristicas para esta area" rows="3"></textarea>
					  </div>


					  <div class="form-group">
					  	<label from="fisica">Fisica:</label>
					  	<textarea name="fisica" id="fisica" class="form-control" placeholder="Detalle su Descripci&oacute;n con las caracteristicas para esta area" rows="3"></textarea>
					  </div>


					  <div class="form-group">
					  	<label from="moral">Moral:</label>
					  	<textarea name="moral" id="moral" class="form-control" placeholder="Detalle su Descripci&oacute;n con las caracteristicas para esta area" rows="3"></textarea>
					  </div>
					  <button type="submit" class="btn btn-primary btn-lg">Cargar</button>
					</form>
				</div>
				
			</div>


		 </div>
 </div>


<?php	
// en caso de cargar los avances
 endif;
?>


<?php if(isset($avance_alumno)):?>
	<!--  se detalla los avaces del alumno y se cargan en una tabla	-->
	<div class="col-md-9 docs">
		<h1>Docente <?php echo $usuario['nombre_completo'];?></h1>
		<pre>Alumno: <?php echo strtoupper($alumno['nombres'].' '.$alumno['apellidos']); ?>
		 		<br>Cedula: <?php echo $alumno['cedula'].'   Edad:'.$alumno['edad'].'  Seccion: '.$alumno['seccion'].'  Grado:'.$alumno['grado'];?> 
		</pre>
		<h3>Avances que ha tenido el Alumno</h3>
						<!-- <table class="table">
					        <thead>
					          <tr>
					            <th>#</th>
					            <th>First Name</th>
					            <th>Last Name</th>
					            <th>Fecha</th>
					          </tr>
					        </thead>
					        <tbody>
								<?php //var_dump($avance_alumno);
								/*
										for ($i=0; $i < count($avance_alumno); $i++) { 
											echo "<tr><td>".($i+1)."</td><td>Mark</td><td>".$avance_alumno[$i]['fecha']."</td><td> <button class=\"btn btn-success\">Ver</button> </td></tr>";
										}*/
								?>

					        </tbody>
				      </table> -->

		<div class="row-fluid">
			<div class="col-md-6">
						<div class="panel panel-success">
										      <div class="panel-heading">
										        <h3 class="panel-title">Avances</h3>
										      </div>
										      <div class="panel-body">
										        	<!-- IMPRESION DE SECCIONES -->
										        	<div class="list-group">
												<?php //var_dump($avance_alumno);
														for ($i=0; $i < count($avance_alumno); $i++) { 
															//echo "<tr><td>".($i+1)."</td><td>Mark</td><td>".$avance_alumno[$i]['fecha']."</td><td> <button class=\"btn btn-success\">Ver</button> </td></tr>";
															echo '<p>#Nro. '.($i+1).'  -	 Fecha: 	<span class="label label-info"> '.$avance_alumno[$i]['fecha'].' </span>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <button class="btn btn-success" data-toggle="modal" data-target="#avance-'.$avance_alumno[$i]['id'].'">Ver  <span class="glyphicon glyphicon-search" aria-hidden="true"></span></button> </p>';
															// modal para mostrar despues
																echo "<div id=\"avance-".$avance_alumno[$i]['id']."\" class=\"modal fade avance-".$avance_alumno[$i]['id']."\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\" aria-hidden=\"true\">
																	  <div class=\"modal-dialog modal-lg\">
																	    <div class=\"modal-content maquina av-modal\">
																	      	

																	      	<div class=\"modal-header\">
																	      	    <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">×</span><span class=\"sr-only\">Close</span></button>
																	      	    <div class=\"bs-callout bs-callout-warning\">
																	      	    	<h4 class=\"modal-title\" id=\"myModalLabel\">Descripci&oacute;n del Avance</h4>
																	      	    </div>
																	      	</div>

																	      	<div class=\"modal-body\">
																	      		<form class=\"form-horizontal\" method=\"post\" action=\"?\">
																				<h3>Areas del Desarrollo de la Personalidad</h3>
																					  <div class=\"form-group\">
																					  	<label from=\"cognitiva\">Cognitiva:</label>
																					  	<textarea readonly name=\"cognitiva\" id=\"cognitiva\" class=\"form-control\" rows=\"3\">".$avance_alumno[$i]['cognitiva']."</textarea>
																					  </div>


																					  <div class=\"form-group\">
																					  	<label from=\"lenguaje\">Lenguaje:</label>
																					  	<textarea readonly name=\"lenguaje\" id=\"lenguaje\" class=\"form-control\"  rows=\"3\">".$avance_alumno[$i]['lenguaje']."</textarea>
																					  </div>


																					  <div class=\"form-group\">
																					  	<label from=\"social\">Social:</label>
																					  	<textarea readonly name=\"social\" id=\"social\" class=\"form-control\" rows=\"3\">".$avance_alumno[$i]['social']."</textarea>
																					  </div>


																					  <div class=\"form-group\">
																					  	<label from=\"afectiva\">Afectiva:</label>
																					  	<textarea readonly name=\"afectiva\" id=\"afectiva\" class=\"form-control\" rows=\"3\">".$avance_alumno[$i]['afectiva']."</textarea>
																					  </div>


																					  <div class=\"form-group\">
																					  	<label from=\"motora\">Motora:</label>
																					  	<textarea readonly name=\"motora\" id=\"motora\" class=\"form-control\" rows=\"3\">".$avance_alumno[$i]['motora']."</textarea>
																					  </div>


																					  <div class=\"form-group\">
																					  	<label from=\"sexual\">Sexual:</label>
																					  	<textarea readonly name=\"sexual\" id=\"sexual\" class=\"form-control\" rows=\"3\">".$avance_alumno[$i]['sexual']."</textarea>
																					  </div>


																					  <div class=\"form-group\">
																					  	<label from=\"fisica\">Fisica:</label>
																					  	<textarea readonly name=\"fisica\" id=\"fisica\" class=\"form-control\" rows=\"3\">".$avance_alumno[$i]['fisica']."</textarea>
																					  </div>


																					  <div class=\"form-group\">
																					  	<label from=\"moral\"\>Moral:</label>
																					  	<textarea readonly name=\"moral\" id=\"moral\" class=\"form-control\" rows=\"3\">".$avance_alumno[$i]['moral']."</textarea>
																					  </div>
																					</form>
																	      	</div>

																	      <pre>Cargados a la fecha :".$avance_alumno[$i]['fecha']."</pre>
																	    </div>
																	  </div>
																  	  </div>";
														}
												?>\
												    </div>
												    <script type="text/javascript">
												    $('.enlace').on('show.bs.modal', function (e) {
														  if (!data) return e.preventDefault() // stops modal from being shown
														});
												    </script>
										        	<!-- FIN DE SECCIONES -->
										      </div>
						</div>
			</div>
			<div class="col-md-6">
				<div class="bs-callout bs-callout-warning"><h3>Seleccionar o Cambiar Seccion</h3></div>

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
			</div>
		</div>



	</div>
<?php endif;?>


<?php 
if(isset($selecciono_seccion['id']) && !isset($avance)): 
$seccion=$selecciono_seccion;

$secciones_docente=$this->session->userdata('secciones_docente');

//var_dump($todas_secciones);
//exit();
?>

	<!--  si selecciona Una seccion especifica	-->
	<div class="col-md-9 docs">
		<pre>Selecciono la seccion <?php 
		//echo $seccion['id'];
		$seccion_grado_seleccionada=""; 
		for ($i=0; $i < count($secciones_docente); $i++) { 

			if ($secciones_docente[$i]['id']==$seccion['id']) {
							$seccion_grado_seleccionada="<span class=\"label label-warning\">".$secciones_docente[$i]['seccion']."</span> Grado: <span class=\"label label-info\">".$secciones_docente[$i]['grado']."</span>";
							# Describimos la seccion
							echo "<br>Secci&oacute;n : <span class=\"label label-warning\">".$secciones_docente[$i]['seccion']."</span>";
							echo "  Grado : <span class=\"label label-success\">".$secciones_docente[$i]['grado']."</span>";
							echo "<br>Cantidad de Alumnos Inscritos: <span class=\"label label-info\">".count($seccion['alumnos'])."</span>";
							echo "  - CAPACIDAD DE [".$secciones_docente[$i]['cap_alumnos']."] ALUMNOS";
							//var_dump($seccion['alumnos']);
						}			
		}
		$alumnos=$seccion['alumnos'];?>
		</pre>
				
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
		        		$btn_actualizar='<a href="'.base_url().index_page().'/docente/actualizar_alumno/'.$alumnos[$a]['id'].'" ><button type="button" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Actualizar Datos" data-original-title="Actualizar Datos"><span class="glyphicon glyphicon-repeat" aria-hidden="true"></span></button>';
		        		$btn_cambiar_de_seccion='<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalcambiar'.$alumnos[$a]['id'].'" ><span class="glyphicon glyphicon-random" aria-hidden="true"></span></button>';
		        		$modal_cambio_seccion="
<!-- Modal -->
<div class=\"modal fade\" id=\"modalcambiar".$alumnos[$a]['id']."\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">

    <form action=\"".base_url().index_page()."/docente/cambiar_alumno_seccion\" method=\"post\" class=\"form-horizontal\">
        				
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only \">Cerrar</span></button>
        <h4 class=\"modal-title\" id=\"myModalLabel\">Cambiar de Seccion a este Alumno ". strtoupper($alumnos[$a]['nombres']." ".$alumnos[$a]['apellidos'])." </h4>
      </div>
      <div class=\"modal-body\">
        		<div class=\"bs-callout bs-callout-danger\">
        			<pre>Tenga Cuidado ya que al cambiar al alumno<br> ya no estara en esta secci&oacute;n.</pre>
        			<input type=\"hidden\" name=\"id_alumno\" value=\"".$alumnos[$a]['id']."\">
        			<select name=\"seccion\" id=\"seccion_nueva\" class=\"form-control\">
        				<option value=\"null\">Seleccione la Nueva secci&oacute;n</option>
        				";
        					//$todas_secciones=$this->session->userdata('secciones_registradas');


        					$opcciones_secciones="";
        					for($t=0;$t<count($todas_secciones);$t++){
        						$opcciones_secciones.='<option value="'.$todas_secciones[$t]['id'].'">GRADO: '.$todas_secciones[$t]['grado'].' - SECCI&Oacute;N: '.$todas_secciones[$t]['seccion'].' - DOCENTE: '.$todas_secciones[$t]['nombre_docente'].'</option>';
        					}
        				$modal_cambio_seccion.=$opcciones_secciones."
        			</select>
        			
        		</div>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">cancelar</button>
        <button type=\"submit\" class=\"btn btn-danger\">Ejecutar CAMBIO</button>
      </div>

	</form>

    </div>
  </div>
</div>
<!-- Fin de Modal Cambo de seccion -->
";
echo $modal_cambio_seccion;
		        		$btn_info_avances='<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Ver Avances" data-original-title="Ver Avances"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span></button>';
		        		# imprimimos cuerpo de tabla
		        		echo "<tr><td>".($a+1)."</td><td>".strtoupper( $alumnos[$a]['nombres']." ".$alumnos[$a]['apellidos'])."</td><td>".strtoupper($alumnos[$a]['representante'])."</td><td>".$alumnos[$a]['edad']."</td><td> <a href=\"".base_url().index_page()."/docente/cargar_avance/".$alumnos[$a]['id']."\"> $btn_cargar_avance </a>  <a href=\"#\"> $btn_actualizar </a>   <a href=\"#\"> $btn_cambiar_de_seccion </a>   <a href=\" ".base_url().index_page().'/docente/avances_alumno/'.$alumnos[$a]['id']." \"> $btn_info_avances </a> </td></tr>";
		        	}
		        ?>
		        </tbody>
		      </table>
		    </div>


				<div class="bs-callout bs-callout-warning">
					<h2>Seleccionar o Cambiar La Secci&oacute;n <?php echo "".$seccion_grado_seleccionada."";?></h2>
	
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

				</div>

					

		    <script type="text/javascript">
		    	$(function () {
  					$('[data-toggle="tooltip"]').tooltip()
				});
		    </script>
	</div>
	<!--  FIN de IF si selecciona Una seccion especifica	-->
<?php endif;?>



<?php if(isset($alumno_update)):?>
	<div class="col-md-9">
		<h3>Actualizion de Datos</h3>
		<?php //var_dump($alumno_update);?>
		<form action="<?php echo base_url().index_page()."/docente/procesar_actualizacion_alumno";?>" class="form-horizontal" method="post" role="form">
		<input type="hidden" name="id_alumno" value="<?php echo $alumno_update['id'];?>">
		<input type="hidden" name="id_representante" value="<?php echo $representante_update['id'];?>">			    	
					    	<!--Formulario de registro DOCENTE  -->				
										<div class="panel panel-warning">
										  <div class="panel-heading"><label>Actualizaci&oacute;n</label> de datos del REPRESENTANTE</div>
										  <div class="panel-body">

													  
													  <div class="form-group">
													    <label for="nombreR" class="col-sm-2 control-label">Nombres</label>
													    <div class="col-sm-10">
													      <input type="text" name="nombreR" class="form-control" id="nombreR" placeholder="Nombres" value="<?php echo $representante_update['nombres'];?>" required>
													    </div>
													  </div>

													  <div class="form-group">
													    <label for="apellidoR" class="col-sm-2 control-label">Apellido</label>
													    <div class="col-sm-10">
													      <input type="text" name="apellidoR" class="form-control" id="apellidoR" placeholder="Apellidos" value="<?php echo $representante_update['apellidos'];?>" required>
													    </div>
													  </div>

													  <div class="form-group">
													    <label for="cedulaR" class="col-sm-2 control-label">Cedula</label>
													    <div class="col-sm-10">
													      <input type="text" name="cedulaR" class="form-control" id="cedulaR" value="<?php echo $representante_update['cedula'];?>">
													    </div>
													  </div>

													  <div class="form-group">
													    <label for="edadR" class="col-sm-2 control-label">Edad</label>
													    <div class="col-sm-10">
													      <input type="number" name="edadR" class="form-control" id="edadR" placeholder="puede cargar de edades de 18 a 70 años" min="18" max="70" value="<?php echo $representante_update['edad'];?>">
													    </div>
													  </div>

													  <div class="form-group">
													    <label for="telefono" class="col-sm-2 control-label">Telefono</label>
													    <div class="col-sm-10">
													      <input type="text" name="telefono" class="form-control" id="telefono" placeholder="introduzca un telefono" value="<?php echo $representante_update['telefono'];?>">
													    </div>
													  </div>

													  <div class="form-group">
													    <label for="inputEmail3" class="col-sm-2 control-label">Correo</label>
													    <div class="col-sm-10">
													      <input type="email" name="correo" class="form-control" id="inputEmail3" placeholder="correo@electronico.com" value="<?php echo $representante_update['correo'];?>">
													    </div>
													  </div>

													  <div class="form-group">
													    <label for="direccion" class="col-sm-2 control-label">Dirección</label>
													    <div class="col-sm-10">
													      <textarea name="direccion" id="direccion" rows="10" class="form-control" placeholder="Direccion Completa"><?php echo $representante_update['direccion'];?></textarea>
													    </div>
													  </div>

													

										<!--  Fin del Formulario para REPRESENTANE -->
										  </div>
										</div>
					<!--ALUMNO-->

							<div class="panel panel-success">
							  <div class="panel-heading">Actualizaci&oacute;n de datos del ALUMNO</div>
							  <div class="panel-body">

										
										  
										  <div class="form-group">
										    <label for="nombreA" class="col-sm-2 control-label">Nombres</label>
										    <div class="col-sm-10">
										      <input type="text" name="nombreA" class="form-control" id="nombreA" placeholder="Nombre" required value="<?php echo $alumno_update['nombres'];?>">
										    </div>
										  </div>

										  <div class="form-group">
										    <label for="apellidoA" class="col-sm-2 control-label">Apellidos</label>
										    <div class="col-sm-10">
										      <input type="text" name="apellidoA" class="form-control" id="apellidoA" placeholder="Apellido" required value="<?php echo $alumno_update['apellidos'];?>">
										    </div>
										  </div>

										  <div class="form-group">
										    <label for="cedulaA" class="col-sm-2 control-label">Cedula</label>
										    <div class="col-sm-10">
										      <input type="text" name="cedulaA" class="form-control" id="cedulaA" value="<?php echo $alumno_update['cedula'];?>">
										    </div>
										  </div>
										  

										  <div class="form-group">
										    <label for="edadA" class="col-sm-2 control-label">Edad</label>
										    <div class="col-sm-10">
										      <input type="number" name="edadA" class="form-control" id="edadA" value="<?php echo $alumno_update['edad'];?>">
										    </div>
										  </div>



										  <div class="form-group">
										    <label for="alergico" class="col-sm-2 control-label">Alegico?</label>
										    <div class="col-sm-10">
										    	<select name="alergico" id="alergico" class="form-control">
										    		<option value="S">SI</option>
										    		<option value="N">NO</option>
										    	</select>
										    </div>
										  </div>
										  <div class="form-group">
										    <label for="descripcion_alergia" class="col-sm-2 control-label">En caso de Alergia</label>
										    <div class="col-sm-10">
										      <input type="text" class="form-control" name="descripcion_alergia" id="descripcion_alergia" placeholder="En caso de ser ALRGICO describa" value="<?php echo $alumno_update['descripcion_alergia'];?>">
										    </div>
										  </div>

										  <div class="form-group">
										    <label for="peso" class="col-sm-2 control-label">Peso</label>
										    <div class="col-sm-10">
										      <input type="number" name="peso" class="form-control" id="peso" value="<?php echo $alumno_update['peso'];?>">
										    </div>
										  </div>

										  <div class="form-group">
										    <label for="estatura" class="col-sm-2 control-label">Estatura</label>
										    <div class="col-sm-10">
										      <input type="text" name="estatura" class="form-control" id="estatura" value="<?php echo $alumno_update['altura'];?>">
										    </div>
										  </div>

										  <div class="form-group">
										    <label for="ult_consulta" class="col-sm-2 control-label">Ultima Visita Psicologica</label>
										    <div class="col-sm-10">
										      <input type="text" name="ult_consulta" class="form-control" id="ult_consulta" placeholder="Ejemplo 10-05-2014" value="<?php echo $alumno_update['ult_visita_psicologo'];?>">
										    </div>
										  </div>




										  <div class="form-group">
										    <div class="col-sm-offset-2 col-sm-10">
										      <button type="submit" class="btn btn-lg btn-success">Actualizar</button>
										    </div>
										  </div>
				

							<!--  Fin del Formulario para ALUMNO -->
							  </div>
							</div>
					<!--Fin de ALUMNO -->

		</form>
	</div>	
<?php endif; //fin de actualizar_alumno?>	




<?php if(!isset($alumno_update) && !isset($avance_alumno) && !$this->session->flashdata('registroAlumno') && !isset($selecciono_seccion['id']) && !isset($avance) ):?>
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