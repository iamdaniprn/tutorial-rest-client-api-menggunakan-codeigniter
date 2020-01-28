<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	// construct
	public function __construct()
	{
      	parent::__construct();
      	$this->load->model('m_mahasiswa');
	}

	public function index()
	{
		$data['data_mhs'] = $this->m_mahasiswa->all_mahasiswa();
		$this->load->view('mahasiswa/mahasiswa', $data);
	}

	public function lihat_mahasiswa($id_mahasiswa)
	{
		$data['data_mhs'] = $this->m_mahasiswa->lihat_mahasiswa($id_mahasiswa);
		$this->load->view('mahasiswa/lihat_mahasiswa', $data);
	}

	public function tambah_mahasiswa()
	{
		$this->load->view('mahasiswa/tambah_mahasiswa');
	}

	public function simpan_mahasiswa()
	{
		$data['nama']          = $this->input->post('nama');
		$data['jenis_kelamin'] = $this->input->post('jenis_kelamin');
		$data['no_hp']         = $this->input->post('no_hp');

		$simpan = $this->m_mahasiswa->simpan_mahasiswa($data);

		if($simpan){
			redirect( base_url().'index.php/mahasiswa');
		}else{
			$this->load->view('mahasiswa/tambah_mahasiswa');
		}	
	}

	public function edit_mahasiswa($id_mahasiswa)
	{
		$data['data_mhs'] = $this->m_mahasiswa->edit_mahasiswa($id_mahasiswa);
		$this->load->view('mahasiswa/edit_mahasiswa', $data);
	}

	public function update_mahasiswa()
	{
		$data['id_mahasiswa']  = $this->input->post('id_mahasiswa');
		$data['nama']          = $this->input->post('nama');
		$data['jenis_kelamin'] = $this->input->post('jenis_kelamin');
		$data['no_hp']         = $this->input->post('no_hp');

		$simpan = $this->m_mahasiswa->update_mahasiswa($data);

		if($simpan){
			redirect( base_url().'index.php/mahasiswa');
		}else{
			$this->load->view('mahasiswa/tambah_mahasiswa');
		}	
	}

	public function hapus_mahasiswa($id_mahasiswa)
	{
		$hapus = $this->m_mahasiswa->hapus_mahasiswa($id_mahasiswa);
		if($hapus){
			redirect( base_url().'index.php/mahasiswa');
		}
	}




	// public function simpan_mahasiswa()
	// {
	// 	$nama          = $this->input->post('nama');
	// 	$jenis_kelamin = $this->input->post('jenis_kelamin');
	// 	$no_hp         = $this->input->post('no_hp');

	// 	// echo "$nama, $jenis_kelamin, $no_hp";

	// 	$simpan = $this->m_mahasiswa->simpan_mahasiswa($nama, $jenis_kelamin, $no_hp);

	// 	if($simpan){
	// 		redirect( base_url().'index.php/mahasiswa');
	// 	}else{
	// 		$this->load->view('mahasiswa/tambah_mahasiswa');
	// 	}	
	// }

}
	