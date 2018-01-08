<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		
		$this->load->view('head.html');
		$this->load->view('main_top_menu');
		$this->load->view('side_menu');
		//$this->load->view('sys_loging');
        $this->load->view('main_board');
		$this->load->view('html_footer');
		
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
