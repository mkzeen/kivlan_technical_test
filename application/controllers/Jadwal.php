<?php

class Jadwal extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	function __construct()
    {
        parent::__construct();
        $this->load->model('Poli_model');
        $this->load->model('Pegawai_model');
        $this->load->model('Jadwal_model');

    }
	public function index()
	{
		$data['tampilan'] = 'jadwal';
		$data['data_pegawai'] = $this->Pegawai_model->TampilPegawai();
		$data['data_poli'] = $this->Poli_model->TampilPoli();
		$data['data_hari'] = $this->Jadwal_model->Tampiljadwal();
		//$this->load->view('welcome_message',$data);
		
		// foreach ($data['data_poli'] as $key) {
		// 	# code...
		// 	$key['detail_poli'][] = "2";
		// }
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

	    
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";

		$this->load->view('welcome_message',$data);
	}

	public function tes()
	{
		$data['tampilan'] = 'jadwal';
		$data['data_pegawai'] = $this->Pegawai_model->TampilPegawai();
		$data['data_poli'] = $this->Poli_model->TampilPoli();
		$data['data_hari'] = $this->Jadwal_model->Tampiljadwal();
		//$this->load->view('welcome_message',$data);
		
		// foreach ($data['data_poli'] as $key) {
		// 	# code...
		// 	$key['detail_poli'][] = "2";
		// }
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

		  $query =$this->db->select('master_dokter.pegawai_nama, master_dokter.pegawai_id');
	      $query =  $this->db->from('jadwal');
	      $query = $this->db->join('master_dokter','jadwal.dokter_id = master_dokter.pegawai_id');      
	      $query = $this->db->where('master_dokter.pegawai_id','1');
	      $query = $this->db->where('jadwal.poli_id','1');
	      $query = $this->db->get();
	    
		echo "<pre>";
		print_r($data);
		echo "</pre>";

		//$this->load->view('welcome_message',$data);
	}

	public function simpan_jadwal()
	{
		$kosong="";
		$data = array(
            'id_jadwal'=>$kosong,
			'dokter_id'=>$this->input->post('pilih_dokter'),
			'poli_id'=>$this->input->post('pilih_poli'),
			'jadwal_hari_id'=>$this->input->post('pilih_hari'),
			'jam'=>$this->input->post('jam')
        );
        $this->db->insert('jadwal',$data);
        redirect('/jadwal');
	}

	public function edit_simpan()
	{
		$data = array(
            'jam'=>$this->input->post('jam')
		);
		$nik = $this->input->post('id');
		$this->db->where('id_jadwal', $nik);
        $this->db->update('jadwal',$data);
        redirect('/jadwal');
	}

	public function hapus($id,$id2)
	{
		$this->Jadwal_model->HapusJadwal($id,$id2);
        redirect('/jadwal');
	}
}
