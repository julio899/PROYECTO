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
			
		# primera funcion que ejecuta el docente 	
			$this->load->view('html/cabecera');
			$this->load->view('contenido_docente');
			$this->load->view('html/pie_pagina');
	}
    function probador(){
    	$this->load->model('data');
		return $this->data->traer_secciones();
    }

	function carga_en_session_a_docentes(){
		$this->load->model('data');
		$this->datos_docentes=$this->data->traer_docentes();
		$this->session->set_userdata('docentes_registrados',$this->datos_docentes);
	}
	function carga_en_session_las_secciones(){
		$this->load->model('data');
		$this->session->set_userdata('secciones_registradas',$this->data->traer_secciones());
	}

	function registro_alumno(){
		$this->session->set_flashdata('registroAlumno',TRUE);
		redirect('docente','refreh');
	}//fin de registro Alumno

	function procesar_registro_alumno(){
		$this->load->model('data');
		if($this->data->reg_alumno( $this->input->post() 	) ){
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
		//$this->session->set_userdata('selecciono_seccion', array('id' => $secc_select, 'alumnos'=>$this->data->traer_alumnos_inscritos($secc_select)) );
		//redirect('docente','refreh');
		
		$this->load->view('html/cabecera');
		$this->load->view('contenido_docente', array('todas_secciones'=>$this->data->traer_secciones(), 'selecciono_seccion'=>array('id' => $secc_select, 'alumnos'=>$this->data->traer_alumnos_inscritos($secc_select))));
		$this->load->view('html/pie_pagina');
	} //fin de seleccionar_seccion
	

	function cargar_avance($id_alumno=""){
		$this->load->model('data');

		$this->session->set_flashdata('alumno_seleccionado',$this->data->traer_alumno($id_alumno));

		$this->load->view('html/cabecera');
		$this->load->view('contenido_docente',array('avance'=>TRUE,'alumno'=>$this->data->traer_alumno($id_alumno) ) );
		$this->load->view('html/pie_pagina');
	}//fin de cargar_avance

	function cerrar_session(){
			$this->load->model('data');
			$this->data->reg_auditoria_salida();
			$this->session->sess_destroy();
			redirect('','refreh');
	}//fin de cerrar_session

	function avances_alumno($id_alumno=""){
		$this->load->model('data');
		$this->load->view('html/cabecera');
		$this->load->view('contenido_docente',array('avance_alumno'=>$this->data->traer_avances_alumno($id_alumno),'alumno'=>$this->data->traer_alumno($id_alumno) ) );
		$this->load->view('html/pie_pagina');
	}//fin de avances_alumno

	function registrar_avance(){
		$this->load->model('data');
		if($this->data->reg_avance_integral($this->input->post()) ){
			$this->session->set_flashdata('ok','AVANCE DEL ALUMNO REGISTRADO SATISFACTORIAMENTE');
		}else{
			$this->session->set_flashdata('error','No se pudo registrar el Avance');
		}

		redirect('docente','refreh');
	}

	function cambiar_alumno_seccion(){
		$this->load->model('data');
		if ($this->data->cambiar_seccion_alumno( $this->input->post() ) ) {
			$this->session->set_flashdata('ok','CAMBIO DE SECCION PROCESADO SATISFACTORIAMENTE');
		}else{
			$this->session->set_flashdata('error','No se pudo realizar el cambio');
		}
		redirect('docente','refreh');
	}

	function actualizar_alumno($id_alumno=""){
		$this->load->model('data');
		$alumno=$this->data->traer_alumno($id_alumno);
		$representante=$this->data->traer_representante($alumno['id_representante']);

		$this->load->view('html/cabecera');
		$this->load->view('contenido_docente',array('alumno_update'=>$alumno,'representante_update'=>$representante ) );
		$this->load->view('html/pie_pagina');
	}//fin de actualizar_alumno

	function procesar_actualizacion_alumno(){
		$this->load->model('data');

		if($this->data->proceso_actualizar_alumno($this->input->post()) ){
			$this->session->set_flashdata('ok','ACTUALIZACION DE DATOS PROCESADA SATISFACTORIAMENTE');
		}else{
			$this->session->set_flashdata('error','No se pudo realizar la actualizacion');
		}
		redirect('docente','refreh');
	}//fin de procesar_actualizacion_alumno
}