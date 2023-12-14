<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_dafgol extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getDafgol() //untuk nampilin semua data
	{
		$result = $this->db->get('master_golongan');
		return $result;
	}

	public function detailDafgol($id)
	{
		$this->db->where('id_jenis_golongan', $id);
		$hasil = $this->db->get('master_golongan')->result_array();
		return $hasil[0];
	}

	public function insertDafgol()
	{
		$gol = array('jenis_golongan' => $this->input->post('jenis_golongan'));
		$this->db->insert('master_golongan', $gol);
	}

	public function editDafgol($id)
	{
		$gol = array('jenis_golongan' => $this->input->post('jenis_golongan'));
		$this->db->where('id_jenis_golongan', $id);
		$this->db->update('master_golongan', $gol);
	}

	public function deleteDafgol($id)
	{
		$this->db->where('id_jenis_golongan', $id);
		$del = $this->db->delete('master_golongan');
		return $del;
	}


}

/* End of file m_golongan.php */
/* Location: ./application/models/m_golongan.php */