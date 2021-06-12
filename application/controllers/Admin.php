<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('Mlogin');
		
		
	}
	public function index(){
        // $this->load->model('Mlogin');
		$data['artikel'] = $this->Mlogin->artikel();

		$data['title'] = 'Halaman Admin';
		$this->load->view('home/header' ,$data);
		$this->load->view('Admin/admin',$data);
		$this->load->view('home/footer');

	}
	
}
