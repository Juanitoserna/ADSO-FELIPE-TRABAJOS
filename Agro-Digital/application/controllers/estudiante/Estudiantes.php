<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Estudiantes extends CI_Controller
{
    // creamos un contructor para validar que haya iniciado session para dejarlo estar aqui 

    public function __construct()
    {
        parent::__construct();
        // Carga el modelo de estudiantes
        $this->load->model('EstudiantesModel');

        $validacion = $this->session->has_userdata('session_persona');
        if ($validacion) {
            // si es haci verificamos que tipo de usuario es
            $session = $this->session->userdata('session_persona');
            // ahora miramos que tipo de usuario es si es estudiante le permitimos la entra de lo contrario lo sacamos 
            if ($session['rol'] = 'ESTUDIANTE') {
                // si es estudiante entonces 
                return false;
            } else {
                // lo mandamos a la pagina de inicio
                redirect(base_url('index.php'), 'refresh');
                die();
            }
        } else {
            redirect(base_url('index.php'), 'refresh');
        }
    }


    // aqui lo mandamos a la pagina principal que serian los cursos
    public function index()
    {
        $data['totalCursos'] = $this->obtenerTotalCursosEstudiante();
        $data['session'] = $this->session->userdata('session_persona');
        $this->load->view('Estudiantes/inicio', $data);
    }

    // vista para las notas
    public function misCursos()
    {
        $data['totalCursos'] = $this->obtenerTotalCursosEstudiante();
        $data['session'] = $this->session->userdata('session_persona');
        $this->load->view('Estudiantes/cursos', $data);
    }

    // vista para los examenes 
    public function examenes()
    {
        $data['totalCursos'] = $this->obtenerTotalCursosEstudiante();
        $data['session'] = $this->session->userdata('session_persona');
        $this->load->view('Estudiantes/examenes', $data);
    }
    public function notas()
    {
        $data['totalCursos'] = $this->obtenerTotalCursosEstudiante();
        $data['session'] = $this->session->userdata('session_persona');
        $this->load->view('Estudiantes/notas', $data);
    }
    // Función privada para obtener el total de cursos del estudiante
    private function obtenerTotalCursosEstudiante()
    {
        $sessionData = $this->session->userdata('session_persona');

        if (!empty($sessionData['id'])) {
            $idEstudiante = $sessionData['id'];
            $totalCursos = $this->EstudiantesModel->ObtenerTotalCursosEstudiante($idEstudiante);

            return $totalCursos;
        } else {
            // Manejar el caso en que el ID del estudiante no esté presente en la sesión
            return 0; // O el valor que desees en este caso
        }
    }
}

/* End of file Controllername.php */
