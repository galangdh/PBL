<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class c_pegawai extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mpegawai/m_pegawai');
	}

	// BAGIAN DATA UTAMA
	public function getAllData($id)
	{
		$gender = [['nama_gender' => 'Laki-Laki'],['nama_gender' => 'Perempuan']];
		$golongan = $this->dataGolonganPegawai($id);
		$pendidikan = $this->dataPendidikanPegawai($id);
		$diklatStruktural = $this->dataDikstrukPegawai($id);
		$diklatFungsional = $this->dataDikfungPegawai($id);
		$peg = $this->dataPegawai($id);
		$data = [
	      'bootstrap' 	=> 'partial/bootstrap',
	      'loader'    	=> 'partial/loader',
	      'navbar'   	=> 'partial/navbar',
	      'sidebar'   	=> 'partial/sidebar',
	      'header'    	=> 'partial/header',
	      'content'   	=> 'Vpegawai/v_pegawai',
	      'gender' 	  	=> $gender,
	      'golongan'	=> $golongan,
	      'pendidikan'	=> $pendidikan,
		  'diklatStruktural' => $diklatStruktural,
		  'diklatFungsional' => $diklatFungsional,
	      'peg'		  	=> $peg,
	      'script'    	=> 'partial/script'
	    ];
	    $this->load->view('master', $data);
	}

	public function dataPegawai($id)
	{
		$this->db->select('*');
		$this->db->from('pegawai');
		$this->db->where('pegawai.id_pegawai', $id);
		$result = $this->db->get();
		$isi = $result->result_array();
		// var_dump($isi);die;
		return $isi;
	}


	public function editDataUtama($id)
	{
		$this->m_pegawai->updateDataUtama($id);
		redirect("Cpegawai/c_pegawai/getAllData/{$id}");
	}


	//BAGIAN PENDIDIKAN 
	public function dataPendidikanPegawai($id)
	{
		$this->db->select('*');
		$this->db->from('pendidikan');
		$this->db->where('pendidikan.id_pegawai', $id);
		$this->db->join('pegawai', 'pendidikan.id_pegawai = pegawai.id_pegawai', 'left');
		$this->db->join('master_pendidikan', 'pendidikan.id_tingpen = master_pendidikan.id_tingpen', 'left');
		$result = $this->db->get();
		$isi = $result->result_array();
		// var_dump($isi);die;
		return $isi;
	}

	public function getPendidikanById($id, $id_pendidikan)
	{
		$this->db->select('*');
		$this->db->from('pegawai');
		$this->db->where('pegawai.id_pegawai', $id);
		$this->db->join('pendidikan', 'pegawai.id_pegawai = pendidikan.id_pegawai', 'left');
		$this->db->join('master_pendidikan', 'pendidikan.id_tingpen = master_pendidikan.id_tingpen', 'left');
		$result = $this->db->get();
		$isi = $result->result_array();
		$data = [];
		for ($i=0; $i < count($isi); $i++) { 
			if ($id_pendidikan == $isi[$i]['id_pendidikan']) {
				$data = $isi[$i];
			}
		}
		// var_dump($data);die;
		return $data;
	}

	public function tambahPendidikan($id)
	{
		$peg = $this->dataPegawai($id);
		$masterpen = $this->m_pegawai->getTingPen();
		$data = [
	      'bootstrap'	  => 'partial/bootstrap',
	      'loader'    	  => 'partial/loader',
	      'navbar'    	  => 'partial/navbar',
	      'sidebar'   	  => 'partial/sidebar',
	      'header'    	  => 'partial/header',
	      'content'   	  => 'Vpendidikan/v_tambahPendidikan',
	      'masterpen'	  => $masterpen,
	      'peg'		  	  => $peg,
	      'script'    	  => 'partial/script'
	    ];
	    $this->load->view('master', $data);
	}

	public function insertPendidikan($id)
	{
		$this->m_pegawai->insertPendidikan($id);
	   	redirect("Cpegawai/c_pegawai/getAllData/{$id}");
	}

	public function editPendidikan($id, $id_pendidikan)
	{
		$con = $this->getPendidikanById($id, $id_pendidikan);
		$masterpen = $this->m_pegawai->getTingPen();
		$data = [
	      'bootstrap' 	=> 'partial/bootstrap',
	      'loader'    	=> 'partial/loader',
	      'navbar'    	=> 'partial/navbar',
	      'sidebar'   	=> 'partial/sidebar',
	      'header'    	=> 'partial/header',
	      'content'   	=> 'Vpendidikan/v_editpendidikan',
	      'masterpen'	=> $masterpen,
	      'con'		  	=> $con,
	      'script'    	=> 'partial/script'
	    ];
	    $this->load->view('master', $data);
	}

	public function updatePendidikan($id, $id_pegawai)
	{
		$this->m_pegawai->updateDataPendidikan($id, $id_pegawai);
		redirect("Cpegawai/c_pegawai/getAllData/{$id_pegawai}");
	}

	public function hapusPendidikan($id_pegawai, $id)
	{
		$this->m_pegawai->deletePendidikan($id_pegawai, $id);
		redirect("Cpegawai/c_pegawai/getAllData/{$id_pegawai}");
	}

	//BAGIAN GOLONGAN
	public function dataGolonganPegawai($id)
	{
		$this->db->select('*');
		$this->db->from('golongan');
		$this->db->where('golongan.id_pegawai', $id);
		$this->db->join('pegawai', 'golongan.id_pegawai = pegawai.id_pegawai', 'left');
		$this->db->join('master_golongan', 'golongan.id_jenis_golongan = master_golongan.id_jenis_golongan', 'left');
		$result = $this->db->get();
		$isi = $result->result_array();
		// var_dump($isi);die;
		return $isi;
	}

	public function getGolonganById($id, $id_golongan)
	{
		$this->db->select('*');
		$this->db->from('pegawai');
		$this->db->where('pegawai.id_pegawai', $id);
		$this->db->join('golongan', 'pegawai.id_pegawai = golongan.id_pegawai', 'left');
		$this->db->join('master_golongan', 'golongan.id_jenis_golongan = master_golongan.id_jenis_golongan', 'left');
		$result = $this->db->get();
		$isi = $result->result_array();
		$data = [];
		for ($i=0; $i < count($isi); $i++) { 
			if ($id_golongan == $isi[$i]['id_golongan']) {
				$data = $isi[$i];
			}
		}
		// var_dump($data);die;
		return $data;
	}

	public function tambahGolongan($id)
	{
		$peg = $this->dataPegawai($id);
		$mastergol = $this->m_pegawai->getMasterGol();
		$data = [
	      'bootstrap'	  => 'partial/bootstrap',
	      'loader'    	  => 'partial/loader',
	      'navbar'    	  => 'partial/navbar',
	      'sidebar'   	  => 'partial/sidebar',
	      'header'    	  => 'partial/header',
	      'content'   	  => 'Vgolongan/v_tambahgolongan',
	      'mastergol'	  => $mastergol,
	      'peg'		  	  => $peg,
	      'script'    	  => 'partial/script'
	    ];
	    $this->load->view('master', $data);
	}

	public function insertGolongan($id)
	{
		$this->m_pegawai->insertGolongan($id);
	   	redirect("Cpegawai/c_pegawai/getAllData/{$id}");
	}

	public function editGolongan($id, $id_golongan)
	{
		$con = $this->getGolonganById($id, $id_golongan);
		// var_dump($con); die;
		$mastergol = $this->m_pegawai->getMasterGol();
		$data = [
	      'bootstrap' => 'partial/bootstrap',
	      'loader'    => 'partial/loader',
	      'navbar'    => 'partial/navbar',
	      'sidebar'   => 'partial/sidebar',
	      'header'    => 'partial/header',
	      'content'   => 'Vgolongan/v_editgolongan',
	      'mastergol' => $mastergol,
	      'con'		  => $con,
	      'script'    => 'partial/script'
	    ];
	    $this->load->view('master', $data);
	}

	public function updateGolongan($id_pegawai, $id)
	{
		$this->m_pegawai->updateDataGolongan($id_pegawai, $id);
		redirect("Cpegawai/c_pegawai/getAllData/{$id_pegawai}");
	}

	public function hapusGolongan($id_pegawai, $id)
	{
		$this->m_pegawai->deleteGolongan($id_pegawai, $id);
		redirect("Cpegawai/c_pegawai/getAllData/{$id_pegawai}");
	}

	//BAGIAN DIKLAT STRUKTURAL
	public function dataDikstrukPegawai($id)
	{
		$this->db->select('*');
		$this->db->from('diklat_struktural');
		$this->db->where('diklat_struktural.id_pegawai', $id);
		$this->db->join('pegawai', 'diklat_struktural.id_pegawai = pegawai.id_pegawai', 'left');
		$result = $this->db->get();
		$isi = $result->result_array();
		// var_dump($isi);die;
		return $isi;
	}

	public function getDikstrukById($id, $id_diklat)
	{
		$this->db->select('*');
		$this->db->from('pegawai');
		$this->db->where('pegawai.id_pegawai', $id);
		$this->db->join('diklat_struktural', 'pegawai.id_pegawai = diklat_struktural.id_pegawai', 'left');
		$result = $this->db->get();
		$isi = $result->result_array();
		$data = [];
		for ($i=0; $i < count($isi); $i++) { 
			if ($id_diklat == $isi[$i]['id_diklat']) {
				$data = $isi[$i];
			}
		}
		// var_dump($data);die;
		return $data;
	}

	public function tambahDikstruk($id)
	{
		$peg = $this->dataPegawai($id);
		$data = [
	      'bootstrap'	  => 'partial/bootstrap',
	      'loader'    	  => 'partial/loader',
	      'navbar'    	  => 'partial/navbar',
	      'sidebar'   	  => 'partial/sidebar',
	      'header'    	  => 'partial/header',
	      'content'   	  => 'Vdikstruk/v_tambahDikstruk',
	      'peg'		  	  => $peg,
	      'script'    	  => 'partial/script'
	    ];
	    $this->load->view('master', $data);
	}

	public function insertDikstruk($id)
	{
		$this->m_pegawai->insertDikstruk($id);
	   	redirect("Cpegawai/c_pegawai/getAllData/{$id}");
	}

	public function editDikstruk($id, $id_diklat)
	{
		$con = $this->getDikstrukById($id, $id_diklat);
		$data = [
	      'bootstrap' 	=> 'partial/bootstrap',
	      'loader'    	=> 'partial/loader',
	      'navbar'    	=> 'partial/navbar',
	      'sidebar'   	=> 'partial/sidebar',
	      'header'    	=> 'partial/header',
	      'content'   	=> 'Vdikstruk/v_editDikstruk',
	      'con'		  	=> $con,
	      'script'    	=> 'partial/script'
	    ];
	    $this->load->view('master', $data);
	}

	public function updateDikstruk($id, $id_pegawai)
	{
		$this->m_pegawai->updateDataDikstruk($id, $id_pegawai);
		redirect("Cpegawai/c_pegawai/getAllData/{$id_pegawai}");
	}

	public function hapusDikstruk($id_pegawai, $id_diklat)
	{
		$this->m_pegawai->deleteDikstruk($id_pegawai, $id_diklat);
		redirect("Cpegawai/c_pegawai/getAllData/{$id_pegawai}");
	}

	//BAGIAN DIKLAT FUNGSIONAL
	public function dataDikfungPegawai($id)
	{
		$this->db->select('*');
		$this->db->from('diklat_fungsional');
		$this->db->where('diklat_fungsional.id_pegawai', $id);
		$this->db->join('pegawai', 'diklat_fungsional.id_pegawai = pegawai.id_pegawai', 'left');
		$result = $this->db->get();
		$isi = $result->result_array();
		// var_dump($isi);die;
		return $isi;
	}

	public function getDikfungById($id, $id_diklat)
	{
		$this->db->select('*');
		$this->db->from('pegawai');
		$this->db->where('pegawai.id_pegawai', $id);
		$this->db->join('diklat_fungsional', 'pegawai.id_pegawai = diklat_fungsional.id_pegawai', 'left');
		$result = $this->db->get();
		$isi = $result->result_array();
		$data = [];
		for ($i=0; $i < count($isi); $i++) { 
			if ($id_diklat == $isi[$i]['id_diklat']) {
				$data = $isi[$i];
			}
		}
		// var_dump($data);die;
		return $data;
	}

	public function tambahDikfung($id)
	{
		$peg = $this->dataPegawai($id);
		$data = [
	      'bootstrap'	  => 'partial/bootstrap',
	      'loader'    	  => 'partial/loader',
	      'navbar'    	  => 'partial/navbar',
	      'sidebar'   	  => 'partial/sidebar',
	      'header'    	  => 'partial/header',
	      'content'   	  => 'Vdikfung/v_tambahDikfung',
	      'peg'		  	  => $peg,
	      'script'    	  => 'partial/script'
	    ];
	    $this->load->view('master', $data);
	}

	public function insertDikfung($id)
	{
		$this->m_pegawai->insertDikfung($id);
	   	redirect("Cpegawai/c_pegawai/getAllData/{$id}");
	}

	public function editDikfung($id, $id_diklat)
	{
		$con = $this->getDikfungById($id, $id_diklat);
		$data = [
	      'bootstrap' 	=> 'partial/bootstrap',
	      'loader'    	=> 'partial/loader',
	      'navbar'    	=> 'partial/navbar',
	      'sidebar'   	=> 'partial/sidebar',
	      'header'    	=> 'partial/header',
	      'content'   	=> 'Vdikfung/v_editDikfung',
	      'con'		  	=> $con,
	      'script'    	=> 'partial/script'
	    ];
	    $this->load->view('master', $data);
	}

	public function updateDikfung($id, $id_pegawai)
	{
		$this->m_pegawai->updateDataDikfung($id, $id_pegawai);
		redirect("Cpegawai/c_pegawai/getAllData/{$id_pegawai}");
	}

	public function hapusDikfung($id_pegawai, $id_diklat)
	{
   		$this->m_pegawai->deleteDikfung($id_pegawai, $id_diklat);
    	redirect("Cpegawai/c_pegawai/getAllData/{$id_pegawai}");
	}



}

/* End of file c_pegawai.php */
/* Location: ./application/controllers/c_pegawai.php */