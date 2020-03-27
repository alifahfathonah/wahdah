<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kader extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('login_admin') == FALSE) {
            redirect('login');
        }
        $this->load->model('M_kader');
    }

    public function index()
    {
        if ($this->session->userdata('level') == 1) {
            $data['title'] = 'Wahdah Islamiyah Kendari - Data Kader';
            $data['datakader'] = $this->M_kader->tarikdatakader();
            $this->load->view('template/header_admin', $data);
            $this->load->view('daftar_kader_admin', $data);
            $this->load->view('template/footer_admin');
        }
    }
    public function tambahdatakader()
    {
        if ($this->session->userdata('level') == 1) {
            $data['title'] = 'Wahdah Islamiyah Kendari - Tambah Data Kader';
            $this->load->view('template/header_admin', $data);
            $this->load->view('kader_admin');
            $this->load->view('template/footer_admin');
        }
    }
    public function kirim()
    {
        if ($this->session->userdata('level') == 1) {
            $this->form_validation->set_rules('nik', 'NIK', 'required|trim|numeric|xss_clean|max_length[16]');
            $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required|trim|xss_clean');
            $this->form_validation->set_rules('nama_panggilan', 'Nama Panggilan', 'required|trim|xss_clean');
            $this->form_validation->set_rules('nama_kunyah', 'Nama Kunyah', 'required|trim|xss_clean');
            $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required|trim|xss_clean');
            $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required|trim|xss_clean');
            $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required|trim|xss_clean');
            $this->form_validation->set_rules('gol_darah', 'Golongan Darah', 'required|trim|xss_clean');
            $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim|xss_clean');
            $this->form_validation->set_rules('alamat_daerah', 'Alamat Daerah', 'required|trim|xss_clean');
            $this->form_validation->set_rules('suku', 'Suku', 'required|trim|xss_clean');
            $this->form_validation->set_rules('hp1', 'No HP1', 'required|trim|xss_clean');
            $this->form_validation->set_rules('hp2', 'No HP2', 'required|trim|xss_clean');
            $this->form_validation->set_rules('hobby', 'Hobby', 'required|trim|xss_clean');
            $this->form_validation->set_rules('jml_saudara', 'Jumlah Saudara', 'required|trim|xss_clean');
            $this->form_validation->set_rules('anakke', 'Anak Ke', 'required|trim|xss_clean');
            $this->form_validation->set_rules('status_nikah', 'Status Nikah', 'required|trim|xss_clean');
            $this->form_validation->set_rules('bakat', 'Bakat', 'required|trim|xss_clean');
            $this->form_validation->set_rules('email', 'Email', 'valid_email|required|trim|xss_clean');
            $this->form_validation->set_rules('blog', 'Blog', 'required|trim|xss_clean');
            $this->form_validation->set_rules('fb', 'Facebook', 'required|trim|xss_clean');
            $this->form_validation->set_rules('tw', 'Twitter', 'required|trim|xss_clean');
            if ($this->form_validation->run() == FALSE) {
                $this->index();
            } else {
                $this->M_kader->kirim();
                $this->session->set_flashdata('kader', 'Data Kader Berhasil Ditambahkan');
                redirect('kader/tambahdatakader');
            }
        }
    }
}
