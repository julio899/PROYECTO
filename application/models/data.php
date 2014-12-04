<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data extends CI_Model {
var $temporal;
var $temporal2;
var $temporal3;
var $datos;
var $bandera=null;

	function validacion($u="",$p=""){
		$query = $this->db->query("SELECT * FROM `usuarios` WHERE `usuario` LIKE '$u' AND `clave` LIKE '".md5($p.$u)."'");
		$info_docente="";

		foreach ($query->result() as $row) {
			//if($row->tipo=='D'){$info_docente}
			$this->temporal=array(
				'usuario'=>$row->usuario,
				'nombre_completo'=>$row->nombre." ".$row->apellido,
				'clave'=>md5($row->clave.$row->usuario),
				'tipo'=>$row->tipo,
				'id_enlace'=>$row->id_enlace
				);
		}

		//var_dump($this->temporal);
		if($query->num_rows==1){
			$this->session->set_userdata('datos_usuarios',$this->temporal);
			$this->reg_auditoria($query->num_rows);
			
			//ahora verifico l tipo de usuario que es 
			#si es A -> es Administrador
			switch ($this->temporal['tipo']) {
				case 'A':
					redirect('administrador','refreh');
					break;
				case 'D':
					redirect('docente','refreh');
					break;
				
				default:
					$this->session->unset_userdata('datos_usuarios');
					$this->session->set_flashdata('error', 'Tipo de Usiario no VALIDO');
					redirect('inicio','refreh');
					break;
			}

		}else{
			//$this->session->sess_destroy();
			$this->session->unset_userdata('datos_usuarios');
			$this->reg_auditoria($query->num_rows);
			$this->session->set_flashdata('error', '¡Usuario o Clave NO VALIDO!');
			redirect('inicio','refreh');
		}
	}//fin de validacion
	function cerrar_session(){
		$this->session->sess_destroy();
	}//fin de cerrar_session
	
	function reg_auditoria($valido=""){
		$this->datos=$this->session->userdata('datos_usuarios');
		$query=$this->db->query("INSERT INTO `proyecto`.`auditoria` (`id`, `usuario`, `password`, `ip`, `valido`, `fecha`) VALUES (NULL, '".$this->datos['usuario']."', '".$this->datos['clave']."', '".$this->input->ip_address()."', '$valido', NOW());");
	}//fin de registra auditoria

	function reg_docente($docente=""){
		if($this->existe_usuario($docente["usuario"])){			
			$this->session->set_flashdata('error', '¡ Error el USUARIO que selecciono para este docente ya Existe porfavor registrelo con otro nombre de USUARIO!');
			redirect('administrador','refreh');
		}else{

				$query=$this->db->query("INSERT INTO `proyecto`.`docentes` (`id`, `nombre`, `apellido`, `telefono`, `correo`, `id_enlace`) VALUES (NULL, '".$docente["nombre"]."', '".$docente["apellido"]."', '".$docente["telefono"]."', '".$docente["correo"]."', '".substr(md5($docente["clave"].$docente["usuario"]), 0,4)."');");
				$query2=$this->db->query("INSERT INTO `proyecto`.`usuarios` (`id`, `usuario`, `clave`, `nombre`, `apellido`, `tipo`, `secciones`, `turno`, `id_enlace`) VALUES (NULL, '".$docente["usuario"]."', '".md5($docente["clave"].$docente["usuario"])."', '".$docente["nombre"]."', '".$docente["apellido"]."', 'D', '', '', '".substr(md5($docente["clave"].$docente["usuario"]), 0,4)."');");
				
				if($query&&$query2){
					$this->session->set_flashdata('ok', '¡ Exito Registro Procesado Satisfactoriamente !');
					redirect('administrador','refreh');
				}
		}

	}//fin de reg_docente

	function existe_usuario($u=""){
		$query=$this->db->query("SELECT * FROM `usuarios` WHERE `usuario` LIKE '$u'");
		if($query->num_rows() > 0){
			return true;
		}else{
			return false;
		}
	}//fin de existe_usuario
	
	function traer_docentes(){
		$query=$this->db->query("SELECT * FROM `docentes`");
		$this->temporal=null;
		foreach ($query->result() as $row) {
			$this->temporal[]=array(
				'id'=>$row->id,
				'nombre_completo'=>$row->nombre." ".$row->apellido,
				'telefono'=>$row->telefono,
				'correo'=>$row->correo,
				'enlace'=>$row->id_enlace
				);
		}
		return $this->temporal;

	}//fin del traer_docentes

	function traer_tipo_usuario($user=""){
		$query=$this->db->query("SELECT `usuarios`.`tipo` FROM `usuarios` WHERE `usuario` LIKE '".$user."' LIMIT 1");
		$this->temporal=null;
		foreach ($query->result() as $row) {
					$this->temporal=$row->tipo;
		}
		return $this->temporal;

	}

	function crear_seccion($seccion=""){
		$query=$this->db->query("INSERT INTO `proyecto`.`secciones` (`id`, `seccion`, `grado`, `year`, `cap_alumnos`, `turno`, `id_docente`) VALUES (NULL, '".$seccion['seccion']."', '".$seccion['grado']."', '', '".$seccion['capacidad']."', '".$seccion['turno']."', '".$seccion['docente']."');");
		return $query;
	}//fin de crear_seccion

	function traer_secciones(){
		$query=$this->db->query("SELECT * FROM `secciones` ORDER BY `grado`");

		$this->temporal=null;
		foreach ($query->result() as $row) {
			$this->temporal[]=array(
				'id'=>$row->id,
				'grado'=>$row->grado,
				'seccion'=>$row->seccion,
				'cap_alumnos'=>$row->cap_alumnos,
				'turno'=>$row->turno,
				'id_docente'=>$row->id_docente,
				'nombre_docente'=>$this->traer_nombre_docente($row->id_docente)
				);
		}//fin del foreach
		return $this->temporal;
//386765955-3
	}//fin de traer_secciones

	function traer_alumnos_inscritos($id_seccion=""){
		$query=$this->db->query("SELECT * FROM `alumnos` WHERE `id_seccion` =$id_seccion");
		$this->temporal=null;
			//recorro los datos y los ingreso en un array
				foreach ($query->result() as $row) {
					$representante=$this->traer_nombre_representante_id($row->id_representante);
					$this->temporal [] =array(
												'id'=>$row->id,
												'nombres'=>$row->nombres,
												'apellidos'=>$row->apellidos,
												'cedula'=>$row->cedula,
												'edad'=>$row->edad,
												'alergico'=>$row->alergico,
												'descripcion_alergia'=>$row->descripcion_alergia,
												'peso'=>$row->peso,
												'altura'=>$row->altura,
												'id_seccion'=>$row->id_seccion,
												'id_representante'=>$row->id_representante,
												'representante'=>$representante

												);
				}//fin del foreach

		return $this->temporal;
	}

	function traer_nombre_docente($enlace=""){
		$query=$this->db->query("SELECT * FROM `docentes` WHERE `id_enlace` LIKE '$enlace'");
		$this->temporal2=null;
		foreach ($query->result() as $row) {
			$this->temporal2=$row->nombre." ".$row->apellido;
		}
		return $this->temporal2;
	}


	function traer_nombre_representante_id($id=""){
		$query=$this->db->query("SELECT * FROM `representanes` WHERE `id` = '$id'");
		$this->temporal2=null;
		foreach ($query->result() as $row) {
			$this->temporal2=$row->nombres." ".$row->apellidos;
		}
		return $this->temporal2;
	}

	function traer_alumno($id=""){
		$query=$this->db->query("SELECT * FROM `alumnos` WHERE `id` = '$id'");
		$this->temporal=null;
		foreach ($query->result() as $row) {
			$seccion_grado=traer_seccion_grado($row->id_seccion);
			$this->temporal = array(
								'id' => $row->id,
								'nombres' => $row->nombres,
								'apellidos' => $row->apellidos,
								'cedula' => $row->cedula,
								'edad' => $row->edad,
								'seccion' => $seccion_grado['seccion'],
								'grado' => $seccion_grado['grado'] 
								);
		}
		return $this->temporal;
	}//fin de traer_alumno

	function traer_seccion_grado($id_seccion=""){
		$query=$this->db->query("SELECT * FROM `secciones` WHERE `id` =$id_seccion");
		$this->temporal3=null;
		foreach ($query->result() as $row) {
			$this->temporal3=array(
									'seccion'=>$row->seccion,
									'grado'=>$row->grado,
									'turno'=>$row->turno,
									'cap_alumnos'=>$row->cap_alumnos,
									'id_docente'=>$row->id_docente
									);
		}//fin de foreach

		return $this->temporal3;

	}//fin de traer_seccion_grado
	

	function reg_alumno($datos=""){
		//echo "desde data:";
		$this->temporal=$datos;

		if($this->representanteExiste($datos['cedulaR'])==false){

				if($this->db->query("INSERT INTO `proyecto`.`representanes` (`id`, `nombres`, `apellidos`, `cedula`, `telefono`, `correo`, `direccion`, `edad`) VALUES (NULL, '".$datos['nombreR']."', '".$datos['apellidoR']."', '".$datos['cedulaR']."', '".$datos['telefono']."', '".$datos['correo']."', '".$datos['direccion']."', '".$datos['edadR']."');")){
					
					$query=$this->db->query("SELECT `id` FROM `representanes` WHERE `cedula` LIKE '".$datos['cedulaR']."'");
					foreach ($query->result() as $row) {
						$id=$row->id;
					}//cirre foreach


					if($this->db->query("INSERT INTO `proyecto`.`alumnos` (`id`, `nombres`, `apellidos`, `cedula`, `edad`, `alergico`, `descripcon_alergia`, `peso`, `altura`, `ult_visita_psicologo`, `id_seccion`, `id_representante`, `fecha_inscripcion`) VALUES (NULL, '".$datos['nombreA']."', '".$datos['apellidoA']."', '".$datos['cedulaA']."', '".$datos['edadA']."', '".$datos['alergico']."', '".$datos['descripcion_alergia']."', '".$datos['peso']."', '".$datos['estatura']."', '".$datos['ult_consulta']."', '".$datos['seccion']."', '$id', NOW());")){
						$this->bandera=true;
					}else{
						$this->bandera=false;
					}

				}


		//fin si eserepresenante existe	
		}else{//en caso que existe  entr en el else
			$this->session->set_flashdata('error','Error El representante y se encuentra registrado.');
		}


			return $this->bandera;

	}//reg_alumno

	function reg_avance_integral($avance){
		$sql="INSERT INTO `proyecto`.`avance_integral` (
`id` ,
`id_alumno` ,
`cognitiva` ,
`lenguage` ,
`social` ,
`afectiva` ,
`motora` ,
`sexual` ,
`fisica` ,
`moral`
)
VALUES (
NULL, '5', 'cognitiva', 'leng', 'social', 'afectiva', 'moral', 'seu', 'fisi', 'moral'
);";
	}//

	function traer_docente($id=""){
		$query=$this->db->query("SELECT * FROM `docentes` WHERE `id` LIKE '$id'");
		$this->temporal2=null;
		foreach ($query->result() as $row) {
			$this->temporal2=array(
						'nombre'=>$row->nombre,
						'apellido'=>$row->apellido,
						'telefono'=>$row->telefono,
						'correo'=>$row->correo,
						'id'=>$row->id,
						'id_enlace'=>$row->id_enlace
				);
		}
		return $this->temporal2;
			

	}//fin de traer_docente

	function modificar_docente($datos=""){
			if ($this->db->query("UPDATE `docentes` SET `nombre`='".$datos['nombre']."',`apellido`='".$datos['apellido']."',`telefono`='".$datos['telefono']."',`correo`='".$datos['correo']."' WHERE `id`=".$datos['id']."")) {
				return true;
			}else{
				return false;
			}
	}//modificar_docente

	function eliminar_docente($id=""){
			if ($this->db->query("DELETE FROM `proyecto`.`docentes` WHERE `docentes`.`id` = $id")) {
				return true;
			}else{
				return false;
			}
	}//modificar_docente

	function representanteExiste($ci=""){
			$query=$this->db->query("SELECT `cedula` FROM `representanes` WHERE `cedula` LIKE '$ci'");
			if ($query->num_rows() > 0) {
				# si exite
				return true;
			}else{
				return false;
			}
	}//fin de representanteExiste

	function ultimos_ingresos(){
		$query=$this->db->query("SELECT * FROM `auditoria` WHERE `auditoria`.`valido` LIKE '1' ORDER BY `auditoria`.`fecha` DESC LIMIT 30");
		$this->temporal2=null;
		foreach ($query->result() as $row) {
			$this->temporal2[]=array(
										'id'=>$row->id,
										'usuario'=>$row->usuario,
										'ip'=>$row->ip,
										'valido'=>$row->valido,
										'fecha'=>$row->fecha,
										'tipo'=>$this->traer_tipo_usuario($row->usuario)

										);
		}
		return $this->temporal2;

	}

	function representantes(){
		//$query=$this->db->query("SELECT `representanes`.`nombres`,`representanes`.`apellidos`,`representanes`.`cedula`,`representanes`.`telefono`,`representanes`.`correo`,`representanes`.`direccion`,`alumnos`.`id` FROM `representanes`,`alumnos` WHERE `representanes`.`id`=`alumnos`.`id_representante`");
		$query=$this->db->query("SELECT * FROM `representanes`");
		$this->temporal2=null;

		foreach ($query->result() as $row) {
			$this->temporal2[]=array(
									'nombreR'=>$row->nombres,
									'apellidoR'=>$row->apellidos,
									'cedula'=>$row->cedula,
									'telefono'=>$row->telefono,
									'correo'=>$row->correo,
									'direccion'=>$row->direccion,
									'id'=>$row->id
								);
		}
		return $this->temporal2;

	}




	/* Funciones de Docentes */
	function mis_secciones(){
		$this->temporal2=$this->session->userdata('datos_usuarios');
		$query=$this->db->query("SELECT * FROM `secciones` WHERE `id_docente` LIKE '".$this->temporal2['id_enlace']."'");
		$this->temporal=null;
		foreach ($query->result() as $row) {
			$this->temporal[]=array(
										'id'=>$row->id,
										'grado'=>$row->grado,
										'seccion'=>$row->seccion,
										'year'=>$row->year,
										'cap_alumnos'=>$row->cap_alumnos,
										'turno'=>$row->turno,
										'id_docente'=>$row->id_docente

										);
		}
		return $this->temporal;
	}
}