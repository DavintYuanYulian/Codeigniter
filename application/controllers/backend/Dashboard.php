<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Jenssegers\Blade\Blade;

class Dashboard extends MY_Controller
{
	public function index()
	{
		//$this->load->view('template/backend/theme');
		view('backend/Dashboard/index');
	}
	public function table()
	{
		//$this->load->view('template/backend/theme');
		view('backend/Dashboard/table');
	}
}
