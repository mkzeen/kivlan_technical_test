<?php
Class Jadwal_model extends CI_Model
{
  function TampilJadwal() 
    {
        $this->db->order_by('id_jadwal', 'ASC');
        return $this->db->from('jadwal_hari')
          ->get()
          ->result();
    }

    function HapusJadwal($id,$id2)
    {
        $this->db->where('poli_id', $id);
        $this->db->where('dokter_id', $id2);
        $this->db->delete('jadwal');
    }
}
?>