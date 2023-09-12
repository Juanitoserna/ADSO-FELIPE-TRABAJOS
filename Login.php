<?php
class Login extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->form_validation->set_rules('nombre' ,'Nombre', 'required');
        $this->form_validation->set_rules('password' ,'Password', 'required');
        if($this->form_validation->run() == false)
        {
            
            $this->load->view('login');
            
        }
        else
        {
            $this->load->view('dashboard');
        }
    }
    public function verifica()
    {
        $nombre = $this->input->post('nombre');
        $password = $this->input->post('password');

        if($this->login_model->login($nombre, $password))
        {
            echo "ingreso";
        }
        else
        {
            $this->form_validation->set_message('verifica','Contraseña incorrecta');
            $this->load->view('login');
        }
    }
}