<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_tingpendidikan extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getTingPen() //untuk nampilin semua data
	{
		$result = $this->db->get('master_pendidikan');
		return $result;
	}

	public function detailTingPen($id)
	{
		$this->db->where('id_tingpen', $id);
		$hasil = $this->db->get('master_pendidikan')->result_array();
		return $hasil[0];
	}

	public function insertTingPen()
	{
		$gol = array('tingkat_pendidikan' => $this->input->post('tingkat_pendidikan'));
		$this->db->insert('master_pendidikan', $gol);
	}

	public function editTingPen($id)
	{
		$gol = array('tingkat_pendidikan' => $this->input->post('tingkat_pendidikan'));
		$this->db->where('id_tingpen', $id);
		$this->db->update('master_pendidikan', $gol);
	}

	public function deleteTingPen($id)
	{
		$this->db->where('id_tingpen', $id);
		$del = $this->db->delete('master_pendidikan');
		return $del;
	}

}

/* End of file m_tingpendidikan.php */
/* Location: ./application/models/m_tingpendidikan.php */