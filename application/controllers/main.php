<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	public function index()	{
		$data['page_id'] = "home";
		$navigation = $this->load-view('nav/main');
		$data['content'] = $this->load->view('home');
		echo $this->_view($data);
	}

	function _view($data) {
		$data['page_title'] = "Ignition";
		return $this->load->view('head', $data);
	}

}

/* End of file main.php */
/* Location: ./application/controllers/main.php */
