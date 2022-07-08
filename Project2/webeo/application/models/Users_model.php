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
    public function simpan($data){
        $sql = "INSERT INTO users (username, password, email, created_at, last_login, status, role) VALUES (?,?,?,?,?,?,?)";

        $this->db->query($sql, $data);
        $insert_id = $this->db->insert_id();
        return $this->getById($insert_id);
    }
    public function update($data){
        $sql = "UPDATE users SET username=?, password=?, email=?, created_at=?, last_login=?, status=?, role=? WHERE id=?";
        $this->db->query($sql,$data);
    }
    public function delete($data){
        // hapus data users
        $sql = "DELETE FROM users WHERE id=?";
        $this->db->query($sql,$data);
    }
}
?>