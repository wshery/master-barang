<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Stockin_model extends CI_Model
{
    public function getAllStockin()
    {
        // $this->db->select('stockin.*, mbarang.*,user.name as name, mbarang.nama_barang as nama_barang');
        // $this->db->join('mbarang','mbarang.id = stockin.kode_barang');
        // $this->db->join('user','user.id = stockin.id_user');
        // $this->db->join('lokasi','lokasi.id = stockin.id_lokasi');
        return $this->db->get('stockin')->result_array();
    }
    public function GetTotal()
    {
        $stkbrg = $this->db->query("SELECT stockin.`nama_barang` AS nama_barangs, SUM(stockin.jumlah_masuk) AS total FROM stockin GROUP BY stockin.`nama_barang`");
        return $stkbrg->result();
    }

    // Fungsi untuk melakukan proses upload file
    public function upload_file($filename)
    {
        $this->load->library('upload'); // Load librari upload
        $config['upload_path'] = './excel/';
        $config['allowed_types'] = 'xlsx';
        $config['max_size']    = '2048';
        $config['overwrite'] = true;
        $config['file_name'] = $filename;
        $this->upload->initialize($config); // Load konfigurasi uploadnya
        if ($this->upload->do_upload('file')) { // Lakukan upload dan Cek jika proses upload berhasil
            // Jika berhasil :
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
            return $return;
        } else {
            // Jika gagal :
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
            return $return;
        }
    }

    public function insert_multiple($data)
    {
        $this->db->insert_batch('stockin', $data);
    }

    public function CreateStockin()
    {
        if ($lampiran = '') { } else {
            $config['upload_path'] = './image';
            $config['allowed_types'] = 'jpg|gif|png';
            $this->load->library('upload', $config);
            $lampiran = $this->upload->data('file_name');
            if (!$this->upload->do_upload('lampiran')) {
                echo "download gagal";
                die();
            } else {
                $lampiran = $this->upload->data('file_name');
            }
            for ($count = 0; $count < count($_POST['nama_barang']); $count++) {
                //post
                $nama_barang = $_POST['nama_barang'][$count];
                $jumlah_masuk = $_POST['quantity_out'][$count];
                $lokasi = $this->input->post('lokasi');
                $keterangan = $this->input->post('keterangan');
                $lampiran = $_FILES['lampiran']['name'];
                $tgl = date('d/m/Y');
                $user_ses = $this->session->userdata('role');

                // $q_unit = $this->db->query("SELECT satuan FROM mbarang WHERE nama_barang='$nama_barang' ")->result();
                // foreach ($q_unit as $key) { }
                $data = array(
                    //'unit' => $key->satuan,
                    'nama_barang' => $nama_barang,
                    'jumlah_masuk' => $jumlah_masuk,
                    'lokasi' => $lokasi,
                    'keterangan' => $keterangan,
                    'lampiran' => $lampiran,
                    'tanggal_masuk' => $tgl,
                    'user_session' => $user_ses
                );

                $this->db->insert('stockin', $data);
            }
            redirect('stockin/index');
        }
    }

    public function getStockinById($id)
    {
        return $this->db->get_where('stockin', ['id' => $id])->row_array();
    }

    public function EditStockin()
    {
        $id = $this->input->post('id');

        $nama_barang = $this->input->post('nama_barang');
        $jumlah_masuk = $this->input->post('quantity_out');
        $lokasi = $this->input->post('lokasi');
        $keterangan = $this->input->post('keterangan');
        $lampiran = $_FILES['lampiran']['name'];
        $tgl = date('d/m/Y');
        $user_ses = $this->session->userdata('role');


        if ($lampiran = '') { } else {
            $config['upload_path'] = './image';
            $config['allowed_types'] = 'jpg|gif|png';
            $this->load->library('upload', $config);
            $lampiran = $this->upload->data('file_name');

            if (!$this->upload->do_upload('lampiran')) {
                echo "download gagal";
            } else {
                $lampiran = $this->upload->data('file_name');
            }

            $data = array(

                'nama_barang' => $nama_barang,
                'jumlah_masuk' => $jumlah_masuk,
                'lokasi' => $lokasi,
                'keterangan' => $keterangan,
                'lampiran' => $lampiran,
                'tanggal_masuk' => $tgl,
                'user_session' => $user_ses
            );

            //print_r($data);

            $this->db->where('id', $id);
            $this->db->update('stockin', $data);
        }
    }



    // public function EditStockin()
    // {
    //     $id= $this->input->post('id');
    //     $id_barang= $this->input->post('id_barang');
    //     $nama_barang= $this->input->post('nama_barang');
    //     $jumlah_masuk= $this->input->post('jumlah_masuk');
    //     $lokasi= $this->input->post('lokasi');
    //     $keterangan= $this->input->post('keterangan');
    //     $lampiran = $this->_uploadImage();

    //         $data = array(
    //             'id_barang' => $id_barang,
    //             'nama_barang' => $nama_barang,
    //             'jumlah_masuk' => $jumlah_masuk,
    //             'lokasi' => $lokasi,
    //             'keterangan' => $keterangan,
    //             'lampiran' => $lampiran
    //         );
    //         $this->db->where('id', $id);
    //         $this->db->update('stockin', $data);
    // }

    public function HapusStockin($id)
    {
        $this->db->delete('stockin', ['id' => $id]);
    }

    public function _uploadImage()
    {
        $config['upload_path'] = './assets/images/upload/lampiran';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name'] = $this->id;
        $config['overwrite'] = true;
        $config['max_size'] = 1024;
        // $config['max_width'] = 1024;
        // $config['max_height'] = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('lampiran')) {
            return $this->upload->data("file_name");
        }

        return "default.jpg";
    }
}
