<?php

class Poli extends CI_Controller {

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

    }
	public function index()
	{
		$data['data_poli'] = $this->Poli_model->TampilPoli();
		$data['tampilan'] = 'poli';
		$this->load->view('welcome_message',$data);
	}

	public function simpan_poli()
	{
		$kosong="";
		$data = array(
            'unit_id'=>$kosong,
			'unit_kode'=>$this->input->post('kode_poli'),
			'unit_nama'=>$this->input->post('nama_poli')
        );
        $this->db->insert('master_unit',$data);
        redirect('/poli');
	}

	public function edit_simpan()
	{
		$data = array(
            'unit_kode'=>$this->input->post('kode_poli'),
			'unit_nama'=>$this->input->post('nama_poli')
		);
		$nik = $this->input->post('id');
		$this->db->where('unit_id', $nik);
        $this->db->update('master_unit',$data);
        redirect('/poli');
	}

	public function hapus($id)
	{
		$this->Poli_model->HapusPoli($id);
        redirect('/poli');
	}
}
