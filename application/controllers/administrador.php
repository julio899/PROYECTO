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
			redirect('','refreh');
	}//fin de cerrar_session

	function validacionAdministrador(){
		if($this->datos_usuario['tipo']!='A'){
			$this->cerrar_session();
			exit();
		}
	}

	function registrarDocente(){
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
		$this->datos_temporal=$this->input->post();
		$this->load->model('data');
		if($this->data->crear_seccion($this->datos_temporal)){

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
		$this->load->model('data');
		$this->datos_temporal=$this->data->ultimos_ingresos();
		//var_dump($this->datos_temporal);
		$this->load->view('html/cabecera');
		$this->load->view('historial',array('historial'=> $this->datos_temporal ));
		$this->load->view('html/pie_pagina');
	}

	function soporte(){
		$this->load->view('html/cabecera');
		$this->load->view('soporte');
		$this->load->view('html/pie_pagina');
	}

	function agenda_docentes(){
		$this->session->set_flashdata('agenda_docentes','si');
		redirect('administrador','refreh');
	}

	function agenda_representantes(){
		$this->load->model('data');
		$representantes=$this->data->representantes();
		$this->session->set_flashdata('agenda_representantes',$representantes);
		redirect('administrador','refreh');
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

	function pruebas($id=""){
			$this->load->model('data');
			var_dump($this->data->traer_tipo_usuario($id));
	}

}//fin de la clase Administrador
