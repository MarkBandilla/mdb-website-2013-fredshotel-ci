<?php //if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Baguio extends CI_Controller {
	public function index()	{	
		$this->load->view('baguio/index');
	}
	
	public function page($page = 'index') {
		if ( ! file_exists('application/views/baguio/'.$page.'.php')) {
			// Whoops, we don't have a page for that!
			show_404();
		}
		$data['title'] = ucfirst($page); // Capitalize the first letter
		$this->load->view('baguio/'.$page);
	}
	public function gallery($page = 'index') {
		if ( ! file_exists('application/views/baguio/gallery/'.$page.'.php')) {
			// Whoops, we don't have a page for that!
			show_404();
		}
		$data['title'] = ucfirst($page); // Capitalize the first letter
		$this->load->view('baguio/gallery/'.$page);
	}
}
