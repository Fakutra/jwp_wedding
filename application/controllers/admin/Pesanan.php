<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesanan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if (empty($this->session->userdata('username'))) {
            $this->session->set_flashdatag('message', '<div class="alert alert-danger" role="alert"><strong>Upss.. </strong>
            Anda tidak memiliki akses, silahkan Login</div>');
            redirect('login');
        }
        $this->load->model('pesanan_model');
    }
	public function index()
	{
        $data = array(
            'title' => 'JeWePe Wedding Orginizer',
            'page' => 'admin/pesanan',
            'getAllPesanan' => $this->pesanan_model->get_all_pesanan()->result()
        );
        
		$this->load->view('admin/template/main', $data);
	}

    public function updateStatus() 
    {
        if ($this->input->get()) {
            $get = $this->input->get();

            $cek_data = $this->pesanan_model->get_pesanan_by_id($get['id'])->num_rows();

            if ($cek_data > 0) {

                $datetime = date("Y-m-d H:i:s");
                $data = array(
                    'status' => $get['status'],
                    'user_id' => $this->session->userdata('user_id'),
                    'update_at' => $datetime,
                );

                $update = $this->pesanan_model->update($get['id'], $data);

                if ($update) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success </strong>Status Berhasil Di Ubah!"
                <i class="remove ti-close" data-dismiss="alert"></i></div>');
                    redirect('admin/Pesanan');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Success </strong>Status Gagal Di Ubah!"
                <i class="remove ti-close" data-dismiss="alert"></i></div>');
                    redirect('admin/Pesanan');
                }
            }
        } else {
            redirect('admin/Pesanan');
        }
    }

    public function delete()
    {
        if (!empty($this->input->get('id', true))) {

            $delete = $this->pesanan_model->delete_by_id($this->input->get('id', true));

            if ($delete) {
                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success </strong>Data Berhasil Di Hapus!"
            <i class="remove ti-close" data-dismiss="alert"></i></div>');
                redirect('admin/Pesanan');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Success </strong>Data Gagal Di Ubah!"
            <i class="remove ti-close" data-dismiss="alert"></i></div>');
                redirect('admin/Pesanan');
            }
        } else {
            redirect('admin/Pesanan');
        }
    }
}