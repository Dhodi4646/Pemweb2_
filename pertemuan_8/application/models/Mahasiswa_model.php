<?php
class Mahasiswa_model extends CI_Model
{
    public $nim;
    public $nama;
    public $gender;
    public $tmp_lahir;
    public $tgl_lahir;
    public $ipk;
    public $prodi_kode;

    public function get_all_data()
    {
        $query = $this->db->get('Mahasiswa');

        return $query->result();
    }

    public function get_by_id($id){
        $query = $this->db->get_where('Mahasiswa', ['id' => $id]);
        return $query->row();
    }

    public function detailMahasiswa($id){
        $query = $this->db->get_where('Mahasiswa', ['id' => $id]);
        return $query->row_array();
    }

    public function save($data)
    {
        $sql = "INSERT INTO Mahasiswa (nim,nama,gender,tmp_lahir,tgl_lahir,ipk,prodi_kode) VALUES (?,?,?,?,?,?,?)";
        $this->db->query($sql, $data);
        $insert_id = $this->db->insert_id();

        return $this->get_by_id($insert_id);
    }

    public function edit($id, $data){
        $this->db->where('id', $id);

        $this->db->update('Mahasiswa', $data);
    }

    public function delete($data)
    {
        $sql = "DELETE FROM Mahasiswa WHERE id=?";
        $this->db->query($sql, $data);
    }
}
