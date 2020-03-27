<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Kader extends CI_Model
{
    public function tarikdatakader()
    {
        $query = $this->db->query("SELECT * FROM tb_profile");
        return $query->result_array();
    }
    public function kirim()
    {
        $nik = $this->input->post('nik', true);
        $nama = $this->input->post('nama_lengkap', true);
        $nama_p = $this->input->post('nama_panggilan', true);
        $nama_k = $this->input->post('nama_kunyah', true);
        $tempat_lahir = $this->input->post('tempat_lahir', true);
        $tgl_lahir = $this->input->post('tgl_lahir', true);
        $jenis_kelamin = $this->input->post('jenis_kelamin', true);
        $gol_darah = $this->input->post('gol_darah', true);
        $alamat = $this->input->post('alamat', true);
        $alamat_d = $this->input->post('alamat_daerah', true);
        $suku = $this->input->post('suku', true);
        $hp1 = $this->input->post('hp1', true);
        $hp2 = $this->input->post('hp2', true);
        $hobby = $this->input->post('hobby', true);
        $jml_saudara = $this->input->post('jml_saudara', true);
        $anakke = $this->input->post('anakke', true);
        $status_nikah = $this->input->post('status_nikah', true);
        $bakat = $this->input->post('bakat', true);
        $email = $this->input->post('email', true);
        $blog = $this->input->post('blog', true);
        $fb = $this->input->post('fb', true);
        $tw = $this->input->post('tw', true);
        $this->load->library('upload');
        $config['upload_path'] = './templates/images/profile';
        $config['allowed_types'] = 'jpg|png|jpeg|PNG|JPG|JPEG';
        $config['max_size'] = '2048';  //2MB max
        $config['file_name'] = $_FILES['profileImage']['name'];
        $this->upload->initialize($config);
        if (!empty($_FILES['profileImage']['name'])) {
            if ($this->upload->do_upload('profileImage')) {
                $foto = $this->upload->data();
                $data = [
                    'nik' => $nik,
                    'nama_lengkap' => $nama,
                    'nama_panggilan' => $nama_p,
                    'nama_kunyah' => $nama_k,
                    'tempat_lahir' => $tempat_lahir,
                    'tanggal_lahir' => $tgl_lahir,
                    'jenis_kelamin' => $jenis_kelamin,
                    'gol_darah' => $gol_darah,
                    'alamat' => $alamat,
                    'suku' => $suku,
                    'alamat_daerah' => $alamat_d,
                    'no_hp1' => $hp1,
                    'no_hp2' => $hp2,
                    'hobby' => $hobby,
                    'jml_sdr' => $jml_saudara,
                    'anak_ke' => $anakke,
                    'status_nikah' => $status_nikah,
                    'bakat' => $bakat,
                    'email' => $email,
                    'blog' => $blog,
                    'facebook' => $fb,
                    'twitter' => $tw,
                    'foto' => $_FILES['profileImage']['name']
                ];
                $this->db->insert('tb_profile', $data);
            } else {
                die("gagal upload");
            }
        } else {
            echo "tidak masuk";
        }
    }
}
