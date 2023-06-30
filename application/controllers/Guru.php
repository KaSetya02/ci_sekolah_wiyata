<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();

        $this->load->model('Admin_model', 'admin');
        $this->load->library('form_validation');
        $this->load->model('M_guru');
    }

    public function index()
    {
        $data['title'] = "Guru";
        $data['guru'] = $this->admin->get('guru');
        $this->template->load('templates/dashboard', 'guru/data', $data);
    }

    private function _validasi()
    {
        $this->form_validation->set_rules('nip', 'NIP', 'required|trim|');
        $this->form_validation->set_rules('nama_guru', 'Nama guru', 'required');
        $this->form_validation->set_rules('gender', 'Jenis Kelamin', 'required|trim');
        $this->form_validation->set_rules('agama', 'Agama', 'required|trim');
        $this->form_validation->set_rules('status', 'Status/Jabatan', 'required|trim');
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
                $data['title'] = "Guru";
                $this->template->load('templates/dashboard', 'guru/add', $data);
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
                            $nip=strip_tags($this->input->post('nip'));
                            $nama_guru=strip_tags($this->input->post('nama_guru'));
                            $gender=strip_tags($this->input->post('gender'));
                            $agama=strip_tags($this->input->post('agama'));
                            $status=strip_tags($this->input->post('status'));
                            $no_telp=strip_tags($this->input->post('no_telp'));
                            $alamat=strip_tags($this->input->post('alamat'));
                            $this->M_guru->simpan_guru($nip,$nama_guru,$gender,$agama,$status,$no_telp,$alamat,$foto);
                            $this->session->set_flashdata('Succes','Data Berhasil Disimpan');
                            redirect('guru');
                    }else{
                         $this->session->set_flashdata('error', $error);
                         redirect('guru/add');
                    }
                     
                }else{
                     $nip=strip_tags($this->input->post('nip'));
                     $nama_guru=strip_tags($this->input->post('nama_guru'));
                     $gender=strip_tags($this->input->post('gender'));
                     $agama=strip_tags($this->input->post('agama'));
                     $status=strip_tags($this->input->post('status'));
                     $no_telp=strip_tags($this->input->post('no_telp'));
                     $alamat=strip_tags($this->input->post('alamat'));
                    $this->M_guru->simpan_guru_tanpa_img($nip,$nama_guru,$gender,$agama,$status,$no_telp,$alamat);
                    $this->session->set_flashdata('Succes','Data Berhasil Disimpan');
                    redirect('guru');
                }
            }
                
    }

    public function edit($getId)
    {
        $id = encode_php_tags($getId);
        $this->_validasi();
        $this->_config();
        if ($this->form_validation->run() == false) {
            $data['title'] = "Guru";
            $data['guru'] = $this->admin->get('guru', ['id_guru' => $id]);
            $this->template->load('templates/dashboard', 'guru/edit', $data);
        } else {
            $input = $this->input->post(null, true);
        if (empty($_FILES['foto']['name'])) {
                    $update = $this->admin->update('guru', 'id_guru', $id, $input);
                    if ($update) {
                        set_pesan('perubahan berhasil disimpan.');
                        redirect('guru');
                    }else{
                        set_pesan('perubahan tidak disimpan.');
                    }
                    redirect('guru/edit'.$id);
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
                       $update = $this->admin->update('guru', 'id_guru', $id, $input);
                        if ($update) {
                            set_pesan('perubahan berhasil disimpan.');
                            redirect('guru');
                        } 
                        else {
                            set_pesan('gagal menyimpan perubahan');
                        }
                        redirect('guru/edit'.$id);
                    }
                }
            }
        }
    public function delete($getId)
    {
        $id = encode_php_tags($getId);
        if ($this->admin->delete('guru', 'id_guru', $id)) {
            set_pesan('data berhasil dihapus.');
        } else {
            set_pesan('data gagal dihapus.', false);
        }
        redirect('guru');
    }
}
