<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cursos extends CI_Controller {
    // RECUERDEN VALIDAR EN EL CONTRUCTOR SI HAY UNA SESIOON SINO QUE LO SAQUE DE LAS  VISTAS ANTES DE QUE CARGE TODO Y MANDEN LOS DATOS DE SESSION DE ESA PERSONA A LA VISTA PARA QUE PUEDAN UTILIZAR LOS DATOS DE ESA PERSONA EN SU VISTA RESPECTIVA O PARA LO QUE QUIERAN TENGA EN CUENTA ESO 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('CursosModel');
        $this->load->model('DocentesModel');
        $validacion = $this->session->has_userdata('session_persona');
        if ($validacion) {
            // si es haci verificamos que tipo de usuario es
            $session = $this->session->userdata('session_persona');
            // ahora miramos que tipo de usuario es si es estudiante le permitimos la entra de lo contrario lo sacamos 
            if ($session['rol'] = 'ADMINISTRADOR') {
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
    
    public function lista(){
        $data['session'] = $this->session->userdata("session_persona");
        $data['cursos']=$this->CursosModel->getCursos();
        //HACER CODIGO PARA QUE APAREZCA EL NOMBRE DEL EL DOCENTE EN VEZ DEL ID
        $this->load->view('Cursos/listaCursos',$data);
    }
    public function createCursoView(){
        $data['session'] = $this->session->userdata("session_persona");
        $this->load->view('Cursos/registrarCurso',$data);
    }
    public function registrarCurso(){
        $data['session'] = $this->session->userdata("session_persona");	
        $nombres = $this->input->post('nombres');
        $duracion = $this->input->post('duracion');
        $descripcion = $this->input->post('descripcion');
        $precio = $this->input->post('precio');
        $categoria = $this->input->post('categoria');
        $material_estudio = $this->input->post('material_estudio');
        $docente_id = $this->input->post('docente_id');

        if($nombres !== "" && $duracion !== "" && $descripcion !== "" && $precio !== "" && $categoria !== "" && $material_estudio !== "" && $docente_id !== ""){
            $this->CursosModel->insert($nombres, $duracion, $descripcion, $precio, $categoria, $material_estudio, $docente_id);
            redirect('Administrador/Cursos/lista','refresh');
        }
    }
    
    public function deleteCurso($curso_id = null){
        $this->CursosModel->delete($curso_id);
        redirect('Administrador/Cursos/lista','refresh');
    }
    public function editCurso($curso_id = null){
        $data['session'] = $this->session->userdata("session_persona");
        $cursos=$this->CursosModel->getCursoid($curso_id);
        $data['cursos']=$cursos;
        $this->load->view('Cursos/editarCurso',$data);
    }
    public function modificar($id_usuario){
        $data['session'] = $this->session->userdata("session_persona");
        $vdata['nombres']=$this->input->post('nombres');
        $vdata['apellidos']=$this->input->post('apellidos');
        $vdata['correo']=$this->input->post('email');
        $vdata['contrasena']=$this->input->post('password');
        $this->DocentesModel->update($id_usuario, $vdata);
        redirect('Administrador/Docentes/lista','refresh');
    }
    //  esta es la vista para el docente
    public function viewDocente(){
        $this->load->view('Administrador/vistaDocente');
    }
}