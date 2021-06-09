<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikel extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Martikel');
		
		
	}


	public function tambah()
	{
		$this->load->library('upload');
		$this->load->helper(array('form', 'url'));

		$judul = $this->input->post('judul', TRUE);
		$isi = $this->input->post('contents', TRUE);
		$tanggal = $this->input->post('tanggal', TRUE);
		// $ta = $this->input->post('files', TRUE);

// var_dump($ta);

		
		$e = $_FILES['files']['name'];
		var_dump($e);
        $x = explode(".", $e);
        $ekstensi = strtolower(end($x));
        $gambar = date('YmdHis') . "." . $ekstensi;
        $location = "img/gambar/" . $gambar;
        $valid_extensions = array("jpg", "jpeg", "png");

        if (!in_array($ekstensi, $valid_extensions)) {
           echo "ggl";
		   redirect('index.php/admin');
        } else {
           
		if (move_uploaded_file($_FILES['files']['tmp_name'], $location) && $this->Martikel->artikel($judul, $isi, $tanggal, $gambar)) {
                redirect('index.php/admin');
            } else {
				redirect('index.php/admin');

            }
        }
		
	}
	
	

}