<?php
class Users_model extends CI_Model{
    public $id, $username, $password, $email, $created_at, $last_login, $status, $role;

    public function getAll(){
        $query = $this->db->get('users');
        return $query->result();
    }
    public function getById($id){
        $query = $this->db->get_where('users', ['id' => $id]);
        return $query->row();
    }
}
?>