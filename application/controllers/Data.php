<?php
class Data extends CI_Controller {
 
    public function pdf()
    {
      $no=0;
      $query = $this->db->get('master_unit');
      foreach($query->result() as $row)
        {
          
            $data['poli_coba'][$no] = $row;
            //$query2 = $this->db->get_where('jadwal', array('poli_id' => $row->unit_id));
            $query2 =$this->db->select('master_dokter.pegawai_nama, master_dokter.pegawai_id');
            $query2 =  $this->db->from('jadwal');
            $query2 = $this->db->join('master_dokter','jadwal.dokter_id = master_dokter.pegawai_id');      
            $query2 = $this->db->where('jadwal.poli_id', $row->unit_id);
            $query2 = $this->db->group_by('dokter_id');
            $query2 = $this->db->get();
            $no2=0;
            foreach ($query2->result() as $key) {
              # code...
              $data['poli_coba'][$no]->poli_dokter[$no2] = $key;

                $query3 =$this->db->select('*');
              $query3 =  $this->db->from('jadwal');
              $query3 = $this->db->join('master_dokter','jadwal.dokter_id = master_dokter.pegawai_id');
              $query3 = $this->db->join('master_unit','jadwal.poli_id = master_unit.unit_id');
              $query3 = $this->db->where('jadwal.poli_id', $row->unit_id);
              $query3 = $this->db->where('jadwal.dokter_id', $key->pegawai_id);
              $query3 = $this->db->get();

              $no3=0;
              foreach ($query3->result() as $key2) {
                # code...
                $data['poli_coba'][$no]->poli_dokter[$no2]->poli_dokter_jadwal[$no3] = $key2;
                $no3++;
              }
              $no2++;
            }
          
            $no++;
        }

      $this->load->library('pdf');

      $this->pdf->setPaper('A4', 'landscape');
      $this->pdf->filename = "Jadwal-Dokter.pdf";
      $this->pdf->load_view('laporan_pdf', $data);
    }
 
}