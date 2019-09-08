<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('modul/M_Surat');
	}

	public function index()
	{
		echo 'surat modul';		
	}

	// Surat Masuk
	public function masuk()
	{
		$this->load->view('surat/masuk');
	}

	public function rekap_masuk()
	{
		error_reporting(0);
		$list = $this->M_Surat->get_datatables_masuk();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $field) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $field->no;
            $row[] = $field->no_surat;
            $row[] = $field->tgl_surat;
            $row[] = $field->ket;
            $row[] = $field->hal_surat;
            $row[] = $field->first_name." ".$field->last_name;
            $row[] = null;
            $data[] = $row;
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->M_Surat->count_all_masuk(),
            "recordsFiltered" => $this->M_Surat->count_filtered_masuk(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
	}

	// Surat Keluar
	public function keluar()
	{
		$this->load->view('surat/keluar');
	}

}

/* End of file Surat.php */
/* Location: ./application/controllers/modul/Surat.php */