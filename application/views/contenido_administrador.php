


<?php if($this->session->flashdata('error')): ?>
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








	<div class="container" id="contenedor_centar">
		<div class="row">
			<!-- Barra de Navegacion -->
			<div class="col-xs-3"> 
				<ul class="nav nav-pills nav-stacked">
					<li class="active"><a href="">OPCIONES</a></li>
					<li><a href="" id="reg_docente">Registro de Docente</a></li>
					<li><a href="<?php echo base_url().index_page().'/administrador/registro_alumno'; ?>">Registro de Alumno</a></li>
					<li><a href="" id="reg_seccion">Creacion de secciones</a></li>
					<li><a href="<?php echo base_url().index_page().'/administrador/agenda_docentes'; ?>">Agenda de Docentes</a></li>
					<li><a href="<?php echo base_url().index_page().'/administrador/agenda_representantes'; ?>">Agenda de Representantes</a></li>
					<li><button class="btn btn-info form-control" type="button">
					  Mensajes <span class="badge">4</span>
					</button></li>
				</ul>

				<div class="baner forml-control">
					<p>Instituto de Educación Especial Nacional Bolivariano “RÓMULO GALLEGOS"</p>
				</div>

			</div>



<!-- EN CASO DE REGISTRO DE ESTUDIANTE SE MOSTRARA ESTA PARTE -->	
<?php if($this->session->flashdata('registroAlumno')):?>
<!-- Registro de cuentas Representane-->
			<!-- FIN Barra de Navegacion -->
			
			<div class="col-xs-8"> 
				<form action="<?php echo base_url().index_page().'/administrador/procesar_registro_alumno'; ?>" class="form-horizontal" method="post" role="form">
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




<?php if($this->session->flashdata('agenda_docentes')):?>
<!-- Inicio de la tabla Agenda Docentes-->

	<div class="col-md-9 docs">
			<table class="table table-striped">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>DOCENTES</th>
                            <th>CORREO</th>
                            <th>TELEFONO</th>
                            <th>OPCIONES</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php 
                          $datos=$this->session->userdata('docentes_registrados');
                            for($i=0;$i< count($datos);$i++){
                              echo "
                          <tr>
                            <td>".($i+1)."</td>
                            <td>".$datos[$i]['nombre_completo']."</td>
                            <td>".$datos[$i]['correo']."</td>
                            <td>".$datos[$i]['telefono']."</td>
                            <td>
                            	<a href=\"".base_url().index_page()."/administrador/modificar_docente/".$datos[$i]['id']."\"><button type=\"button\" class=\"btn btn-default btn-sm\"><span class=\"glyphicon glyphicon-edit\"></span></button></a>
                            	<a href=\"".base_url().index_page()."/administrador/eliminar_docente/".$datos[$i]['id']."\"><button type=\"button\" class=\"btn btn-default btn-sm\"><span class=\"glyphicon glyphicon-remove\"></span></button></a>
                            </td>
                          </tr>";
                            }
                          ?>
                        </tbody>
      </table>
	</div>

<!-- Fin de la tabla Agenda Docentes-->
<?php endif;?>


<?php if($this->session->flashdata('modificar_docente')):?>
	<!-- Inicio de panel de Modificacion de datos del Docente-->
	<div class="col-md-9 docs">
			<?php $docente=$this->session->flashdata('modificar_docente');?>
			<h1>MODIFICACI&Oacute;N DE DOCENTE</h1>
			<form action="<?php echo base_url().index_page().'/administrador/procesar_modificar_docente';?>" method="post" class="form-mod-docente bs-example-form">
				<div class="input-group">
					      <span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></span>
					      <input type="text" name="nombre" class="form-control" value="<?php echo $docente['nombre'] ?>" required>
					      <span class="input-group-addon lbl">Nombres</span>
				</div> <br>
				<div class="input-group">
					      <span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></span>
					      <input type="text" name="apellido" class="form-control" value="<?php echo $docente['apellido'] ?>" required>
					      <span class="input-group-addon lbl">Apellido</span>
				</div> <br>
				<div class="input-group">
					      <span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></span>
					      <input type="text" name="telefono" class="form-control" value="<?php echo $docente['telefono'] ?>">
					      <span class="input-group-addon lbl">Telefono</span>
				</div> <br>
				<div class="input-group">
					      <span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></span>
					      <input type="email" name="correo" class="form-control" value="<?php echo $docente['correo'] ?>">
					      <span class="input-group-addon lbl">Correo</span>
				</div> <br>
				<input type="hidden" name="id" value="<?php echo $docente['id']; ?>">
				<button type="submit" class="btn btn-warning form-control">MODIFICAR</button>

			</form>
	</div>

	<!-- FIN de Modificacion de datos del Docente-->
<?php endif;?>

<?php if($this->session->flashdata('confirmar_eliminar_docente')):
$docente_eliminar=$this->session->flashdata('confirmar_eliminar_docente');
?>
	<div class="col-md-9 docs">
		<h1>Esta seguro de eliminar al docente.</h1>
		<p class="alert alert-warning">Tenga en cuenta que se Borraran de forma permanente estos datos</p>
		 	<div class="panel panel-danger">
		 		<div class="panel-heading">
			        <h3 class="panel-title">Docente a Eliminar</h3>
			    </div>
			    <div class="panel-body">
			    	<ul>
			        	<li>Nombres: <?php echo $docente_eliminar['nombre'];?></li>
			        	<li>Apellidos: <?php echo $docente_eliminar['apellido'];?></li>
			        	<li>Correo: <?php echo $docente_eliminar['correo'];?></li>
			        	<li>Telefono: <?php echo $docente_eliminar['telefono'];?></li>
			        </ul>
			    </div>
			</div>
			<a href="<?php echo base_url().index_page().'/administrador/procesar_eliminar_docente/'.$docente_eliminar['id']; ?>">
			<button type="button" class="btn btn-danger btn-lg">
			  <span class="glyphicon glyphicon-remove"></span> ELIMINAR
			</button>
			</a>
		
	</div>

<!-- FIN de CONFIRMACION DE ELIMINACION-->
<?php endif;?>



<?php if($this->session->flashdata('agenda_representantes')):?>
<!-- Inicio de la tabla agenda_representantes-->

	<div class="col-md-9 docs">
			<table class="table table-striped">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>REPRESENTANTES</th>
                            <th>CORREO</th>
                            <th>TELEFONO</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php 
                          $datos=$this->session->flashdata('agenda_representantes');
                            for($i=0;$i< count($datos);$i++){
                              echo "
                          <tr>
                            <td>".($i+1)."</td>
                            <td>".$datos[$i]['nombreR']." ".$datos[$i]['apellidoR']."</td>
                            <td>".$datos[$i]['correo']."</td>
                            <td>".$datos[$i]['telefono']."</td>
                          </tr>";
                            }
                          ?>
                        </tbody>
      </table>
	</div>

<!-- Fin de la agenda_representantes-->
<?php endif;?>







<?php if(!$this->session->flashdata('confirmar_eliminar_docente') && !$this->session->flashdata('modificar_docente') && !$this->session->flashdata('registroAlumno') && !$this->session->flashdata('historial') && !$this->session->flashdata('agenda_docentes') && !$this->session->flashdata('agenda_representantes')):?>
<!-- Inicio del Contenido EN CASO QUE NO HAYA QUE REGISTRAR ALUMNO-->

	<div class="col-md-9 docs">


				<h1 id="getting-started">Bienvenido <strong><?php $usu=$this->session->userdata('datos_usuarios'); echo $usu['usuario'];?></strong> al panel del Administrador</h1>
					<p>Texto de introduccion algo que pueda ser  <code>&lt;Relevante&gt;</code> en esta seccion.</p>
				
						En este Proyecto fue desarrollado en PHP y se usaron herramientas OpenSource.<br>
						Tales como
						<ol class="breadcrumb">
							<li>Twitter Bootstarp</li>
							<li>CodeIgniter</li>
							<li>JQuery</li>
							<li>MySQL</li>
						</ol>
				<p></p>

				<div class="note note-danger">Muestra de contnido.<br></div>
				<br><p></p>
				<p>Luego agregaremos y crearemos contnido dinamico.</p>
				<h4>Datos de la session <code>Estamos verificando que todo cargo correctamente</code> </h4>
					<pre>
						<?php //var_dump($this->session->userdata);?>
					</pre>
					<p class="alert alert-success">Conexiones Funcionando a la Perfeccion. . .</p>

	</div>
<!-- <<<< FIN DEL CONTENIDO EN CASO QUE NO HAYA QUE REGISTRAR ALUMNO-->
<?php endif;?>


		</div> <!-- fin del row del contenedor central-->
<!-- slider
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-8">

				<div id="slides">
				    <img src="<?php echo base_url();?>img/especial/0.jpg">
				    <img src="<?php echo base_url();?>img/especial/1.jpg">
				    <img src="<?php echo base_url();?>img/especial/2.jpg">
				    <img src="<?php echo base_url();?>img/especial/3.jpg">
				    <img src="<?php echo base_url();?>img/especial/3.png">
				</div>

			</div>
		</div> -->



	</div>
