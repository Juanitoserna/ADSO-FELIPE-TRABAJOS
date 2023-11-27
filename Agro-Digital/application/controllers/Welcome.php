<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// cargamos el modelo 
		$this->load->model('CursosModel');
		//Do your magic here
	}
	public function index()
	{
		// Muestra el mensaje de campos vacíos si existe
		$data['vacios'] = $this->session->flashdata('vacios');

		$data['warning'] = $this->session->flashdata('warning');

		// Muestra el mensaje de error si existe
		$data['error'] = $this->session->flashdata('error');

		$data['cursos'] = $this->CursosModel->getCursos();

		$data['categorias']=$this->categorias();

		// Carga la vista del formulario de inicio de sesión con la lista de cursos
		$this->load->view('welcome_message', $data);
	}
	// esto es para obtener los temas de los cursos 
	public function temasCursos($id_curso = null)
	{
		$dataCursos = array();
		$temas = array();

		if ($id_curso != null) {
			$curso = $this->CursosModel->temasCursos($id_curso);

			// Verifica que $curso sea un array u objeto antes de continuar
			if (!empty($curso)) {
				$dataCursos['temas'] = $curso;

				foreach ($curso as $tema) {
					$temas[] = $this->CursosModel->temas($tema->tema_id);
				}

				$dataCursos['info'] = $temas;
				$dataCursos['datosCursos'] = $this->CursosModel->getCursoid($id_curso);
				$dataCursos['categorias'] = $this->categorias();
				$this->load->view('infoCursos', $dataCursos);
			} else {
				// Manejar la situación donde $curso no es un array u objeto
				echo "No se encontraron temas para el curso con ID: $id_curso";

				// O redirige a otra vista, según sea necesario
			}
		} else {
			// lo mandamos para otra vista
		}
	}
	// aqui obtenemos las categorias
	private function categorias(){
		return $categorias=$this->CursosModel->getCategorias();
	}
	public function abrirVistaDocente()
	{
		redirect('Administrador/Admin/abrirInterfazDocente');
	}
	public function registro()
	{
		$this->load->view('registrar');
	}
	public function admin()
	{
		$this->load->view('Administrador/vistaPrincipal');
	}
	public function vistaLogin()
	{
		$this->load->view('login');
	}
}
