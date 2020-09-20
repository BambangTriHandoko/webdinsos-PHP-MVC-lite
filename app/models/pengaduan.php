<?php

class pengaduan{
 private $table = 'pengaduan';
 private $db;

 public function __construct(){
     $this->db = new Database;
 }

 public function getdataid($id)
 {
     $this->db->query('SELECT * FROM pengaduan WHERE id =:id');
     $this->db->bind('id', $id);
     return $this->db->single();
 }
public function getAllpengaduan(){
 
$this->db->query('SELECT * FROM ' . $this->table);
return $this->db->resultSet();
}
}