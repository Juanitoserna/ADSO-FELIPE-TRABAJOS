<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DocentesModel extends CI_Model
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
        $this->db->where("rol", 'DOCENTE');

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
            'rol' => 'DOCENTE'
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
        $this->db->where("docente_id", $id);
        $this->db->delete("contenido_curso");
        $this->db->where("docente_id", $id);
        $this->db->delete("cursos");
        $this->db->where("usuario_id", $id);
        $this->db->delete($this->table);
    }

}
