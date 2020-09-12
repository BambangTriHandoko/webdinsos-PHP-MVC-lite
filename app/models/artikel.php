<?php

class artikel{
 private $table = 'artikel';
 private $db;

 public function __construct(){
     $this->db = new Database;
 }


public function getAllartikel(){
 
$this->db->query('SELECT * FROM ' . $this->table);
return $this->db->resultSet();
}
public function getdataid($artikel_id)
    {
        $this->db->query('SELECT * FROM artikel WHERE artikel_id =:artikel_id');
        $this->db->bind('artikel_id', $artikel_id);
        return $this->db->single();
    }
public function getdatakat($kategori)
    {
        $this->db->query('SELECT * FROM artikel WHERE kategori =:kategori');
        $this->db->bind('kategori', $kategori);
        return $this->db->single();
    }
    
public function tambahdata($data){

    $query = "INSERT INTO artikel
    VALUES
    ('','judul','gambar','kategori','isi')";
    $this->db->query($query);
    $this->db->bind('judul', $data['judul']);
    $this->db->bind('gambar', $data['image']);
    $this->db->bind('kategori', $data['kategori']);
    $this->db->bind('isi', $data['isi']);
    $this->db->execute();
}

public function cariDataartikel(){
    $keyword = $_POST['keyword'];
    $query = "SELECT * FROM artikel WHERE judul LIKE :keyword";
    $this->db->query($query);
    $this->db->bind('keyword', "%$keyword%");
    return $this->db->resultSet();
}
}