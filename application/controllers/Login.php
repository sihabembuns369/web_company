<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct(){
        parent::__construct();
        // $this->load->library('form_validation');

    }

	public function index(){
        $data['title']="halaman login";
        $this->load->view('home/header',$data);
        $this->load->view('login/login');

       
        // $this->form_validation->set_rules('name','Name','required|trim');
        // $this->form_validation->set_rules('email','Email','required|trim|valid_email');
        // $this->form_validation->set_rules('password1','Password','required|trim|min_length[3]|matches[password2]');
        // $this->form_validation->set_rules('password2','Password','required|trim|matches[password1]');

        // if($this->form_validation->run() == false){
        // }
    }
        
    public function proseslogin_admin()
        {
        $this->load->model('Mlogin');

            
            //echo "halaman admin";
            $user=$this->input->post('username');
            $pass=$this->input->post('password');
            // echo $user;
            $cek= $this->Mlogin->cek_login($user, $pass);
        // $cek['dt'] = $this->Mlogin->cek_login();

            if (is_array($cek)) {  
                if (count($cek) > 0) {  
                    foreach ($cek as $k) {
                        $email = $k->email;
                        $user = $k->username;
                }
                $this->session->set_userdata('username', $email );
                // var_dump($cek);
                    redirect('index.php/admin ');
                    // redirect($cek);
            } else {
                redirect('index.php/login/');
                    echo ("akun tidak di temukan");
            }
                                           
        } else {
                echo ("akun tidak di temukan");
        }
        }
        

// public function login(){
//     $data['title']="halaman login";
//         $this->load->view('home/header',$data);
//         $this->load->view('login/login');
// } 
}