<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {


		public function tambah(){
			// kita panggil dulu nama model yang kita buat
			$this->load->model('Martikel');
			// kita ambil nilai dulu yang ada didalam <form enctype="multipart/form-data" action="<?= base_url('guru/tambah');
			$judul = $this->input->post('judul');
			$isi = $this->input->post('isi_artikel');
			$tanggal = $this->input->post('tanggal');
			$gambar = $this->input->post('src');
			//var_dump($gambar);

		// 	$e = $_FILES['src']['name'];
        // $x = explode(".", $e);
        // $ekstensi = strtolower(end($x));
        // $foto = date('YmdHis') . "." . $ekstensi;
        // $location = "img/artikel/" . $foto;

        // $valid_extensions = array("jpg", "jpeg", "png");
		// move_uploaded_file($_FILES['image']['tmp_name'], $location) && 
		$this->Martikel->artikel($judul,$isi,$tanggal);
		
		redirect('index.php/admin');
		}

}
