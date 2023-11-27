<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrar extends CI_Controller {

	public function registro(){

        //Extraemos los valores de los inputs del formulario
		$nombres = $this->input->post("nombres");
        $apellidos = $this->input->post("apellidos");
		$email = $this->input->post("email");
		$password = $this->input->post("password");
		$rol = $this->input->post("rol");

        //Verificamos que no haya ningun campo vacio
        if($nombres !== "" && $apellidos !== "" && $email !== "" && $password !== "" && $rol !== ""){
            //Enviamos los datos extraidos al modelo
            $this->load->model('ModeloUsuarios');
            $this->ModeloUsuarios->insertar($nombres, $apellidos, $email, $password, $rol);

            $this->load->view('login');
        }
	}
}
