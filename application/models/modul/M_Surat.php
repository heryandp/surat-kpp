<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Surat extends CI_Model {

	// Data untuk query
	var $tabel_user = 'users';
	var $tabel_seksi = 't_seksi';

	// Surat Masuk
	var $tabel1 = 't_suratmasuk'; // tabel surat masuk
	var $tabel2 = 't_suratdispo'; // tabel disposisi untuk surat masuk
	var $kolom_order1 = array(null,'no','waktu','no_surat','no_sekre','ket','hal_surat','pelaksana'); // kolom order di surat masuk
	var $kolom_cari1 = array('tgl_surat','no_surat'); // kolom yang bisa dicari di surat masuk
	var $order1 = array('id_surat_masuk' => 'desc', ); // order untuk surat masuk

	// Surat Keluar

	public function __construct()
	{
		parent::__construct();
		
	}

	// Fungsi Surat Masuk
	private function _get_datatables_query_masuk()
	{
		$this->db->from($this->tabel1);
		$this->db->join($this->tabel2, 't_suratdispo.id_surat_masuk = t_suratmasuk.id', 'left');
		$this->db->join($this->tabel_seksi, 't_seksi.kode = t_suratdispo.seksi', 'left');
		$this->db->join($this->tabel_user, 'users.username = t_suratdispo.pelaksana', 'left');

		$i = 0;
		
		foreach ($kolom_cari1 as $item) {
			if ($POST['search']['value']) {
				if($i===0) // looping awal
                {
                    $this->db->group_start(); 
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
 
                if(count($this->$kolom_cari1) - 1 == $i) 
                $this->db->group_end(); 	
			}
		}

		if(isset($_POST['order'])) 
        {
            $this->db->order_by($this->kolom_order1[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order1))
        {
            $order = $this->order1;
            $this->db->order_by(key($order), $order[key($order)]);
        }
	}

	function get_datatables_masuk()
    {
        $this->_get_datatables_query_masuk();
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
 
    function count_filtered_masuk()
    {
        $this->_get_datatables_query_masuk();
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all_masuk()
    {
        $this->db->from($this->table1);
        return $this->db->count_all_results();
    }	

}

/* End of file M_Surat.php */
/* Location: ./application/models/modul/M_Surat.php */