<?php
class Jenis_kegiatan_model extends CI_Model{
    public $id, $nama;

    public function getAll(){
        $query = $this->db->get('jenis_kegiatan');
        return $query->result();
    }
    public function getById($id){
        $query = $this->db->get_where('jenis_kegiatan', ['id' => $id]);
        return $query->row();
    }
    public function simpan($data){
        $sql = "INSERT INTO jenis_kegiatan (nama) VALUES (?)";

        $this->db->query($sql, $data);
        $insert_id = $this->db->insert_id();
        return $this->getById($insert_id);
    }
    public function update($data){
        $sql = "UPDATE jenis_kegiatan SET nama=? WHERE id=?";
        $this->db->query($sql,$data);
    }
    public function delete($data){
        // hapus data jenis_kegiatan
        $sql = "DELETE FROM jenis_kegiatan WHERE id=?";
        $this->db->query($sql,$data);
    }
}
?>