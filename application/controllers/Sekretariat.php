<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sekretariat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('login_admin') == FALSE) {
            redirect('login');
        }
        $this->load->model('M_sekret');
    }

    public function index()
    {
        if ($this->session->userdata('level') == 1) {
            $data['title'] = 'Wahdah Islamiyah Kendari - Profil Sekretariat';
            $data['datasekret'] = $this->M_sekret->tarikdatasekret();
            $this->load->view('template/header_admin', $data);
            $this->load->view('prof_sek_admin', $data);
            $this->load->view('template/footer_admin');
        }
    }

    public function tambah_data()
    {
        if ($this->session->userdata('level') == 1) {
            $this->form_validation->set_rules('nama_dpd', 'Nama DPW', 'required|trim|xss_clean');
            $this->form_validation->set_rules('alamat_kantor', 'Alamat Kantor', 'required|trim|xss_clean');
            $this->form_validation->set_rules('email', 'Email', 'valid_email|required|trim|xss_clean');
            $this->form_validation->set_rules('no_telp', 'No Telpon', 'valid_email|required|trim|xss_clean');
            $this->form_validation->set_rules('tahun_berdiri', 'Tahun Berdiri', 'required|trim|xss_clean');
            $this->form_validation->set_rules('status_kantor', 'Status Kantor', 'required|trim|xss_clean');
            $this->form_validation->set_rules('plang', 'Papan Nama Kantor', 'required|trim|xss_clean');
            $this->form_validation->set_rules('komputer', 'Komputer', 'required|trim|xss_clean');
            $this->form_validation->set_rules('mobil', 'Mobil', 'required|trim|xss_clean');
            $this->form_validation->set_rules('motor', 'Motor', 'required|trim|xss_clean');
            $this->form_validation->set_rules('staf_tetap', 'Staf Tetap', 'required|trim|xss_clean');
            $this->form_validation->set_rules('sk_pengurus', 'SK Kepengurusan', 'required|trim|xss_clean');
            $this->form_validation->set_rules('skt_org', 'SKT Organisasi', 'required|trim|xss_clean');
            if ($this->form_validation->run() == FALSE) {
                $this->index();
            } else {
                $this->M_sekret->kirim();
                $this->session->set_flashdata('sekret', 'Data Sekretariat Berhasil Ditambahkan');
                redirect('sekretariat');
            }
        }
    }
}
