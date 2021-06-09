<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index(){
        $this->load->model('Mlogin');
		$data['artikel'] = $this->Mlogin->artikel();
		// $data['admin'] = $x;


		$data['title'] = 'Halaman Admin';
		$this->load->view('home/header' ,$data);
		$this->load->view('Admin/admin');
		$this->load->view('home/footer');

	}
	
}
