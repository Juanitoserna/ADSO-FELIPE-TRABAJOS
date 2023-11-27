<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('CursosModel');

    }

    public function index(){
        $validacion = $this->session->has_userdata("session_persona");
		if ($validacion) {
            $data['session'] = $this->session->userdata("session_persona");
            $this->load->view('administrador/vistaPrincipal',$data);
			
		}else{
            redirect(base_url('index.php'), 'refresh');
            die();
		}
        
    }

   
    
}

/* End of file Controllername.php */
