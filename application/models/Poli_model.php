<?php
Class Poli_model extends CI_Model
{
  function TampilPoli() 
    {
        $this->db->order_by('unit_id', 'ASC');
        return $this->db->from('master_unit')
          ->get()
          ->result();
    }

    function HapusPoli($id)
    {
        $this->db->delete('master_unit',array('unit_id' => $id));
    }
}
?>