<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Martikel extends CI_Model {

    public function artikel($judul, $isi, $tanggal,$gambar)
    {
        // menambahkan data melalui parameter yang telah dikirim
        $sql = "INSERT INTO artikel(`id_artikel`,`judul`, `isi`, `gambar`, `tanggal`) VALUES ('NULL','$judul','$isi', '$gambar','$tanggal')";
        // code untuk memanggil pada query di database sesuai variabel $sql
        $query = $this->db->query($sql);

        // jika hasilnya berhasil disimpan
        if ($query) {
            // ini yang akan dijalankan hasilnya 1
            return 1;
        } else {
            return 0;
        }
    }
	
}
