<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Login extends CI_Model
{
    public function cek_user()
    {
        $user = $this->input->post('username', true);
        $password = md5($this->input->post('password', true));
        $this->db->where('username', $user);
        $this->db->where('password', $password);
        return $this->db->get('tb_user', 1);
    }
}
