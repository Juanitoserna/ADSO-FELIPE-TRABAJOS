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
		$data['session'] = $this->session->userdata("inicio");
		$this->load->view('Dashboard/plantilla', $data);
	}

	
}

/* End of file Usuario.php */
/* Location: ./application/controllers/admin/Usuario.php */