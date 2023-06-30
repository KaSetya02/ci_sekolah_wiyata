<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Contact extends CI_Controller{
  function __construct(){
		parent::__construct();
      $this->load->model('M_kontak');
	}
	function index(){
		  $this->load->view('index');
	}

  function kirim_pesan(){
      $nama=htmlspecialchars($this->input->post('xnama',TRUE),ENT_QUOTES);
      $email=htmlspecialchars($this->input->post('xemail',TRUE),ENT_QUOTES);
      $kontak=htmlspecialchars($this->input->post('xphone',TRUE),ENT_QUOTES);
      $pesan=htmlspecialchars($this->input->post('xmessage',TRUE),ENT_QUOTES);
      $this->M_kontak->kirim_pesan($nama,$email,$kontak,$pesan);
      $this->session->set_flashdata('msg','<p><font color="green"><strong> NB: </strong>Pesan Sudah Terkirim. Terima Kasih Telah Menghubungi Kami.</font></p>');
      redirect('home');
  }
}
