<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('CursosModel');
    }

    public function validarIngreso()
    {
        $email = $this->input->post('correo');
        $password = $this->input->post('contrasena');

        //  validamos que los datos no venga vacios
        if ($email != "" && $password != "") {
            // ahora validamos que los datos esten registrados en la base de datos

            $validacion = $this->CursosModel->validarIngreso($email, $password);
            if ($validacion) {
                // 1.los datos estan registrados en la base de datos 
                // 2. Obtenemos los datos de ese usuario para guardarlos en la session 
                $persona = $this->CursosModel->getPersonaEmail($email);

                $datosSesion = [
                    // estos son los datos de sesion de la persona que se logueo
                    "id" => $persona->usuario_id,
                    "nombres" => $persona->nombres,
                    "apellidos" => $persona->apellidos,
                    "correo" => $persona->correo,
                    "contrasena" => $persona->contrasena,
                    "rol" => $persona->rol,
                ];
                // cargamos los datos del usuario a la session 
                $this->session->set_userdata('session_persona', $datosSesion);
                //3. ahora validamos que tipo de usuario es para mandarlo a la vista respectiva 
                if ($persona->rol == 'ESTUDIANTE') {
                    redirect('estudiante/Estudiantes');
                } else if ($persona->rol == 'DOCENTE') {
                    redirect('docente/ControlDocentes', 'refresh');
                } else if ($persona->rol == 'ADMINISTRADOR') {
                    redirect('Administrador/Admin', 'refresh');
                }
            } else {
                // el usuario no existe
                $data['datosInvalidos'] = true;
                redirect('Welcome/vistaLogin', $data);
            }
        } else {
            // mandamos un mensaje de error en la vista
            $data['errorInData'] = true;
            $data['valueEmail'] = $email;
            $data['valuePassword'] = $password;
            redirect('Welcome/vistaLogin', $data);
        }
    }

    // aqui obtegno
    public function cerrarSesion()
    {
        $this->session->sess_destroy();
        redirect(base_url('index.php'), 'refresh');
    }


}

/* End of file Controllername.php */
