<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class c_dafdosen extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Mdafdosen/m_dafdosen');
  }

  public function index()
  {
    $isi = $this->m_dafdosen->getPegawai();
    $data = [
      'bootstrap' => 'partial/bootstrap',
      'loader'    => 'partial/loader',
      'navbar'    => 'partial/navbar',
      'sidebar'   => 'partial/sidebar',
      'header'    => 'partial/header',
      'content'   => 'Vdafdosen/v_dafdosen',
      'isi'       => $isi,
      'script'    => 'partial/script'
    ];
    $this->load->view('master', $data);
  }

  public function tambahDosen()
  {
    $data = [
      'bootstrap' => 'partial/bootstrap',
      'loader'    => 'partial/loader',
      'navbar'    => 'partial/navbar',
      'sidebar'   => 'partial/sidebar',
      'header'    => 'partial/header',
      'content'   => 'Vdafdosen/v_insertdosen',
      'script'    => 'partial/script'
    ];
    $this->load->view('master', $data);
  }

  public function insertDosen()
  {
    $this->m_dafdosen->insertPegawai();
    redirect('Cdafdosen/c_dafdosen');
  }

  public function editPegawai($id_pegawai)
  {
        $id = $this->m_dafdosen->getId($id_pegawai);
        if ($id) {
            redirect('Cpegawai/c_pegawai/getAllData/' . $id);
        } else {
            echo "ID pegawai tidak ditemukan.";
        }
  }

  public function hapusPegawai($id)
  {
    $this->m_dafdosen->deletePegawai($id);
    redirect('Cdafdosen/c_dafdosen');
  }  public function pencarian()
{
    if ($this->input->post('submit')) {
        $keyword = $this->input->post('keyword');
        $result = $this->m_dafdosen->searchPegawai($keyword);

        $data = [
            'bootstrap' => 'partial/bootstrap',
            'loader'    => 'partial/loader',
            'navbar'    => 'partial/navbar',
            'sidebar'   => 'partial/sidebar',
            'header'    => 'partial/header',
            'content'   => 'Vdafdosen/v_dafdosen',
            'isi'       => $result, // Pass the search result to the view
            'script'    => 'partial/script',
            'footer'    => 'partial/footer'
        ];

        $this->load->view('master', $data);
    }
}

}

/* End of file c_dashboard.php */
/* Location: ./application/controllers/c_dashboard.php */
