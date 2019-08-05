<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Importexcelstockin_model extends CI_Model
{
    public function view()
    {
        return $this->db->get('stockin')->result(); //tampilkan semua data yang ada di table
    }

    //fungsi untuk melakukan proses upload file
    public function upload_file($filename)
    {
        $this->load->library('upload'); //load library upload

        $config['upload_path'] = './excel/';
        $config['allowed_types'] = 'xlsx';
        $config['mas_size'] = '2048';
        $config['overwrite'] = 'true';
        $config['file_name'] = $filename;

        $this->upload->initialize($config); // Load konfigurasi upload
        if ($this->upload->do_upload('file')) { // Lakukan upload dan cek jika proses upload berhasil
                // Jika berhasil :
                $return = array('result' => 'success', 'file' => $this->upload->data, 'error' => '');
                return $return;
        } else {
            // Jika gagal
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload-> display_error());
            return $return;
        }
    }

    //Buat sebuah fungsi untuk melakukan insert lebih dari 1 data
    public function insert_multiple($data)
    {
        $this->db->insert_batch('stockin', $data);
    }
}