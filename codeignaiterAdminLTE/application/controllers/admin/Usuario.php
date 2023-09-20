<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$validacion = $this->session->has_userdata("inicio");
		if ($validacion) {
			$session = $this->session->userdata("inicio");
			if ($session['tipo']=="ADMIN" && $session['estado']=="ACTIVO") {
				return false;
			}else{
				redirect('Login/cerrarSession','refresh');
				die();
			}
		}else{
			redirect('Login/cerrarSession','refresh');
			die();
		}
	}

	public function index(){
		// Ninguna accion.
	}
	
	public function createUser(){
		$cedula = $this->input->post('new_cedula');
		$correo = $this->input->post('new_email');
		$password = $this->input->post('new_password');
		$tipo = $this->input->post('new_tipo');

		if ($cedula!="" && $correo!="" && $password!="" && $tipo!="") {

			$this->load->model('LoginModel');
			
			$cedulaValida = $this->LoginModel->validarCedula($cedula);
			$emailValido = $this->LoginModel->validarEmail($correo);

			if ($cedulaValida && $emailValido) {
				$this->LoginModel->insertar($cedula, $correo, $password, $tipo);
				
				$data['session'] = $this->session->userdata("inicio");
				$data['date_validos'] = true;
				$this->load->view('admin/crearUsuario', $data);
			}else{
				$data['session'] = $this->session->userdata("inicio");
				$data['datosRepetidos'] = true;
				$data['cedulaRepetida'] = $cedulaValida ;
				$data['emailRepetido'] = $emailValido ;
				$this->load->view('admin/crearUsuario', $data);
			}
		}else{
			$data['session'] = $this->session->userdata("inicio");
			$data['dateIncompletos'] = true;
			$this->load->view('admin/crearUsuario', $data);
		}
	}

	
	
	
	

}

/* End of file Usuario.php */
/* Location: ./application/controllers/admin/Usuario.php */