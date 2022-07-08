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
    public function simpan($data){
        $sql = "INSERT INTO kategori_peserta (nama) VALUES (?)";

        $this->db->query($sql, $data);
        $insert_id = $this->db->insert_id();
        return $this->getById($insert_id);
    }
    public function update($data){
        $sql = "UPDATE kategori_peserta SET nama=? WHERE id=?";
        $this->db->query($sql,$data);
    }
    public function delete($data){
        // hapus data kategori_peserta
        $sql = "DELETE FROM kategori_peserta WHERE id=?";
        $this->db->query($sql,$data);
    }
}
?>