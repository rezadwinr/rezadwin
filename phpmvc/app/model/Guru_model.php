<?php
class Guru_model{
    private $table = 'data_guru';
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function getAll() {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultAll();
    }
    public function tambahData($data){
        $counterId = isset($_POST['country']) ? $_POST['country'] : 0;
        $qy = "INSERT INTO data_guru VALUES (" . $counterId . ", :nama, :jenis_kelamin, :mapel)";
        $this->db->query($qy);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
        $this->db->bind('mapel', $data['mapel']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function getDataById($id){
        $this->db->query("SELECT * FROM " . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->resultSingle();
    }
    public function hapusData($id){
        $qy = "DELETE FROM data_guru WHERE id = :id";
        $this->db->query($qy);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function ubahData($data){
        $qy = "UPDATE data_guru SET
                nama = :nama,
                jenis_kelamin = :jenis_kelamin,
                mapel = :mapel
                WHERE id = :id";
        $this->db->query($qy);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
        $this->db->bind('mapel', $data['mapel']);
        $this->db->bind('id', $data['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
?>