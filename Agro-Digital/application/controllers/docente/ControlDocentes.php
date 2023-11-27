<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ControlDocentes extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('CursosModel');
		$this->load->model('ModeloUsuarios');
	}


	public function index()
	{
		$data['session'] = $this->session->userdata("session_persona");
		$data['cursos'] = $this->CursosModel->getCursos();
		$this->load->view('docentes/vistaDocentes', $data);
	}

	public function vistaPerfil()
	{
		$data['session'] = $this->session->userdata('session_persona');
		$this->load->view('docentes/perfilDocentes', $data);
	}

	// funcion para agregar los temas a los cursos asignados a los docentes
	public function guardarDatos()
	{
		$contenido_id = $this->input->post('contenido_id');
		$tipo_contenido = $this->input->post("tipo_contenido");
		$titulo_contenido = $this->input->post("titulo_contenido");
		$enlace_contenido = $this->input->post("enlace_contenido");
		$fecha_publicacion = $this->input->post("fecha_publicacion");


		// Redirigir después de la subida
		if ($contenido_id !== "" && $tipo_contenido !== "" && $titulo_contenido !== "" && $enlace_contenido !== "" && $fecha_publicacion !== "") {
			//Enviamos los datos extraidos al modelo

			$this->ModeloUsuarios->insertarCursos($contenido_id, $tipo_contenido, $titulo_contenido, $enlace_contenido, $fecha_publicacion);

			$this->load->view('docentes/vistaDocentes');
		}
	}
}
