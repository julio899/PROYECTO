<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Docente extends CI_Controller {
	var $datos_usuario=null;
	var $datos_temporal=null;
	var $datos_docentes=null;
	var $datos_secciones=null;
	public function index()
	{		$this->load->model('data');
			$this->datos_usuario=$this->session->userdata('datos_usuarios');
			$this->session->set_userdata('secciones_docente',$this->data->mis_secciones());
			$this->carga_en_session_a_docentes();
			$this->carga_en_session_las_secciones();
			$this->validacionDocente();
		# primera funcion que ejecuta el docente 	
			$this->load->view('html/cabecera');
			$this->load->view('contenido_docente');
			$this->load->view('html/pie_pagina');
	}

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
		redirect('docente','refreh');
	}//fin de registro Alumno

	function procesar_registro_alumno(){
		$this->datos_temporal=$this->input->post();
		$this->load->model('data');
		if($this->data->reg_alumno($this->datos_temporal)){
			$this->session->set_flashdata('ok','REGISTRO COMPLETADO SATISFACTORIAMENTE');
		}else{
			
		}

		$this->session->set_flashdata('registroAlumno',TRUE);
		redirect('docente','refreh');
	}//fin de procesar_registro_alumno


	function validacionDocente(){
		if($this->datos_usuario['tipo']!='D'){
			$this->cerrar_session();
			exit();
		}
	}//Verificamos si es un docente que entro

	function seleccionar_seccion($secc_select=""){
		$this->load->model('data');
		$this->session->set_flashdata('selecciono_seccion', array('id' => $secc_select, 'alumnos'=>$this->data->traer_alumnos_inscritos($secc_select)) );
		$this->load->view('html/cabecera');
		$this->load->view('contenido_docente');
		$this->load->view('html/pie_pagina');
				
	} //fin de seleccionar_seccion
	
	function seccion_docente($id_seccion){
		


	}//fin de seccion_docente

	function cerrar_session(){
			$this->session->sess_destroy();
			redirect('inicio','refreh');
	}//fin de cerrar_session
}