<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Sekret extends CI_Model
{
    public function tarikdatasekret()
    {
        $query = $this->db->query("SELECT * FROM tb_profil_sekret");
        return $query->result_array();
    }

    public function kirim()
    {
        $nama_dpd = $this->input->post('nama_dpd', true);
        $alamat_kantor = $this->input->post('alamat_kantor', true);
        $email = $this->input->post('email', true);
        $no_telp = $this->input->post('no_telp', true);
        $tahun_berdiri = $this->input->post('tahun_berdiri', true);
        $status_kantor = $this->input->post('status_kantor', true);
        $plang = $this->input->post('plang', true);
        $komputer = $this->input->post('komputer', true);
        $mobil = $this->input->post('mobil', true);
        $motor = $this->input->post('motor', true);
        $staf_tetap = $this->input->post('staf_tetap', true);
        $sk_pengurus = $this->input->post('sk_pengurus', true);
        $this->load->library('upload');
        $config['upload_path'] = './application/assets/dokumen';
        $config['allowed_types'] = '';
    }
}
