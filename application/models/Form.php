<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form extends CI_Model
{
    private $table = 'formulir'; //this is table name
    private $pk = 'id'; //this is primary key

    public function __construct()
    {
        parent::__construct();
        //Codeigniter : Write Less Do More
    }

    public function GetAll($id = null)
    {
        $this->db->order_by($this->pk, 'desc');
        if ($id != null) {
            $this->db->where('id', $id);
        }
        return $this->db->get($this->table); //u can use library cidbget
    }

    public function GetById($id)
  {

    $this->db->where($this->pk, $id); //u can use cidbwhere
    return $this->db->get($this->table)->row_array();
  }

    public function save($data)
    {
      return $this->db->insert($this->table, $data);
    }
  
    public function update($id, $data)
    {
      $this->db->where($this->pk, $id);
      return $this->db->update($this->table, $data);
    }
  
    public function delete($id)
    {
      $data = $this->M_keuangan->GetAll($id)->row();
  
      $this->db->where($this->pk, $id);
      $this->db->delete($this->table);
    }



}