<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_pegawai extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	// DATA UTAMA
	public function updateDataUtama($id)
	{
		$config['upload_path']   = './assets/images/pegawai';
		$config['allowed_types'] = 'jpeg|jpg|png';
		
		$this->load->library('upload', $config);
			
		$peg = array(
			'nama_pegawai' 	  => $this->input->post('nama_pegawai'),
			'nip' 			  => $this->input->post('nip'),
			'nidn' 			  => $this->input->post('nidn'),
			'jenis_kelamin'   => $this->input->post('jenis_kelamin'),
			'no_kartupegawai' => $this->input->post('no_kartupegawai'),
		);

		if ($this->upload->do_upload('foto')) {
			$data = array('upload_data' => $this->upload->data());
			$data_foto = $data['upload_data']['file_name'];
			$peg['foto'] = 'assets/images/pegawai/' . $data_foto;
		}

		$this->db->where('id_pegawai', $id);
		$hasil = $this->db->update('pegawai', $peg);
		return $hasil;
	}

	// public function deleteDataUtama($id_pegawai, $id)
	// {
	// 	$this->db->where('id_pegawai', $id_pegawai);
	// 	$this->db->where('id_golongan', $id);
	// 	$hasil = $this->db->delete('golongan');
	// 	return $hasil;
	// }

	// PENDIDIKAN
	public function insertPendidikan($id)
	{
		$config['upload_path'] 	 = './assets/images/pendidikan';
		$config['allowed_types'] = 'jpeg|jpg|png';
		
		$this->load->library('upload', $config);
		
		$pen = array(
			'id_tingpen' 	 => $this->input->post('id_tingpen'), 
			'nama_sekolah' 	 => $this->input->post('nama_sekolah'), 
			'tanggal_lulus'  => $this->input->post('tanggal_lulus'), 
			'no_ijazah' 	 => $this->input->post('no_ijazah'), 
			'jurusan' 		 => $this->input->post('jurusan'), 
			'gelar_depan' 	 => $this->input->post('gelar_depan'), 
			'gelar_belakang' => $this->input->post('gelar_belakang'), 
			'id_pegawai' 	 => $this->input->post('id_pegawai')
		);

		if ($this->upload->do_upload('file_ijazah')) {
			$data = array('upload_data' => $this->upload->data());
			$data_foto = $data['upload_data']['file_name'];
			$pen['file_ijazah'] = 'assets/images/pendidikan/' . $data_foto;
		}

		$hasil = $this->db->insert('pendidikan', $pen);
		return $hasil;
	
	}

	public function updateDataPendidikan($id, $id_pegawai)
	{
		$config['upload_path'] = './assets/images/pendidikan';
		$config['allowed_types'] = 'jpeg|jpg|png';
		
		$this->load->library('upload', $config);
			
		$pen = array(
			'id_tingpen' 	 => $this->input->post('id_tingpen'), 
			'nama_sekolah' 	 => $this->input->post('nama_sekolah'), 
			'tanggal_lulus'  => $this->input->post('tanggal_lulus'), 
			'no_ijazah' 	 => $this->input->post('no_ijazah'), 
			'jurusan' 		 => $this->input->post('jurusan'), 
			'gelar_depan' 	 => $this->input->post('gelar_depan'), 
			'gelar_belakang' => $this->input->post('gelar_belakang'), 
			'id_pegawai' 	 => $this->input->post('id_pegawai')
		);

		if ($this->upload->do_upload('file_ijazah')) {
			$data = array('upload_data' => $this->upload->data());
			$data_foto = $data['upload_data']['file_name'];
			$pen['file_ijazah'] = 'assets/images/pendidikan/' . $data_foto;
		}

		$this->db->where('id_pegawai', $id_pegawai);
		$this->db->where('id_pendidikan', $id);
		$hasil = $this->db->update('pendidikan', $pen);
		return $hasil;
	}

	public function getTingPen()
	{
		$hasil = $this->db->get('master_pendidikan')->result_array();
		return $hasil;
	}

	public function deletePendidikan($id_pegawai, $id)
	{
		$this->db->where('id_pegawai', $id_pegawai);
		$this->db->where('id_pendidikan', $id);
		$hasil = $this->db->delete('pendidikan');
		return $hasil;
	}

	//BAGIAN GOLONGAN
	public function insertGolongan($id)
	{
		$config['upload_path'] 	 = './assets/images/golongan';
		$config['allowed_types'] = 'jpeg|jpg|png';
		
		$this->load->library('upload', $config);
		
		$gol = array(
				'id_jenis_golongan' => $this->input->post('id_jenis_golongan'), 
				'lama_tahun'		=> $this->input->post('lama_tahun'), 
				'lama_bulan' 		=> $this->input->post('lama_bulan'), 
				'tmt_golongan' 		=> $this->input->post('tmt_golongan'), 
				'tanggal_sk' 		=> $this->input->post('tanggal_sk'), 
				'nomor_sk' 			=> $this->input->post('nomor_sk'), 
				'tanggal_bkn' 		=> $this->input->post('tanggal_bkn'), 
				'nomor_bkn' 		=> $this->input->post('nomor_bkn'),
				'jenis_kp' 			=> $this->input->post('jenis_kp'),
				'id_pegawai' 		=> $this->input->post('id_pegawai')
			);

		if ($this->upload->do_upload('file_sk')){
			$data = array('upload_data' => $this->upload->data());
			$data_foto = $data['upload_data']['file_name'];
			$peg['file_sk'] = 'assets/images/pendidikan/' . $data_foto;
		}
		
		$hasil = $this->db->insert('golongan', $gol);
		return $hasil;
		
	}

	public function updateDataGolongan($id_pegawai, $id)
	{
		$config['upload_path'] 	 = './assets/images/golongan';
		$config['allowed_types'] = 'jpeg|jpg|png';
		
		$this->load->library('upload', $config);
		
		$gol = array(
				'id_jenis_golongan' => $this->input->post('id_jenis_golongan'), 
				'lama_tahun'		=> $this->input->post('lama_tahun'), 
				'lama_bulan' 		=> $this->input->post('lama_bulan'), 
				'tmt_golongan' 		=> $this->input->post('tmt_golongan'), 
				'tanggal_sk' 		=> $this->input->post('tanggal_sk'), 
				'nomor_sk' 			=> $this->input->post('nomor_sk'), 
				'tanggal_bkn' 		=> $this->input->post('tanggal_bkn'), 
				'nomor_bkn' 		=> $this->input->post('nomor_bkn'),
				'jenis_kp' 			=> $this->input->post('jenis_kp'),
				'id_pegawai' 		=> $this->input->post('id_pegawai')
			);

		if ($this->upload->do_upload('file_sk')){
			$data = array('upload_data' => $this->upload->data());
			$data_foto = $data['upload_data']['file_name'];
			$gol['file_sk'] = 'assets/images/pendidikan/' . $data_foto;
		}

		$this->db->where('id_pegawai', $id_pegawai);
		$this->db->where('id_golongan', $id);
		$hasil = $this->db->update('golongan', $gol);
		return $hasil;
	}

	public function getMasterGol()
	{
		$hasil = $this->db->get('master_golongan')->result_array();
		return $hasil;
	}

	public function deleteGolongan($id_pegawai, $id)
	{
		$this->db->where('id_pegawai', $id_pegawai);
		$this->db->where('id_golongan', $id);
		$hasil = $this->db->delete('golongan');
		return $hasil;
	}

	//BAGIAN DIKLAT STRUKTURAL
	public function insertDikstruk($id)
	{
		$config['upload_path'] 	 = './assets/images/DiklatStruktural';
		$config['allowed_types'] = 'jpeg|jpg|png';
		
		$this->load->library('upload', $config);
		
		$dikstruk = array(
			'nama_diklat' 	 => $this->input->post('nama_diklat'), 
			'lokasi_diklat'  => $this->input->post('lokasi_diklat'), 
			'tanggal_mulai'  => $this->input->post('tanggal_mulai'), 
			'tanggal_selesai'=> $this->input->post('tanggal_selesai'), 
			'id_pegawai' 	 => $this->input->post('id_pegawai')
		);

		if ($this->upload->do_upload('berkas_validasi')) {
			$data = array('upload_data' => $this->upload->data());
			$data_foto = $data['upload_data']['file_name'];
			$dikstruk['berkas_validasi'] = 'assets/images/DiklatStruktural/' . $data_foto;
		}

		$hasil = $this->db->insert('diklat_struktural', $dikstruk);
		return $hasil;
	
	}

	public function updateDataDikstruk($id, $id_pegawai)
	{
		$config['upload_path'] = './assets/images/DiklatStruktural';
		$config['allowed_types'] = 'jpeg|jpg|png';
		
		$this->load->library('upload', $config);
			
		$dikstruk = array(
			'nama_diklat' 	 => $this->input->post('nama_diklat'), 
			'lokasi_diklat'  => $this->input->post('lokasi_diklat'), 
			'tanggal_mulai'  => $this->input->post('tanggal_mulai'), 
			'tanggal_selesai'=> $this->input->post('tanggal_selesai'), 
			'id_pegawai' 	 => $this->input->post('id_pegawai')
		);
		
		if ($this->upload->do_upload('berkas_validasi')) {
			$data = array('upload_data' => $this->upload->data());
			$data_foto = $data['upload_data']['file_name'];
			$dikstruk['berkas_validasi'] = 'assets/images/DiklatStruktural/' . $data_foto;
		}

		$this->db->where('id_pegawai', $id_pegawai);
		$this->db->where('id_diklat', $id);
		$this->db->update('diklat_struktural', $dikstruk);
	}
	
	public function deleteDikstruk($id_pegawai, $id)
	{
		$this->db->where('id_pegawai', $id_pegawai);
		$this->db->where('id_diklat', $id);
		$hasil = $this->db->delete('diklat_struktural');
		return $hasil;
	}


	//BAGIAN DIKLAT FUNGSIONAL
	public function insertDikfung($id)
	{	
		$dikfung = array(
			'nama_diklat' 	 => $this->input->post('nama_diklat'), 
			'tipe_diklat'  	 => $this->input->post('tipe_diklat'), 
			'jenis_diklat'   => $this->input->post('jenis_diklat'),
			'tanggal_diklat' => $this->input->post('tanggal_diklat'), 
			'no_sertifikat'  => $this->input->post('no_sertifikat'),
			'penyelenggara'  => $this->input->post('penyelenggara'),
			'instansi'  	 => $this->input->post('instansi'),
			'id_pegawai' 	 => $this->input->post('id_pegawai')
		);

		$hasil = $this->db->insert('diklat_fungsional', $dikfung);
		return $hasil;
	
	}

	public function updateDataDikfung($id, $id_pegawai)
	{		
		$dikfung = array(
			'nama_diklat' 	 => $this->input->post('nama_diklat'), 
			'tipe_diklat'  	 => $this->input->post('tipe_diklat'), 
			'jenis_diklat'   => $this->input->post('jenis_diklat'),
			'tanggal_diklat' => $this->input->post('tanggal_diklat'), 
			'no_sertifikat'  => $this->input->post('no_sertifikat'),
			'penyelenggara'  => $this->input->post('penyelenggara'),
			'instansi'  	 => $this->input->post('instansi'),
			'id_pegawai' 	 => $this->input->post('id_pegawai')
		);

			$this->db->where('id_pegawai', $id_pegawai);
			$this->db->where('id_diklat', $id);
			$this->db->update('diklat_fungsional', $dikfung);
	
	}

	public function deleteDikfung($id_pegawai, $id_diklat)
	{
		$this->db->where('id_pegawai', $id_pegawai);
		$this->db->where('id_diklat', $id_diklat);
		$this->db->delete('diklat_fungsional');
	}

}

/* End of file m_pegawai.php */
/* Location: ./application/models/m_pegawai.php */