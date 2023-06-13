<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Jenssegers\Blade\Blade;

class Dashboard extends MY_Controller 
{
    public function index()
	{
		view('backend/Dashboard/index');
	}
	public function table()
	{
		view('backend/Dashboard/table');
	}

}
