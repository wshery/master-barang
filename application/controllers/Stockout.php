<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Stockout extends CI_Controller{
    private $filename = "import_data_stockout";
    public function __construct(){
        parent::__construct();
        $this->load->model('Stockout_model');
        $this->load->model('Masterbarang_model');
        $this->load->model('Lokasi_model');
        $this->load->library('form_validation');
    }

    public function index(){
        
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['stockout'] = $this->Stockout_model->getAllstockout();
        $data['title'] = 'IT IJSM';
        $this->load->view('templates/master_header', $data);
        $this->load->view('superadmin/stockout/index', $data);
        $this->load->view('templates/master_footer');
    }

    public function form(){
      $data = array(); // Buat variabel $data sebagai array

        if (isset($_POST['preview'])) { // Jika user menekan tombol Preview pada form
            // lakukan upload file dengan memanggil function upload yang ada di SiswaModel.php
            $upload = $this->Stockout_model->upload_file($this->filename);

            if ($upload['result'] == "success") { // Jika proses upload sukses
                // Load plugin PHPExcel nya
                include APPPATH . 'third_party/PHPExcel/PHPExcel.php';

                $excelreader = new PHPExcel_Reader_Excel2007();
                $loadexcel = $excelreader->load('excel/'.$this->filename.'.xlsx'); // Load file yang tadi diupload ke folder excel
                $sheet = $loadexcel->getActiveSheet()->toArray(null, true, true, true);

                // Masukan variabel $sheet ke dalam array data yang nantinya akan di kirim ke file form.php
                // Variabel $sheet tersebut berisi data-data yang sudah diinput di dalam excel yang sudha di upload sebelumnya
                $data['sheet'] = $sheet;
            } else { // Jika proses upload gagal
                $data['upload_error'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
            }
        }

        // $data['user'] = $this->db->get_where('user', ['email' =>
        // $this->session->userdata('email')])->row_array();

        // $this->load->view('templates/master_header');
        $data['title'] = 'IT IJSM';
        $this->load->view('superadmin/stockout/form', $data);
        // $this->load->view('templates/master_footer');
    }

    public function import()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        // Load plugin PHPExcel nya
        include APPPATH . 'third_party/PHPExcel/PHPExcel.php';

        $excelreader = new PHPExcel_Reader_Excel2007();
        $loadexcel = $excelreader->load('excel/' . $this->filename . '.xlsx'); // Load file yang telah diupload ke folder excel
        $sheet = $loadexcel->getActiveSheet()->toArray(null, true, true, true);

        // Buat sebuah variabel array untuk menampung array data yg akan kita insert ke 
        $data = array();

        $numrow = 1;
        foreach ($sheet as $row) {
            // Cek $numrow apakah lebih dari 1
            // Artinya karena baris pertama adalah nama-nama kolom
            // Jadi dilewat saja, tidak usah diimport
            if ($numrow > 1) {
                // Kita push (add) array data ke variabel data
                array_push($data, array(
                    'nama_barang' => $row['A'], // Insert data nama dari kolom B di excel
                    'jumlah' => $row['B'], // Insert data jenis kelamin dari kolom C di excel
                    'lokasi' => $row['C'], // Insert data alamat dari kolom D di excel
                    'keterangan' => $row['D'], // Insert data nis dari kolom E di excel
                    'user_session' => $row['E'], // Insert data nis dari kolom F di excel
                    'dateout' => $row['F'], // Insert data nis dari kolom G di excel
                    'divisi' => $row['G'], // Insert data nis dari kolom H di excel
                    'no_suratjalan' => $row['H'], // Insert data nis dari kolom I di excel
                    'nolast_suratjalan' => $row['I'], // Insert data nis dari kolom J di excel
                ));
            }

            $numrow++; // Tambah 1 setiap kali looping
        }

        // Panggil fungsi insert_multiple yg telah kita buat sebelumnya di model
        $this->Stockout_model->insert_multiple($data);

        redirect("stockout/index"); // Redirect ke halaman awal (ke controller siswa fungsi index)
    }

    public function create(){
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['stockout'] = $this->Stockout_model->getAllStockout();
        $data['mbarang'] = $this->Masterbarang_model->getAllMasterbarang();
        $data['lokasi'] = $this->Lokasi_model->getAllLokasi();
        $data['title'] = 'IT IJSM';
        $this->load->view('superadmin/stockout/create', $data);
    }

    public function buat(){
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->Stockout_model->CreateStockout();
        $this->session->set_flashdata('message', '<div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <strong>Notifikasi</strong> Sukses menambah data.
                                    </div>');
        redirect('stockout/index');
    }

    public function createlokasi(){
        $this->form_validation->set_rules('nama_lokasi', 'Lokasi', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <strong>Notifikasi</strong> Gagal menambah data.
                                    </div>');
            $data['title'] = 'IT IJSM';
            $this->load->view('superadmin/stockout/create');
        } else {
            $this->Lokasi_model->CreateLokasi();
            $this->session->set_flashdata('message', '<div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <strong>Notifikasi</strong> Sukses menambah data.
                                    </div>');
            redirect('stockout/modallokasi');
        }
    }

    public function modallokasi()
    {
        $data['title'] = 'IT IJSM';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['lokasi'] = $this->Lokasi_model->getAllLokasi();

        $this->load->view('templates/master_header', $data);
        $this->load->view('superadmin/stockout/create_modal', $data);
        $this->load->view('templates/master_footer');
    }

    public function ngeprint(){
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['stockout'] = $this->Stockout_model->getAllstockout();
        $data['mbarang'] = $this->Masterbarang_model->getAllMasterbarang();
        $data['suratjalan'] = $this->Stockout_model->suratjalan();
        $data['no_surat'] = $this->Stockout_model->no_surat();
        $data['total'] = $this->Stockout_model->total();
        $data['title'] = 'IT IJSM';
        $this->load->view('superadmin/stockout/print', $data);
    }

    public function print_suratjalan(){
        $data['title'] = 'IT IJSM';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['stockout'] = $this->Stockout_model->getAllstockout();
        $data['mbarang'] = $this->Masterbarang_model->getAllMasterbarang();
        $data['suratjalan'] = $this->Stockout_model->suratjalan();
        $data['no_surat'] = $this->Stockout_model->no_surat();
        $data['total'] = $this->Stockout_model->total();
        $data['title'] = 'IT IJSM';
        $this->load->view('superadmin/stockout/print_suratjalan', $data);
    }

    // public function delete($id)
    // {
    //     $this->Stockout_model->HapusStockout($id);
    //     $this->session->set_flashdata('message', '<div class="alert alert-success">
    //                                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    //                                     <strong>Notifikasi</strong> Sukses menghapus data.
    //                                 </div>');
    //     redirect('stockout/index');
    // }

    // public function edit($id)
    // {
    //     $data['user'] = $this->db->get_where('user', ['email' =>
    //     $this->session->userdata('email')])->row_array();
    //     $data['stockout'] = $this->Stockout_model->getStockoutById($id);
    //     $data['mbarang'] = $this->Masterbarang_model->getAllMasterbarang();
    //     $data['lokasi'] = $this->Lokasi_model->getAllLokasi();

    //     $this->form_validation->set_rules('quantity_out', 'Quantity out', 'trim|required|numeric');
    //     // $this->form_validation->set_rules('nolast_suratjalan', 'Nolast Suratjalan', 'trim|required|numeric');
    //     $this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required');
    //     if ($this->form_validation->run() == false) {
    //         $data['title'] = 'IT IJSM';
    //         $this->load->view('templates/master_header', $data);
    //         $this->load->view('superadmin/stockout/edit', $data);
    //         $this->load->view('templates/master_footer');
    //     } else {
    //         $this->Stockout_model->EditStockout();
    //         $this->session->set_flashdata('message', '<div class="alert alert-success">
    //                                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    //                                     <strong>Notifikasi</strong> Sukses mengubah data.
    //                                 </div>');
    //         redirect('stockout/index');
    //     }
    // }

}