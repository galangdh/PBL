<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class c_dashboard extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Mdashboard/m_dashboard');
  }

  public function index()
  {
    $data = [
      'bootstrap' => 'partial/bootstrap',
      'loader'    => 'partial/loader',
      'navbar'    => 'partial/navbar',
      'sidebar'   => 'partial/sidebar',
      'header'    => 'partial/header',
      'content'   => 'Vdasboard/v_dashboard',
      'script'    => 'partial/script'
    ];
    $this->load->view('master', $data);
  }

}

/* End of file c_dashboard.php */
/* Location: ./application/controllers/c_dashboard.php */