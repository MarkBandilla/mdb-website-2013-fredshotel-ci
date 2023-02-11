<?php //if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
	public function index($page = 'index') {
		if ( ! file_exists('application/views/'.$page.'.php')) {
			// Whoops, we don't have a page for that!
			show_404();
		}
		$data['title'] = ucfirst($page); // Capitalize the first letter
		$this->load->view($page);
	}
}
