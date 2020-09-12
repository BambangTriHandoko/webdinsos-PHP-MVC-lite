<?php

class pegawai{
 private $table = 'pegawai';
 private $db;

 public function __construct(){
     $this->db = new Database;
 }
 
 public function getdataid($id)
 {
     $this->db->query('SELECT * FROM pegawai WHERE id =:id');
     $this->db->bind('id', $id);
     return $this->db->single();
 }

public function getAllpegawai(){
 
$this->db->query('SELECT * FROM ' . $this->table);
return $this->db->resultSet();
}
}