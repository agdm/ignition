<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

  public function view($page = 'home') {
    /*
		if ( ! file_exits ( 'application/views/pages/' . $page . '.php')) {
      // no page for that
			print('Fail');
      #show_404();
    }
    
    $data['title'] = ucfirst( $page );
    
    $this->load->view('templates/header', $data);
    $this->load->view('views/pages/' . $page, $data);
    $this->load->view('templates/footer', $data);
		*/
}

/* End of file pages.php */
/* Location: ./application/controllers/pages.php */
