<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {
	
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
		$data['session'] = $this->session->userdata("inicio");
		$this->load->view('admin/inicio', $data);
	}

	public function openCreateUser(){
		$data['session'] = $this->session->userdata("inicio");
		$this->load->view('admin/crearUsuario', $data);
	}

	public function openListUsers(){
		$this->load->model('LoginModel');
		$data["usuarios"] = $this->LoginModel->consultarUsuario();
		$data['session'] = $this->session->userdata("inicio");
		$this->load->view('admin/verUsuarios', $data);
	}

	public function openEditUsers(){
		$data['session'] = $this->session->userdata("inicio");
		$this->load->view('admin/editarUsuarios', $data);
	}

	public function openDeleteUsers(){
		$data['session'] = $this->session->userdata("inicio");
		$this->load->view('admin/eliminarUsuarios', $data);
	}

	public function openCrudAjax(){
		$data['session'] = $this->session->userdata("inicio");
		$this->load->view('admin/crudAjax', $data);
	}
	public function consultar(){
		$this->load->model('LoginModel');
		$data["usuarios"] = $this->LoginModel->consultarUsuario();
		$this->load->view('admin/verUsuarios', $data);
	}

}

/* End of file Inicio.php */
/* Location: ./application/controllers/admin/Inicio.php */