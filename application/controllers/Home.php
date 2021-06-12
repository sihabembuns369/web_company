<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['artikel'] = $this->Mlogin->artikel();
		$data['title'] = 'Company Website';
		$this->load->view('home/header',$data);
		$this->load->view('home/home',$data);
		$this->load->view('home/footer');

		// echo "<h1>hallo</h1>";
	}
	
}
