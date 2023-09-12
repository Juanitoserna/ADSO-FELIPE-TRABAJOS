<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registros extends CI_Controller {

	public function __construct(){
		parent::__construct();
        $this->load->helper('form');
		$this->load->helper('url');
        $this->load->model('Usuario');
        $this->load->database();
        
	}
	
    public function iniciarSession(){
        $this->load->view('registro/login');
    }

	public function listado()
	{
		$vdata["usuarios"] = $this->Usuario->findAll();
        $this->load->view('registro/listarUsuario', $vdata);
	}

	public function guardar($id = null){
		$vdata["id"] = $vdata["userName"] = $vdata["email"] = $vdata["password"] = $vdata["estado"] = "";
		if (isset($id)) {
			$usuario = $this->Usuario->find($id);

			if (isset($usuario)) {
				$vdata["id"] = $usuario->id;
				$vdata["userName"] = $usuario->username;
				$vdata["email"] = $usuario->email;
				$vdata["password"] = $usuario->password;
                $vdata["estado"] = $usuario->estado;
			}
		}
        if($this->input->server("REQUEST_METHOD")== "POST"){ 


            $data["id"] = $this->input->post("id");
            $data["userName"] = $this->input->post("userName");
            $data["email"] = $this->input->post("email");
            $data["password"] = $this->input->post("password");
            $data["estado"] = $this->input->post("estado");

            $Vdata["id"] = $this->input->post("id");
            $Vdata["userName"] = $this->input->post("userName");
            $Vdata["email"] = $this->input->post("email");
            $Vdata["password"] = $this->input->post("password");
            $Vdata["estado"] = $this->input->post("estado");

			if (isset($id)) {
				$this->Usuario->update($id, $data);
			}else{
				$this->Usuario->insert($data);
			}
            
		}  
        $this->load->view('registro/usuario', $vdata);	
	}

	public function ver($id = null){
		$usuario = $this->Usuario->find($id);

		if (isset($usuario)) {
			$vdata["userName"] = $usuario->username;
			$vdata["email"] = $usuario->email;
			$vdata["password"] = $usuario->password;
			$vdata["estado"] = $usuario->estado;
		} else {
			$vdata["userName"] = $vdata["email"] = $vdata["password"] = $vdata["estado"] = "";
		}

		$this->load->view('registro/verUsuario',$vdata);
		
	}

    public function borrar($id = null)
	{
		$this->Usuario->delete($id);
		redirect("/registro/listarUsuario");
	}
}