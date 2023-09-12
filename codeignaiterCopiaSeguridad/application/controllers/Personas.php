<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Personas extends CI_Controller {

	public function __construct(){
		parent::__construct();
        $this->load->helper('form');
		$this->load->helper('url');
        $this->load->model('Persona');
        $this->load->database();
        
	}

    public function index()
	{
		
	}

	public function listado()
	{
		$vdata["personas"] = $this->Persona->findAll();
		$this->load->view('personas/listado', $vdata);
	}

	public function guardar($persona_id = null){
		$vdata["nombre"] = $vdata["apellido"] = $vdata["edad"] = "";
		if (isset($persona_id)) {
			$persona = $this->Persona->find($persona_id);

			if (isset($persona)) {
				$vdata["nombre"] = $persona->nombre;
				$vdata["apellido"] = $persona->apellido;
				$vdata["edad"] = $persona->edad;
				
			}
		}
        if($this->input->server("REQUEST_METHOD")== "POST"){ 


            $data["nombre"] = $this->input->post("nombre");
            $data["apellido"] = $this->input->post("apellido");
            $data["edad"] = $this->input->post("edad");

			$vdata["nombre"] = $this->input->post("nombre");
            $vdata["apellido"] = $this->input->post("apellido");
            $vdata["edad"] = $this->input->post("edad");

			if (isset($persona_id)) {
				$this->Persona->update($persona_id, $data);
			}else{
				$this->Persona->insert($data);
			}
		}  
		$this->load->view('personas/guardar', $vdata);	
	}

	public function ver($persona_id = null){
		$persona = $this->Persona->find($persona_id);

		if (isset($persona)) {
			$vdata["nombre"] = $persona->nombre;
			$vdata["apellido"] = $persona->apellido;
			$vdata["edad"] = $persona->edad;
		} else {
			$vdata["nombre"] = $vdata["apellido"] = $vdata["edad"] = "";
		}

		$this->load->view('personas/ver',$vdata);
		
	}
    
	public function borrar($persona_id = null)
	{
		$this->Persona->delete($persona_id);
		redirect("/personas/listado");
	}
}
