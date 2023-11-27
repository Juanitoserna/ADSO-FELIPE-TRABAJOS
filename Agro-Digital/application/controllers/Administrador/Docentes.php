<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Docentes extends CI_Controller {
    // RECUERDEN VALIDAR EN EL CONTRUCTOR SI HAY UNA SESIOON SINO QUE LO SAQUE DE LAS  VISTAS ANTES DE QUE CARGE TODO Y MANDEN LOS DATOS DE SESSION DE ESA PERSONA A LA VISTA PARA QUE PUEDAN UTILIZAR LOS DATOS DE ESA PERSONA EN SU VISTA RESPECTIVA O PARA LO QUE QUIERAN TENGA EN CUENTA ESO 
    public function __construct()
    {
        parent::__construct();
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
        $data['usuarios']=$this->DocentesModel->findAll();
        $this->load->view('Administrador/listaDocentes',$data);
    }
    public function createUserView(){
        $data['session'] = $this->session->userdata("session_persona");
        $this->load->view('Administrador/registrarDocente',$data);
    }
    public function registrarUsuario(){
        $data['session'] = $this->session->userdata("session_persona");
        $nombres = $this->input->post('nombres');
        $apellidos = $this->input->post('apellidos');
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        if($nombres !== "" && $apellidos !== "" && $email !== "" && $password !== ""){
            $this->DocentesModel->insert($nombres, $apellidos, $email, $password);
            redirect('Administrador/Docentes/lista','refresh');
        }
    }
    
    public function deleteUser($id_usuario = null){
        $this->DocentesModel->delete($id_usuario);
        redirect('Administrador/Docentes/lista','refresh');
    }
    public function editUser($id_usuario = null){
        $data['session'] = $this->session->userdata("session_persona");
        $usuario=$this->DocentesModel->find($id_usuario);
        $data['usuarios']=$usuario;
        $this->load->view('Administrador/editarDocentes',$data);
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