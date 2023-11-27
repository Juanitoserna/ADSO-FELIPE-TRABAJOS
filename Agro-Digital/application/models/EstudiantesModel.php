<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EstudiantesModel extends CI_Model
{

    public $table = 'usuarios';
    public function __construct()
    {
        $this->load->database();
    }

    function findAll()
    {
        $this->db->select();
        $this->db->from($this->table);
        $this->db->where("rol", 'ESTUDIANTE');

        $query = $this->db->get();
        return $query->result();
    }
    function find($id)
    {
        $this->db->select();
        $this->db->from($this->table);
        $this->db->where("usuario_id", $id);

        $query = $this->db->get();
        return $query->row();
    }

    function insert($nombres, $apellidos, $email, $password)
    {
        $data = [
            'nombres' => $nombres,
            'apellidos' => $apellidos,
            'correo' => $email,
            'contrasena' => md5($password),
            'rol' => 'ESTUDIANTE'
        ];
        $this->db->insert('usuarios', $data);

    }

    function update($id, $data)
    {
        $this->db->where("usuario_id", $id);
        $this->db->update($this->table, $data);
    }

    function delete($id)
    {
        $this->db->where("estudiante_id", $id);
        $this->db->delete("notas");
        $this->db->where("estudiante_id", $id);
        $this->db->delete("estudiantes_cursos");
        $this->db->where("usuario_id", $id);
        $this->db->delete($this->table);

    }
    public function ObtenerTotalCursosEstudiante($id)
    {
        // aqui manejamos la tabla intermedia para mostrar los curos que tiene dicho estudiante 
        $this->db->select('COUNT(curso) as total_cursos');
        // seleccionamos la tabla intermedia
        $this->db->from('estudiantes_cursos');
        $this->db->where('estudiante_id', $id);

        $query = $this->db->get();
        // verificamos que hayan elementos en la respues 

        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row->total_cursos;
        } else {
            // retornamos cero que significa que no tiene
            return 0;
        }
    }

}
