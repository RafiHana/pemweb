<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// use Jenssegers\Blade\Blade;

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}
	// public function theme()
	// {
	// 	view('template/backend/theme');
	// }
}
