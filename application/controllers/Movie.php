<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Movie extends CI_Controller {

	// construct
	public function __construct()
	{
      	parent::__construct();
      	$this->load->model('M_movie');
	}

	public function index()
	{
		$this->load->view('cari_film');
	}

	public function cari_film()
	{
		$film = $this->input->post('film');

		$data['data_film'] = $this->M_movie->cari_movie($film);
		$this->load->view('film', $data);
	}

	public function detail($imdbID)
	{
		$data['detail_film'] = $this->M_movie->detail_movie($imdbID);
		$this->load->view('detail_film', $data);
	}
}
