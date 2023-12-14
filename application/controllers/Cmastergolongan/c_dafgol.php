<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class c_dafgol extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mmastergolongan/m_dafgol');
	}

	public function index()
	{
		$isi = $this->m_dafgol->getDafgol();
	    $data = [
	      'bootstrap' => 'partial/bootstrap',
	      'loader'    => 'partial/loader',
	      'navbar'    => 'partial/navbar',
	      'sidebar'   => 'partial/sidebar',
	      'header'    => 'partial/header',
	      'content'   => 'Vmastergolongan/v_dafgol',
	      'isi'       => $isi,
	      'script'    => 'partial/script'
	    ];
	    $this->load->view('master', $data);
	}

	public function tambahDafgol()
	{
		$data = [
	      'bootstrap' => 'partial/bootstrap',
	      'loader'    => 'partial/loader',
	      'navbar'    => 'partial/navbar',
	      'sidebar'   => 'partial/sidebar',
	      'header'    => 'partial/header',
	      'content'   => 'Vmastergolongan/v_insertdafgol',
	      'script'    => 'partial/script'
    ];
    $this->load->view('master', $data);
	}

	public function insertDafgol()
	{
		$this->m_dafgol->insertDafgol();
		redirect('Cmastergolongan/c_dafgol');
	}

	public function ubahDafgol($id)
	{
		$isi = $this->m_dafgol->detailDafgol($id);
	    $data = [
	      'bootstrap' => 'partial/bootstrap',
	      'loader'    => 'partial/loader',
	      'navbar'    => 'partial/navbar',
	      'sidebar'   => 'partial/sidebar',
	      'header'    => 'partial/header',
	      'content'   => 'Vmastergolongan/v_editdafgol',
	      'isi'       => $isi,
	      'script'    => 'partial/script'
	    ];
	    $this->load->view('master', $data);
	}

	public function updateDafgol($id)
	{
		$this->m_dafgol->editDafgol($id);
		redirect('Cmastergolongan/c_dafgol');
	}

	public function hapusDafgol($id)
	{
		$this->m_dafgol->deleteDafgol($id);
		redirect('Cmastergolongan/c_dafgol');
	}

}

/* End of file c_dafgol.php */
/* Location: ./application/controllers/c_dafgol.php */