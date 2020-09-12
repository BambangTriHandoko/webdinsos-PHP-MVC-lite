<?php

class visual{
 private $table = 'visual';
 private $db;

 public function __construct(){
     $this->db = new Database;
 }

 public function getdataid($id)
 {
     $this->db->query('SELECT * FROM visual WHERE id =:id');
     $this->db->bind('id', $id);
     return $this->db->single();
 }
public function getAllvisual(){
 
$this->db->query('SELECT * FROM ' . $this->table);
return $this->db->resultSet();
}
}