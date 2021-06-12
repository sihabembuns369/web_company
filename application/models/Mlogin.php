<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mlogin extends CI_Model {

    public function cek_login($user,$pass)
	{

        $sql = "SELECT * FROM user WHERE username = '$user' AND password = '$pass' ";
        $querySQL = $this->db->query($sql);
        if($querySQL){
            return $querySQL->result();
        }else{
            return 0;
        }
    
    }

    public function admin(){
        $sql = "SELECT * FROM user ";
        $querySQL = $this->db->query($sql);
        if($querySQL){
            return $querySQL->result();
        }else{
            return 0;
        }
    }

    public function artikel()
    {
        $sql = "SELECT * FROM artikel";
        $querySQL = $this->db->query($sql);
        if($querySQL){
            return $querySQL->result();
        }else{
            return 0;
        }
    }
}
