<?php

class kategori{
 private $table = 'kategori';
 private $db;

 public function __construct(){
     $this->db = new Database;
 }

 public function getdataid($nama)
 {
     $this->db->query('SELECT * FROM kategori WHERE nama =:nama');
     $this->db->bind('nama', $nama);
     return $this->db->single();
 }
public function getAllvisual(){
 
$this->db->query('SELECT * FROM ' . $this->table);
return $this->db->resultSet();
}
}