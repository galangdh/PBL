<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class c_login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data = [
	      'loader'    	  => 'partial/loader'
	  ];
		$this->load->view('Vlogin/v_login', $data);
	}

}

/* End of file c_login.php */
/* Location: ./application/controllers/c_login.php */