<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Supir extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Supir_model');
        $this->load->library('form_validation');
    }

    public function edit($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['supir'] = $this->Supir_model->getSupirById($id);

        $this->form_validation->set_rules('nama_supir', 'Supir', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/master_header');
            $this->load->view('superadmin/supir/edit', $data);
            $this->load->view('templates/master_footer');
        } else {
            $this->Supir_model->EditSupir();
            $this->session->set_flashdata('message', '<div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <strong>Notifikasi</strong> Sukses mengubah data.
                                    </div>');
            redirect('stockout/modalsupir');
        }
    }

    public function delete($id)
    {
        $this->Supir_model->HapusSupir($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <strong>Notifikasi</strong> Sukses menghapus data.
                                    </div>');
        redirect('stockout/modalsupir');
    }
}
