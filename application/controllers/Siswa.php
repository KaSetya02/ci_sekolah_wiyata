<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();

        $this->load->model('Admin_model', 'admin');
        $this->load->library('form_validation');
         $this->load->model('M_siswa');
    }

    public function index()
    {
        $data['title'] = "Siswa";
        $data['siswa'] = $this->admin->get('siswa');
        $this->template->load('templates/dashboard', 'siswa/data', $data);
    }

    private function _validasi()
    {
        $this->form_validation->set_rules('siswa', 'NISN', 'required|trim');
        $this->form_validation->set_rules('nama_siswa', 'Nama Siswa', 'required|trim');
        $this->form_validation->set_rules('gender', 'Jenis Kelamin', 'required|trim');
        $this->form_validation->set_rules('agama', 'Agama', 'required|trim');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required|trim');
        $this->form_validation->set_rules('jurusan', 'Program Keahlian', 'required|trim');
        $this->form_validation->set_rules('no_telp', 'Nomor Telepon', 'required|trim|numeric');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
    }
      private function _config()
    {
        $config['upload_path']      = "./assets/img/avatar";
        $config['allowed_types']    = 'gif|jpg|jpeg|png';
        $config['max_size']         = '2048';
        $config['file_name']         = 'item-'.date('ymd').'-'.substr(md5(rand()),0,10);
        $this->load->library('upload', $config);
    }
     function add(){
            $this->_validasi();
            if ($this->form_validation->run() == false) {
                $data['title'] = "Siswa";
                $this->template->load('templates/dashboard', 'siswa/add', $data);
            } else {
                $config['upload_path'] = './assets/img/avatar/'; //path folder
                $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
                $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

                $this->load->library('upload', $config);
                if(!empty($_FILES['foto']['name']))
                {
                    if ($this->upload->do_upload('foto'))
                    {
                            $gbr = $this->upload->data();
                            //Compress Image
                            $config['image_library']='gd2';
                            $config['source_image']='./assets/images/avatar/'.$gbr['file_name'];
                            $config['create_thumb']= FALSE;
                            $config['maintain_ratio']= FALSE;
                            $config['quality']= '60%';
                            $config['width']= 500;
                            $config['height']= 500;
                            $config['new_image']= './assets/images/avatar/'.$gbr['file_name'];
                            $this->load->library('image_lib', $config);
                            $this->image_lib->resize();

                            $foto=$gbr['file_name'];
                            $siswa=strip_tags($this->input->post('siswa'));
                            $nama_siswa=strip_tags($this->input->post('nama_siswa'));
                            $gender=strip_tags($this->input->post('gender'));
                            $agama=strip_tags($this->input->post('agama'));
                            $kelas=strip_tags($this->input->post('kelas'));
                            $jurusan=strip_tags($this->input->post('jurusan'));
                            $no_telp=strip_tags($this->input->post('no_telp'));
                            $alamat=strip_tags($this->input->post('alamat'));
                            $this->M_siswa->simpan_siswa($siswa,$nama_siswa,$gender,$agama,$kelas,$jurusan,$no_telp,$alamat,$foto);
                            $this->session->set_flashdata('Succes','Data Berhasil Disimpan');
                            redirect('siswa');
                    }else{
                         $this->session->set_flashdata('error', $error);
                         redirect('siswa/add');
                    }
                     
                }else{
                     $siswa=strip_tags($this->input->post('siswa'));
                     $nama_siswa=strip_tags($this->input->post('nama_siswa'));
                     $gender=strip_tags($this->input->post('gender'));
                     $agama=strip_tags($this->input->post('agama'));
                     $kelas=strip_tags($this->input->post('kelas'));
                     $jurusan=strip_tags($this->input->post('jurusan'));
                     $no_telp=strip_tags($this->input->post('no_telp'));
                     $alamat=strip_tags($this->input->post('alamat'));
                    $this->M_siswa->simpan_siswa_tanpa_img($siswa,$nama_siswa,$gender,$agama,$kelas,$jurusan,$no_telp,$alamat);
                    $this->session->set_flashdata('Succes','Data Berhasil Disimpan');
                    redirect('siswa');
                }
            }
                
    }



    public function edit($getId)
    {
        $id = encode_php_tags($getId);
        $this->_validasi();
        $this->_config();
        if ($this->form_validation->run() == false) {
            $data['title'] = "Siswa";
            $data['siswa'] = $this->admin->get('siswa', ['id_siswa' => $id]);
            $this->template->load('templates/dashboard', 'siswa/edit', $data);
        } else {
            $input = $this->input->post(null, true);
        if (empty($_FILES['foto']['name'])) {
                    $update = $this->admin->update('siswa', 'id_siswa', $id, $input);
                    if ($update) {
                        set_pesan('perubahan berhasil disimpan.');
                        redirect('siswa');
                    }else{
                        set_pesan('perubahan tidak disimpan.');
                    }
                    redirect('siswa/edit'.$id);
                } else {
                    if ($this->upload->do_upload('foto') == false) {
                        echo $this->upload->display_errors();
                        die;
                    } else {
                        if ($data['foto'] != null) {
                            $old_image = 'assets/img/avatar/' . $data['foto'];
                           unlink($old_image);
                        }

                        $input['foto'] = $this->upload->data('file_name');
                       $update = $this->admin->update('siswa', 'id_siswa', $id, $input);
                        if ($update) {
                            set_pesan('perubahan berhasil disimpan.');
                            redirect('siswa');
                        } 
                        else {
                            set_pesan('gagal menyimpan perubahan');
                        }
                        redirect('siswa/edit'.$id);
                    }
                }
            }
        }
    public function delete($getId)
    {
        $id = encode_php_tags($getId);
        if ($this->admin->delete('siswa', 'id_siswa', $id)) {
            set_pesan('data berhasil dihapus.');
        } else {
            set_pesan('data gagal dihapus.', false);
        }
        redirect('siswa');
    }
}
