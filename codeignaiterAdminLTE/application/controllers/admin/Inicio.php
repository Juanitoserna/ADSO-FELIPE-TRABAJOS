<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('LoginModel');
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
		
		$data["usuarios"] = $this->LoginModel->consultarUsuario();
		$data['session'] = $this->session->userdata("inicio");
		$this->load->view('admin/verUsuarios', $data);
	}

	public function openEditUsers(){
		$data["usuarios"] = $this->LoginModel->consultarUsuario();
		$data['session'] = $this->session->userdata("inicio");
		$this->load->view('admin/editarUsuarios', $data);
	}

	public function openDeleteUsers(){
		$data['session'] = $this->session->userdata("inicio");
		$data["usuarios"] = $this->LoginModel->consultarUsuario();
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

	public function guardar($id = null){
		$usuaio = $this->LoginModel->find($id);
		$vdata['session'] = $this->session->userdata("inicio");
		$usuaio = $this->LoginModel->find($id);
		$vdata['usuario'] = $usuaio;
		$this->load->view('admin/crear', $vdata);
			
	}
	public function ModificarUsuario($id){
		
		$data['cedula'] = $this->input->post('cedula');
		$data['password'] = md5($this->input->post('password'));
		$data['email'] = $this->input->post('email');
		$data['tipo'] = $this->input->post('tipo');
		$data['estado'] = $this->input->post('estado');
		$this->LoginModel->update($id, $data);
		redirect('admin/Inicio/openEditUsers','refresh');
	}
	public function borrar($id = null)
	{
		$this->LoginModel->delete($id);
		redirect("/admin/Inicio/openEditUsers");
	}
	public function perfilUsuario(){
		$data['session'] = $this->session->userdata("inicio");
		$this->load->view('admin/perfil',$data);
	}

	
}

/* End of file Inicio.php */
/* Location: ./application/controllers/admin/Inicio.php */