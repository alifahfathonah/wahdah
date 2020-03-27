<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'xss_clean|required|trim');
        $this->form_validation->set_rules('password', 'Password', 'xss_clean|required|trim');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login');
        } else {
            $valid = $this->M_login->cek_user();
            if ($valid->num_rows() > 0) {
                $data = $valid->row_array();
                $ses_data = [
                    'id' => $data['id_user'],
                    'username' => $data['username'],
                    'password' => $data['password'],
                    'level' => $data['level'],
                    'login_admin' => true
                ];
                $this->session->set_userdata($ses_data);
                if ($data['level'] == 1) {
                    redirect('home');
                }
            } else {
                $this->session->set_flashdata('err', 'Username atau password salah!');
                redirect('login');
            }
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('password');
        $this->session->unset_userdata('login_admin');
        session_destroy();
        redirect('login');
    }
}
