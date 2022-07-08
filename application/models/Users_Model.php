<?php

class Users_Model extends CI_Model
{

  // Membuat struktur data
  private $table = "users";

  public function getAll()
  {
    $query = $this->db->get($this->table);
    return $query->result();
  }

  public function findById($id)
  {
    $this->db->where('id', $id);
    $query = $this->db->get($this->table);
    return $query->row();
  }
}
