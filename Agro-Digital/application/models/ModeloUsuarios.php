<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModeloUsuarios extends CI_Model{
    function insertar($nombres, $apellidos, $email, $password, $rol){
        $data = [
            'nombres' => $nombres,
            'apellidos' => $apellidos,
            'correo' => $email,
            'contrasena' => md5($password),
            'Rol' => $rol,
        ];
        $this->db->insert('usuarios',$data);
    }

    public function getCursos(){
        $contenido_cursos = $this->db->get('contenido_curso')->result();
        //     validamos que los datso no venga vacios
        if (!empty($contenido_cursos)) {
            return $contenido_cursos;
        } else {
            // mandamos unn areglo vacio en el caso de que no encuentre nada 
            array();
        }
    }

    function insertarCursos($curso, $docente_id, $tipo_contenido, $titulo_contenido, $enlace_contenido, $fecha_publicacion){
        $data = [
            'tipo_contenido' => $tipo_contenido,
            'titulo_contenido' => $titulo_contenido,
            'enlace_contenido' => $enlace_contenido,
            'fecha_publicacion' => $fecha_publicacion,
        ];
        $this->db->insert($data);
    }
}
?>