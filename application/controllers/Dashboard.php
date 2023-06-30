<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();

        $this->load->model('Admin_model', 'admin');
    }

    public function index()
    {
        $data['title'] = "Dashboard";
        $data['siswa'] = $this->admin->count('siswa');
        $data['guru'] = $this->admin->count('guru');
        $data['inbox'] = $this->admin->count('inbox');
        $data['user'] = $this->admin->count('user');

        // Line Chart
       

        $this->template->load('templates/dashboard', 'dashboard', $data);
    }
}
