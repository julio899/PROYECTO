<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio extends CI_Controller {
var $datos=null;
	/**
	 * Primer controldor que calga la aplicacion
	 * Al Iniciarse
	 */
	public function index()
	{
		$this->load->view('Ingreso');
		
	}


	public function validacion(){
		$this->load->model('data');
		$this->data->validacion($this->input->post('usuario'),$this->input->post('clave'));
	}
	function redireccion(){

		$this->datos=$this->session->userdata('datos_usuarios');
		switch ($this->datos['tipo']) {
			case 'A':
				redirect('administrador','refresh');
				break;
			
			default:
				# code...
				break;
		}
	}
}
