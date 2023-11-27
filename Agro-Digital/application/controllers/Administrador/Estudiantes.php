<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estudiantes extends CI_Controller {
    // RECUERDEN VALIDAR EN EL CONTRUCTOR SI HAY UNA SESIOON SINO QUE LO SAQUE DE LAS  VISTAS ANTES DE QUE CARGE TODO Y MANDEN LOS DATOS DE SESSION DE ESA PERSONA A LA VISTA PARA QUE PUEDAN UTILIZAR LOS DATOS DE ESA PERSONA EN SU VISTA RESPECTIVA O PARA LO QUE QUIERAN TENGA EN CUENTA ESO 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('EstudiantesModel');
    }
    
    public function lista(){
        $data['session'] = $this->session->userdata("session_persona");
        $data['usuarios']=$this->EstudiantesModel->findAll();
        $this->load->view('Administrador/listaEstudiantes',$data);
    }
    public function registrarUsuario(){
        $nombres = $this->input->post('nombres');
        $apellidos = $this->input->post('apellidos');
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        if($nombres !== "" && $apellidos !== "" && $email !== "" && $password !== ""){
            $this->EstudiantesModel->insert($nombres, $apellidos, $email, $password);
            redirect('Administrador/Estudiantes/lista','refresh');
        }
    }
    
    public function deleteUser($id_usuario = null){
        $this->EstudiantesModel->delete($id_usuario);
        redirect('Administrador/Estudiantes/lista','refresh');
    }
    public function editUser($id_usuario = null){
        $usuario=$this->EstudiantesModel->find($id_usuario);
        $data['usuarios']=$usuario;
        $this->load->view('Administrador/editarEstudiantes',$data);
    }
    public function modificar($id_usuario){
        $vdata['nombres']=$this->input->post('nombres');
        $vdata['apellidos']=$this->input->post('apellidos');
        $vdata['correo']=$this->input->post('email');
        $vdata['contrasena']=$this->input->post('password');
        $this->EstudiantesModel->update($id_usuario, $vdata);
        redirect('Administrador/Estudiantes/lista','refresh');
    }
    //  esta es la vista para el docente
    public function viewDocente(){
        $this->load->view('Administrador/vistaDocente');
    }
}