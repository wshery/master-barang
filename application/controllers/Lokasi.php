<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lokasi extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('Lokasi_model');
		$this->load->library('form_validation');
	}

	public function edit($id)
    {
        $data['user'] = $this->db->get_where('user', ['name' =>
        $this->session->userdata('name')])->row_array();
        $data['lokasi'] = $this->Lokasi_model->getLokasiById($id);

        $this->form_validation->set_rules('nama_lokasi', 'lokasi', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('superadmin/lokasi/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Lokasi_model->EditLokasi();
            $this->session->set_flashdata('message', '<div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <strong>Notifikasi</strong> Sukses mengubah data.
                                    </div>');
            redirect('stockin/modallokasi');
        }
    }

    public function delete($id)
    {
        $this->Lokasi_model->HapusLokasi($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success">
                                        <strong>Notifikasi</strong> Sukses menghapus data.
                                    </div>');
        redirect('stockin/modallokasi');
    }
}