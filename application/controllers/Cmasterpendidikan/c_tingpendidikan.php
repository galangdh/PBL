<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class c_tingpendidikan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mmasterpendidikan/m_tingpendidikan');
	}

	public function index()
	{
		$isi = $this->m_tingpendidikan->getTingPen();
	    $data = [
	      'bootstrap' => 'partial/bootstrap',
	      'loader'    => 'partial/loader',
	      'navbar'    => 'partial/navbar',
	      'sidebar'   => 'partial/sidebar',
	      'header'    => 'partial/header',
	      'content'   => 'Vmasterpendidikan/v_tingpendidikan',
	      'isi'       => $isi,
	      'script'    => 'partial/script'
	    ];
	    $this->load->view('master', $data);
	}

	public function tambahTingPen()
	{
		$data = [
	      'bootstrap' => 'partial/bootstrap',
	      'loader'    => 'partial/loader',
	      'navbar'    => 'partial/navbar',
	      'sidebar'   => 'partial/sidebar',
	      'header'    => 'partial/header',
	      'content'   => 'Vmasterpendidikan/v_tambahtingkat',
	      'script'    => 'partial/script'
    ];
    $this->load->view('master', $data);
	}

	public function insertTingPen()
	{
		$this->m_tingpendidikan->insertTingPen();
		redirect('Cmasterpendidikan/c_tingpendidikan');
	}

	public function ubahTingPen($id)
	{
		$isi = $this->m_tingpendidikan->detailTingPen($id);
	    $data = [
	      'bootstrap' => 'partial/bootstrap',
	      'loader'    => 'partial/loader',
	      'navbar'    => 'partial/navbar',
	      'sidebar'   => 'partial/sidebar',
	      'header'    => 'partial/header',
	      'content'   => 'Vmasterpendidikan/v_edittingpendidikn',
	      'isi'       => $isi,
	      'script'    => 'partial/script'
	    ];
	    $this->load->view('master', $data);
	}

	public function updateTingPen($id)
	{
		$this->m_tingpendidikan->editTingPen($id);
		redirect('Cmasterpendidikan/c_tingpendidikan');
	}

	public function hapusTingPen($id)
	{
		$this->m_tingpendidikan->deleteTingPen($id);
		redirect('Cmasterpendidikan/c_tingpendidikan');
	}

}

/* End of file c_tingpendidikan.php */
/* Location: ./application/controllers/c_tingpendidikan.php */