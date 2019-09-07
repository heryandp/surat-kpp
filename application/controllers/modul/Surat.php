<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat extends CI_Controller {

	public function index()
	{
		echo 'surat modul';		
	}

	public function masuk()
	{
		$this->load->view('surat/masuk');
	}

	public function keluar()
	{
		$this->load->view('surat/keluar');
	}

}

/* End of file Surat.php */
/* Location: ./application/controllers/modul/Surat.php */