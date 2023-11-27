<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CursosModel extends CI_Model
{
    // cargamos el constructor principal donde cargamos todo antes de usar el model 
    public $table = 'cursos';
    public function validarIngreso($email, $password)
    {
        //  selecionamos los datos 
        $this->db->select('correo', 'contrasena');

        $this->db->where('correo', $email);
        $this->db->where('contrasena', $password);

        $respuesta = $this->db->get('usuarios')->result();
        // validamos que almenos los datos de la respuesta sea diferente de cero
        if (sizeof($respuesta) != 0) {
            return true;
        } else {
            return false;
        }
    }
    public function getPersonaEmail($email)
    {
        $this->db->where('correo', $email);
        $persona = $this->db->get('usuarios')->result();

        if (sizeof($persona) != 0) {
            return $persona[0];
        } else {
            // retornamos un null
            return null;
        }
    }

    public function getCursos()
    {

        $cursos = $this->db->get('cursos')->result();
        //     validamos que los datso no venga vacios
        if (!empty($cursos)) {
            return $cursos;
        } else {
            // mandamos unn areglo vacio en el caso de que no encuentre nada 
            array();
        }
    }
    public function getCategorias(){

        $categorias = $this->db->get('categorias')->result();
        //     validamos que los datso no venga vacios
        if (!empty($categorias)) {
            return $categorias;
        } else {
            // mandamos unn areglo vacio en el caso de que no encuentre nada 
            array();
        }
    }
    public function getCursoid($id_curso)
    {
        $this->db->where('curso_id',$id_curso);
        $cursos = $this->db->get('cursos')->result();
        //     validamos que los datso no venga vacios
        if (!empty($cursos)) {
            return $cursos[0];
        } else {
            // mandamos unn areglo vacio en el caso de que no encuentre nada 
            array();
        }
    }
    // creamos el metodo para obtener los temas que tiene el curso

    public function temasCursos($id_curso)
    {
        $this->db->where('curso_id', $id_curso);
        $cursos = $this->db->get('temas_x_cursos')->result();


        // verificamos que no venga vacio
        if (!empty($cursos)) {
            return $cursos;
        } else {
            array();
        }
    }
    public function temas($id_tema)
    {
        $this->db->where('tema_id', $id_tema);
        $temas = $this->db->get('temas')->result();

        return (!empty($temas)) ? $temas : array();
    }
    function insert($nombres, $duracion, $descripcion, $precio, $categoria, $material_estudio, $docente_id)
    {
        $data = [
            'nombre' => $nombres,
            'duracion' => $duracion,
            'descripcion' => $descripcion,
            'precio' => $precio,
            'categoria' => $categoria,
            'material_estudio' => $material_estudio,
            'docente_id' => $docente_id
        ];
        $this->db->insert('cursos', $data);

    }
    function delete($id)
    {
        $this->db->where("curso_id", $id);
        $this->db->delete("cursos");
    }
}

/* End of file CursosModel.php */
