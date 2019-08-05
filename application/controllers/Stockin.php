<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Stockin extends CI_Controller
{
    private $filename = "import_data";
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Stockin_model');
        $this->load->model('Lokasi_model');
        $this->load->model('Masterbarang_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['title'] = 'Stock Masuk | IT IJSM';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $data['stockin'] = $this->Stockin_model->getAllStockin();
        $data['stkbrg'] = $this->Stockin_model->GetTotal();
        $data['mbarang'] = $this->Masterbarang_model->getAllMasterBarang();
        $data['lokasi'] = $this->Lokasi_model->getAllLokasi();
        // $data['l'] = $this->Lokasi_model->getAllLokasi();

        $this->form_validation->set_rules('nama_barang', 'lokasi', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('superadmin/stockin/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Stockin_model->CreateStockin();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="success">Success Insert New Kategori!</div>');
            redirect('stockin/index');
        }
    }

    public function form()
    {
        $aku = $this->session->userdata('name');
        $aku['title'] = "Form Import | Export";
        $data = array(); //buat variabel $data sebagai array

        if (isset($_POST['preview'])) { // Jika user menekan tombol Priview pada form  
            // Lakukan upload file dengan memanggil funtion yang ada di Stockin_model.php
            $upload = $this->Stockin_model->upload_file($this->filename);

            if ($upload['result'] == "success") { // Jika proses upload succes
                //load plugin PHPExcelnya 
                include APPPATH . 'third_party/PHPExcel/PHPExcel.php';

                $excelreader = new PHPExcel_reader_excel2007();
                $loadexcel = $excelreader->load('excel/' . $this->filename . '.xlsx'); // Load file yang tadi di upload ke folder excel.
                $sheet = $loadexcel->getActiveSheet()->toArray(null, true, true, true);

                // Masukan variabel sheet ke dalam array data yang nantinya akan di kirim ke file form.php
                // Variabel $sheet tersebut berisi data-data yang sudah di input di dalam excel yang sudah di upload sebelumnya
                $data['sheet'] = $sheet;
            } else { // Jika proses upload gagal
                $data['upload_error'] = $upload['error']; //Ambil pesan error uploadnya untuk dikirim ke file for dan ditampilkan   
            }
        }

        $this->load->view('templates/header', $aku);
        // $this->load->view('templates/topbar');
        // $this->load->view('templates/sidebar');
        $this->load->view('superadmin/stockin/form', $data, $aku);
        $this->load->view('templates/footer');
    }

    public function import()
    {
        // Load plugin PHPExcelnya
        include APPPATH . 'third_party/PHPExcel/PHPExcel.php';

        $excelreader = new PHPExcel_Reader_Excel2007();
        $loadexcel = $excelreader->load('excel/' . $this->filename . '.xlsx');
        $sheet = $loadexcel->getActiveSheet()->toArray(null, true, true, true);

        //Buat sebuah variabel array untuk menampung array data yang akan kita insert ke database
        $data = array();

        $numrow = 1;
        foreach ($sheet as $row) {
            // Cek $numrow apakah lebih dari 1
            //Artinya karena baris pertama adalah nama-nama kolom
            // Jadi dilewat saja, Tidak usah diimport
            if ($numrow > 1) {
                //Kita push (add) array data ke varibel data
                array_push($data, array(
                    'tanggal_masuk' => $row['A'], // Insert data dari kolom A di excel
                    'nama_barang' => $row['B'], // Insert data dari kolom B di excel
                    'jumlah_masuk' => $row['C'], // Insert data dari kolom A C excel
                    'keterangan' => $row['F'], // Insert data dari kolom D di excel
                    'lampiran' => $row['G'], // Insert data dari kolom E di excel
                    'user_session' => $row['H'], // Insert data dari kolom F di excel

                ));
            }

            $numrow++; // Tambah 1 setiap kali looping
        }

        // Panggil fungsi insert_multiple yang telah kita buat sebelumnya di model
        $this->Stockin_model->insert_multiple($data);

        redirect("stockin/index"); //Redirect ke halaman awal 
    }
    public function create()
    {
        $data['title'] = ' Create Stock Masuk | IT IJSM';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['lokasi'] = $this->Lokasi_model->getAllLokasi();
        $data['mbarang'] = $this->Masterbarang_model->getAllMasterbarang();
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'trim|required');
        $this->form_validation->set_rules('quantity_out', 'Jumlah Barang', 'trim|required');
        $this->form_validation->set_rules('lokasi', 'Lokasi', 'trim|required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required');
        // $this->load->view('templates/master_header', $data);
        $this->load->view('superadmin/stockin/create', $data);
        // $this->load->view('templates/sidebar', $data);
        // $this->load->view('templates/master_footer', $data);
    }

    function add()
    {
        $this->Stockin_model->CreateStockin();
        // $this->session->set_flashdata('message', '<div class="alert alert-success" role="success">Success Insert New Barang!</div>');

        // redirect('stockin/index');
    }

    public function createlokasi()
    {
        $data['title'] = ' Add Stock Masuk | IT IJSM';
        $data['user'] = $this->db->get_where('user', ['name' =>
        $this->session->userdata('name')])->row_array();
        $data['lokasi'] = $this->Lokasi_model->getAllLokasi();

        $this->Lokasi_model->CreateLokasi();
        $this->session->set_flashdata('message', '<div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <strong>Notifikasi</strong> Sukses menambah data.
                                    </div>');
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('superadmin/stockin/create_modal', $data);
        $this->load->view('templates/footer');
        redirect('stockin/create');
    }

    public function modallokasi()
    {
        $data['title'] = ' Add Stock Masuk | IT IJSM';
        $data['user'] = $this->db->get_where('user', ['name' =>
        $this->session->userdata('name')])->row_array();
        $data['lokasi'] = $this->Lokasi_model->getAllLokasi();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('superadmin/stockin/create_modal', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {
        $data['title'] = ' Edit Stock Masuk | IT IJSM';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['stockin'] = $this->Stockin_model->getStockinById($id);
        $data['lokasi'] = $this->Lokasi_model->getAllLokasi();
        $data['mbarang'] = $this->Masterbarang_model->getAllMasterbarang();

        $this->form_validation->set_rules('quantity_out', 'Quantity Out', 'trim|required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            // $this->load->view('templates/sidebar', $data);
            $this->load->view('superadmin/stockin/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Stockin_model->EditStockin();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="success">Success Edit Barang!</div>');
            redirect('stockin/index');
        }
    }

    public function delete($id)
    {
        $this->Stockin_model->HapusStockin($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="success">Success Delete Barang!</div>');
        redirect('stockin/index');
    }
}
