<?php
class Kategori_peserta_model extends CI_Model{
    public $id, $nama;

    public function getAll(){
        $query = $this->db->get('kategori_peserta');
        return $query->result();
    }
    public function getById($id){
        $query = $this->db->get_where('kategori_peserta', ['id' => $id]);
        return $query->row();
    }
}
?>