<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_dafdosen extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function insertPegawai()
	{
		$config['upload_path'] = './assets/images/pegawai';
		$config['allowed_types'] = 'jpeg|jpg|png';
		
		$this->load->library('upload', $config);
		
		if ( !$this->upload->do_upload('foto')){
			echo "Gagal Insert Data"; die();
		}
		else{
			$data = array('upload_data' => $this->upload->data());

			$data_foto = $data['upload_data']['file_name'];
			
			$peg = array(
				'nama_pegawai' => $this->input->post('nama_pegawai'),
				'nip' => $this->input->post('nip'),
				'nidn' => $this->input->post('nidn'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'no_kartupegawai' => $this->input->post('no_kartupegawai'),
				'foto' => 'assets/images/pegawai/' . $data_foto
			);

			$hasil = $this->db->insert('pegawai', $peg);
			return $hasil;
		}

	}

	public function getPegawai()
	{
		$result = $this->db->get('pegawai');
		return $result;
	}

	public function getId($id_pegawai)
	{
		$query = $this->db->get_where('pegawai', array('id_pegawai' => $id_pegawai));
        
        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row->id_pegawai;
        } else {
            return null;
        }
	}
	
	public function detailPegawai($id)
	{
		$this->db->where('id_pegawai', $id);
		$hasil = $this->db->get('pegawai');
		return $hasil->row();
	}

	public function deletePegawai($id)
	{
		$this->db->where('id_pegawai', $id);
		$hasil = $this->db->delete('pegawai');
		return $hasil;
	}

}

/* End of file m_dashboard.php */
/* Location: ./application/models/m_dashboard.php */