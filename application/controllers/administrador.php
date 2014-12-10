<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administrador extends CI_Controller {
	var $datos_usuario=null;
	var $datos_temporal=null;
	var $datos_docentes=null;
	var $datos_secciones=null;
	public function Index()
	{
		$this->datos_usuario=$this->session->userdata('datos_usuarios');
		$this->carga_en_session_a_docentes();
		$this->carga_en_session_las_secciones();
		$this->validacionAdministrador();
		# primera funcion que ejecuta el daministrador
			$this->load->view('html/cabecera');
			$this->load->view('contenido_administrador');
			$this->load->view('html/pie_pagina');
	}

	function cerrar_session(){
		
			$this->load->model('data');
			$this->data->reg_auditoria_salida();
			$this->session->sess_destroy();
			$this->session->set_userdata('error','ERROR DEBE IDENTIFICARSE');
			redirect('');
	}//fin de cerrar_session

	function validacionAdministrador(){
		$this->datos_temporal=$this->session->userdata('datos_usuarios');
		//var_dump($this->datos_temporal);
		
		if($this->datos_temporal['tipo']!='A'){
			$this->cerrar_session();
			//exit();
		}
	}

	function registrarDocente(){
		$this->validacionAdministrador();
		$this->datos_temporal=$this->input->post();
		$this->load->model('data');
		if($this->datos_temporal['clave']==$this->datos_temporal['reclave']){
			$this->data->reg_docente($this->datos_temporal);
		}else{
			$this->session->set_flashdata('error','Las Claves no Coincidieron');
			redirect('administrador','refreh');
		}

	} // fin de la fin de la funcion registrarDocente
	
	function registroSeccion(){
		$this->validacionAdministrador();
		$this->load->model('data');
		if($this->data->crear_seccion($this->input->post())){

			$this->session->set_flashdata('ok','LA SECCION SE CREO SATISFACTORIAMENTE');
			redirect('administrador','refreh');
		}else{
			$this->session->set_flashdata('error','ERROR AL INTENTAR CREAR UNA SECCION');
			redirect('administrador','refreh');

		}

	}// fin de registroSeccion

	function carga_en_session_a_docentes(){
		$this->load->model('data');
		$this->datos_docentes=$this->data->traer_docentes();
		$this->session->set_userdata('docentes_registrados',$this->datos_docentes);
	}
	function carga_en_session_las_secciones(){
		$this->load->model('data');
		$this->datos_secciones=$this->data->traer_secciones();
		$this->session->set_userdata('secciones_registradas',$this->datos_secciones);
	}
	function registro_alumno(){
		$this->session->set_flashdata('registroAlumno',TRUE);
		redirect('administrador','refreh');
	}//fin de registro Alumno

	function procesar_registro_alumno(){
		$this->datos_temporal=$this->input->post();
		$this->load->model('data');
		if($this->data->reg_alumno($this->datos_temporal)){
			$this->session->set_flashdata('ok','REGISTRO COMPLETADO SATISFACTORIAMENTE');
		}else{
			
		}

		$this->session->set_flashdata('registroAlumno',TRUE);
		redirect('administrador','refreh');
	}//fin de procesar_registro_alumno

	function historial(){
		$this->validacionAdministrador();
		$this->load->model('data');
		$this->datos_temporal=$this->data->ultimos_ingresos();
		$this->load->view('html/cabecera');
		$this->load->view('historial',array('historial'=> $this->datos_temporal ));
		$this->load->view('html/pie_pagina');
	}

	function soporte(){
		$this->validacionAdministrador();
		$this->load->view('html/cabecera');
		$this->load->view('soporte');
		$this->load->view('html/pie_pagina');
	}

	function agenda_docentes(){
		$this->session->set_flashdata('agenda_docentes','si');
		redirect('administrador','refreh');
	}

	function agenda_representantes(){
		$this->validacionAdministrador();
		$this->load->model('data');
		$representantes=$this->data->representantes();
		//$this->session->set_flashdata('agenda_representantes',$representantes);
		//redirect('administrador','refreh');


		$this->load->view('html/cabecera');
		$this->load->view('contenido_administrador',array('agenda_representantes'=> $representantes));
		$this->load->view('html/pie_pagina');
	}

	function modificar_docente($id=""){
				$this->load->model('data');
				$this->session->set_flashdata('modificar_docente',$this->data->traer_docente($id));
				redirect('administrador','refreh');
			}
	function procesar_modificar_docente(){
				$this->load->model('data');
				$this->datos_temporal=$this->input->post();

		if($this->data->modificar_docente($this->datos_temporal)){
			$this->session->set_flashdata('ok','DOCENTE ACTUALIZADO SATISFACTORIAMENTE');
		}else{
			$this->session->set_flashdata('error','OCURRIO UN ERROR DURANTE LA ACTUALIZACION');
			}
		$this->session->set_flashdata('agenda_docentes',TRUE);
		redirect('administrador','refreh');

				//$this->session->set_flashdata('modificar_docente',$this->data->traer_docente($id));
				//redirect('administrador','refreh');
			}

	function eliminar_docente($id=""){
			$this->load->model('data');

		$this->session->set_flashdata('confirmar_eliminar_docente',$this->data->traer_docente($id));
		redirect('administrador','refreh');
	}

	function procesar_eliminar_docente($id=""){
			$this->load->model('data');
		if($this->data->eliminar_docente($id)){
			$this->session->set_flashdata('info','Docente Eliminado de forma Satisfactoria');
		}else{
			$this->session->set_flashdata('error','OCURRIO UN ERROR mientras se eliminaba el docente');
		}
		redirect('administrador','refreh');
	}
	function reportes(){

		$this->validacionAdministrador();
		$this->load->view('html/cabecera');
		$this->load->view('contenido_administrador',array('reportes'=>TRUE) );
		$this->load->view('html/pie_pagina');
	}

	function reporte_general(){
		$this->validacionAdministrador();
			$this->load->model('data');
			$datos=$this->data->todas_secciones();
			$this->load->view('reporte_secciones',array('datos'=>$datos));
	}

	function reporte_historial(){
		$this->validacionAdministrador();
		$this->load->model('data');
		$historial=$this->data->toda_auditoria();
		echo "<!DOCTYPE html>
<html>
<head>
	<meta charset=\"utf-8\">
	<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
	<title>Reporte COMPLETO</title>
	<!-- <link rel=\"stylesheet\" href=\"\"> --> 


	<!-- Archivos JS -->
	<script src=\"../../js/jquery-1.11.1.min.js\"></script>
<style>
	pre#impresion{
	margin-left: 70px;
	margin-right: 70px;
	}	
	table>tbody>tr>td{
	padding:10px;
	}
	h1{
	font-size: 1.5em;
	text-align: center;
	margin: 0px;
	padding: 0px;
	}
	div.cuerpo{
		margin-left: 25px;
	}
	div.contenido{
		margin-left: 50px;
		margin-top: 50px;
	}

</style>


</head>
<body>";
echo '<a class="imprimir" href="#"><button>Imprimir</button></a><h1> <<  HISTORICO DE AUDITORIA DETALLADO >>  </h1>';
		echo "<pre id=\"impresion\">";
			for($i=0;$i<count($historial);$i++){
				$nombreA=null;
				$representante=null;
				$datos=null; $datosA=null;
				if($historial[$i]['accion']=='CAMBIO DE SECCION'){
					$datos=$this->data->traer_alumno($historial[$i]['afectado']);
					$datosA=$this->data->traer_alumno_id_representante($historial[$i]['afectado']);
					$nombreA=$datos['nombres']." seccion[".$datosA['seccion']."]";
				}
				
				if($historial[$i]['accion']=='Reg. Alumno'){
					$datosA=$this->data->traer_alumno_id_representante($historial[$i]['afectado']);
					$nombreA=$datosA['nombres']." seccion[".$datosA['seccion']."]";
				}

				if($historial[$i]['accion']=='Reg. Reprecentante'){
					$nombreA=$this->data->traer_nombre_representante_id($historial[$i]['afectado']);
				}

				if (isset($nombreA['seccion'])){
					echo "# ".($historial[$i]['id'])." USUARIO: ".$historial[$i]['usuario']." EQUIPO: ".$historial[$i]['ip']." FECHA: ".$historial[$i]['fecha']." TIPO: ".$historial[$i]['tipo']." Accion: ".$historial[$i]['accion']." Afectado: ".$historial[$i]['afectado']." (".$nombreA." seccion [".$nombreA['seccion']."] ) \n";
			
				}elseif($historial[$i]['afectado']!=''){
					echo "# ".($historial[$i]['id'])." USUARIO: ".$historial[$i]['usuario']." EQUIPO: ".$historial[$i]['ip']." FECHA: ".$historial[$i]['fecha']." TIPO: ".$historial[$i]['tipo']." Accion: ".$historial[$i]['accion']." Afectado: ".$historial[$i]['afectado']." (".$nombreA." ) \n";
			
				}else {
					echo "# ".($historial[$i]['id'])." USUARIO: ".$historial[$i]['usuario']." EQUIPO: ".$historial[$i]['ip']." FECHA: ".$historial[$i]['fecha']." TIPO: ".$historial[$i]['tipo']." Accion: ".$historial[$i]['accion']."  \n";
			
				}
				
			}//fin del for
		
		echo "</pre>";
		echo '<script>	$(".imprimir").click(function(){    window.print();    return false;});</script></body></html>';
	}

}//fin de la clase Administrador
