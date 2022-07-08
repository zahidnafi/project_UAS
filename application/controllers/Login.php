<?php
class Login extends CI_Controller 
{
    function login()
    {
        if($this->session->has_userdata('USERNAME')) {
            redirect(base_url()."index.php/kegiatan");
        }
        $this->load->view('login/login');
    }

    function prosesLogin()
    {
        $this->load->model('login_model','login');

        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $row =$this->login->authentication($username,$password);
        if(isset($row)){
            $this->session->set_userdata('USERNAME',$row->username);
            $this->session->set_userdata('ROLE',$row->role);
            $this->session->set_userdata('USER',$row);
            redirect(base_url()."index.php/kegiatan");
        }
        $this->session->set_flashdata('message','<p class="text-danger text-center" role="alert">Sign In Anda Salah ! Silakan Sign In Kembali</p>');
        redirect(base_url()."index.php/login/login?status=f");
        
    }

    function register()
    {
        if($this->session->has_userdata('USERNAME')) {
            redirect(base_url()."index.php/kegiatan");
        }
        $this->load->view('login/register');
    }

    function prosesRegister()
    {
        $this->load->model('login_model','register');

        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $email = $this->input->post('email');
        $role = $this->input->post('role'); 

        $data[] = $username;
        $data[] = $password;
        $data[] = $email;
        $data[] = date('Y-m-d H:i:s');
        $data[] = NULL;
        $data[] = 1;
        $data[] = $role;

        $this->register->simpan($data);
        $this->session->set_flashdata('message','<p class="text-success text-center" role="alert">Registrasi Anda Berhasil ! Silakan Sign In</p>');
        redirect(base_url()."index.php/login/register");
    }

    function logout()
    {
        $this->session->set_userdata('USERNAME');
        $this->session->set_userdata('ROLE');
        $this->session->set_userdata('USER');
        $this->session->set_flashdata('message','<p class="text-success text-center" role="alert">Anda Telah Logout !</p>');
        redirect(base_url()."index.php/login/login");
    }
}