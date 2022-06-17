<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
        $this->load->model('Pegawai_model');

    }

	public function index()
	{
		$data['data_pegawai'] = $this->Pegawai_model->TampilPegawai();
		$data['tampilan'] = 'home';
		$this->load->view('welcome_message',$data);
	}

	public function simpan_pegawai()
	{
		$kosong="";
		$data = array(
            'pegawai_id'=>$kosong,
			'pegawai_nomor'=>$this->input->post('no_pegawai'),
			'pegawai_nama'=>$this->input->post('nama_pegawai'),
            'pegawai_jenis_kelamin'=>$this->input->post('jenis_pegawai'),
            'pegawai_sip'=>$this->input->post('sip_pegawai')
        );
        $this->db->insert('master_dokter',$data);
        redirect('/');
	}

	public function edit_simpan()
	{
		$data = array(
            'pegawai_nomor'=>$this->input->post('no_pegawai'),
			'pegawai_nama'=>$this->input->post('nama_pegawai'),
            'pegawai_jenis_kelamin'=>$this->input->post('jenis_pegawai'),
            'pegawai_sip'=>$this->input->post('sip_pegawai')
		);
		$nik = $this->input->post('id');
		$this->db->where('pegawai_id', $nik);
        $this->db->update('master_dokter',$data);
        redirect('/');
	}

	public function hapus($id)
	{
		$this->Pegawai_model->HapusPegawai($id);
        redirect('/');
	}

	public function poli()
	{
		// fungsi untuk me-load view about.php
		// $this->data['tampilan'] = 'poli';
		// $this->load->view('welcome_message',$this->data);
	}

	public function jadwal()
	{
		// fungsi untuk me-load view contact.php
		$this->load->view('contact');
	}
}
