<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengeluar extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('Pengeluar_model');
		$this->load->library('form_validation');
	}

	public function edit($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['pengeluar'] = $this->Pengeluar_model->getPengeluarById($id);

        $this->form_validation->set_rules('nama_pengeluar', 'pengeluar', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/master_header');
            $this->load->view('superadmin/pengeluar/edit', $data);
            $this->load->view('templates/master_footer');
        } else {
            $this->Pengeluar_model->EditPengeluar();
            $this->session->set_flashdata('message', '<div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <strong>Notifikasi</strong> Sukses mengubah data.
                                    </div>');
            redirect('stockout/modalpengeluar');
        }
    }

    public function delete($id)
    {
        $this->Pengeluar_model->HapusPengeluar($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <strong>Notifikasi</strong> Sukses menghapus data.
                                    </div>');
        redirect('stockout/modalpengeluar');
    }
}