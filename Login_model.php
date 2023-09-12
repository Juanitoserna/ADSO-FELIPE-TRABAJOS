<?php
class Login_model extends CI_model
{
    public function __construct()
    {
        $this->load->database();
    }
    public function login($nombre, $password)
    {
        $query = $this->db->get_where('usuarios', array('nombre' => $nombre));
        if($query->num_rows() == 1)
        {
            $row=$query->row();
            if(password_verify($password, $row->password))
            {
                $data=array('user_data'=>array(
                    'nombre'=>$row->nombre,
                    'id'=>$row->id,
                    'email'=>$row->correo,
                    'password'=>$row->password)
                );
                $this->session->set_userdata($data);
                return true;
            }
        }
        $this->session->unset_userdata('user_data');
        return false;
    }
}