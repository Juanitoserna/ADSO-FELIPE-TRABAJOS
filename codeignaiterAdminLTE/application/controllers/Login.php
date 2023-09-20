<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	
	public function index()
	{
		$this->load->view('iniciar_session');
	}

    public function validarIngreso(){
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        if($email!="" && $password!=""){
            $this->load->model('LoginModel');
            $validacion = $this->LoginModel->validarIngreso($email,$password);

            if($validacion){
                $datosUsuario = $this->LoginModel->cargarDatos($email);

                $iniciarSesion = [
                                    "cedula" => $datosUsuario->cedula,
                                    "email" => $email,
                                    "tipo" => $datosUsuario->tipo,
                                    "estado" => $datosUsuario->estado,
                ];
                $this->session->set_userdata("inicio",$iniciarSesion);
                if($datosUsuario->tipo == "ADMIN"){
                    redirect('Usuario','refresh');
                }else{
                    redirect('iniciar_session','refresh');
                }
            }else{
                $data['campoError'] = true;
                $data['validarEmail'] = $email;
                $data['validarPassword'] = $password;
                $this->load->view('iniciar_session',$data);
            }
        }else{
            $data['datosInvalidos'] = true;
            $this->load->view('iniciar_session',$data);
        }
    }
    public function cerrarSession(){
		$this->session->sess_destroy();
        
        redirect('Login','refresh');
       

	}

}