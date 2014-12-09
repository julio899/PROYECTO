

<?php if($this->session->flashdata('error')): ?>
  <!-- Divicion en caso  de algun mensaje de error  -->
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



<?php if($this->session->flashdata('ok')): ?>
  <!-- Divicion en caso  de algun mensaje satosfactorio -->
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




  <div class="container">
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
      </div>


<?php if($historial):?>

	<!--TABLA HISTORIAL-->	
	<div class="col-md-9 docs">
    <pre class="btn-primary"><strong>Historial</strong> de los Ultimos <span class="badge">30</span> Ingresos al Sistema</pre>
			<table class="table table-striped">
                        <thead>
                          <tr>
                            <th>#NRO Control</th>
                            <th>FECHA</th>
                            <th>USUARIO</th>
                            <th>Direccion IP</th>
                            <th>ACCION</th>
                            <th>TIPO</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php 
                          $datos=$historial;
                            for($i=0;$i< count($datos);$i++){
                              $tipo="";
                              if($datos[$i]['tipo']=='A'){
                                  $tipo="<span class=\"label label-primary\">Administrador</span>";
                              }
                              if($datos[$i]['tipo']=='D'){
                                  $tipo="<span class=\"label label-info\">Docente</span>";
                              }
                              echo "
                          <tr>
                            <td>".$datos[$i]['id']."</td>
                            <td>". date_format(date_create($datos[$i]['fecha']), 'd-m-Y H:i:s')."</td>
                            <td>".$datos[$i]['usuario']."</td>
                            <td>".$datos[$i]['ip']."</td>
                            <td>".$datos[$i]['accion']."</td>
                            <td>$tipo</td>
                          </tr>";
                            }
                          ?>
                        </tbody>
      </table>

	</div>
	<!-- <<<< FIN TABLA HISTORIAL-->
<?php endif;?>

  </div>
</div>