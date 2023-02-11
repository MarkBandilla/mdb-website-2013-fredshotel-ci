<?php //if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cabanatuan extends CI_Controller {
	public function index()	{	
		$this->load->view('cabanatuan/index');
	}
	
	public function page($page = 'index') {
		if ( ! file_exists('application/views/cabanatuan/'.$page.'.php')) {
			// Whoops, we don't have a page for that!
			show_404();
		}
		$data['title'] = ucfirst($page); // Capitalize the first letter
		$this->load->view('cabanatuan/'.$page);
	}
}
