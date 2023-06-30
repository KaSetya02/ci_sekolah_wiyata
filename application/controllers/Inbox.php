<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Inbox extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();

        $this->load->model('Admin_model', 'admin');
        $this->load->model('M_kontak', 'admin');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = "Inbox";
        $data['inbox'] = $this->admin->get('inbox');
        $this->template->load('templates/dashboard', 'inbox/data', $data);
    }

   
    public function delete($getId)
    {
        $id = encode_php_tags($getId);
        if ($this->admin->delete('inbox', 'inbox_id', $id)) {
            set_pesan('data berhasil dihapus.');
        } else {
            set_pesan('data gagal dihapus.', false);
        }
        redirect('inbox');
    }
}
