<?php

class user{
 private $table = 'users';
 private $db;

 public function __construct(){
     $this->db = new Database;
 }

 public function getdataid($id)
 {
     $this->db->query('SELECT * FROM users WHERE id =:id');
     $this->db->bind('id', $id);
     return $this->db->single();
 }
public function getAlluser(){
 
$this->db->query('SELECT * FROM ' . $this->table);
return $this->db->resultSet();
}
public function single(){
 
$this->db->query('SELECT * FROM ' . $this->table);
return $this->db->resultSet();
}
}