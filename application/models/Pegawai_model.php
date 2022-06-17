<?php
Class Pegawai_model extends CI_Model
{
  function TampilPegawai() 
    {
        $this->db->order_by('pegawai_id', 'ASC');
        return $this->db->from('master_dokter')
          ->get()
          ->result();
    }

    function HapusPegawai($id)
    {
        $this->db->delete('master_dokter',array('pegawai_id' => $id));
    }
}
?>