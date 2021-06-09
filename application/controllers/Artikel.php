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
			
		$this->Martikel->artikel($judul,$isi,$tanggal);
		
		redirect('index.php/admin');
		}

		function upload_image(){
			if(isset($_FILES["image"]["name"])){
				$config['upload_path'] = './img/gambar_artikel/';
				$config['allowed_types'] = 'jpg|jpeg|png|gif';
				$this->upload->initialize($config);
				if(!$this->upload->do_upload('file')){
					$this->upload->display_errors();
					return FALSE;
				}else{
					$data = $this->upload->data();
					//Compress Image
					$config['image_library']='gd2';
					$config['source_image']='./img/gambar_artikel/'.$data['file_name'];
					$config['create_thumb']= FALSE;
					$config['maintain_ratio']= TRUE;
					$config['quality']= '60%';
					$config['width']= 800;
					$config['height']= 800;
					$config['new_image']= './image/gambar_artikel/'.$data['file_name'];
					$this->load->library('image_lib', $config);
					$this->image_lib->resize();
					echo base_url().'/image/gambar_artikel/'.$data['file_name'];
				}
			}
		}

}
