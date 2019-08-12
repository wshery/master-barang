    <?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class Masterbarang_model extends CI_Model
    {
        // private $_table = "mbarang";

        // public $id;

        public function getAllMasterbarang()
        {
            // return $this->db->get('mbarang')->result_array();
            // $this->db->select("*");
            // $this->db->from("mbarang");
            // $this->db->join("kategori", "mbarang.id_kategori = kategori.id");
            // $this->db->join("satuan", "mbarang.id_satuan = satuan.id");
            $query = $this->db->get('mbarang')->result_array();
            return $query;
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

        // Buat sebuah fungsi untuk melakukan insert lebih dari 1 data
        public function insert_multiple($data)
        {

            $this->db->insert_batch('mbarang', $data);
        }

        public function CreateMasterbarang()
        {
            $kode_barang = $this->input->post('kode_barang');
            //cek kode barang ada atau tidak
            $cek = $this->db->query("select kode_barang from mbarang where kode_barang like '%" . $kode_barang . "%' ");
            //ada
            if ($cek->num_rows() > 0) {
                //ambil kode barang
                $getkode = $this->db->query("select * from mbarang where kode_barang like '%" . $kode_barang . "%' order by kode_barang desc limit 1")->result();
                //foreach data
                foreach ($getkode as $a) { }
                if (strlen($kode_barang) == 4) {
                    //substring ambil variabel awal
                    $b = substr($a->kode_barang, 0, 4);
                    //substring ambil variabel terakhir
                    $z = substr($a->kode_barang, -1);

                    $c = $z + 1;

                    //variabel terakhir (1) + 1
                    $kodejadi = $b . "00" . $c;
                } else {
                    //substring ambil variabel awal
                    $b = substr($a->kode_barang, 0, 3);
                    //substring ambil variabel terakhir
                    $z = substr($a->kode_barang, -1);

                    $c = $z + 1;

                    //variabel terakhir (1) + 1
                    $kodejadi = $b . "00" . $c;
                }
            } else {
                error_reporting(0);
                $x = substr($kode_barang, 0, 4);

                $c = substr($kode_barang, -1) + 1;

                $kodejadi = $x . "00" . $c;
            }
            // $kode_akurat = $this->input->post('kode_akurat');
            $nama_barang = $this->input->post('nama_barang');
            $kategori = $this->input->post('kategori');
            $kondisi_barang = $this->input->post('kondisi_barang');
            $nomor_serial = $this->input->post('nomor_serial');
            $nomor_produk = $this->input->post('nomor_produk');
            $harga = $this->input->post('harga');
            $keterangan_barang = $this->input->post('keterangan_barang');
            $batas = $this->input->post('batas');
            $satuan = $this->input->post('satuan');
            $photo = $_FILES['photo']['name'];

            // $this->form_validation->set_rules('kode_akurat', 'Kode Akurat', 'trim|required');
            $this->form_validation->set_rules('nama_satuan', 'Satuan', 'trim|required');
            $this->form_validation->set_rules('kode_barang', 'Kode Barang', 'trim|required');
            $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'trim|required');
            $this->form_validation->set_rules('nomor_serial', 'Nomor Serial', 'trim|required');
            $this->form_validation->set_rules('nomor_produk', 'Nomor Produk', 'trim|required');
            $this->form_validation->set_rules('batas', 'Batas Peringatan', 'trim|required|numeric');
            $this->form_validation->set_rules('harga', 'Harga', 'trim|required|numeric');

            if ($photo = '') { } else {
                $config['upload_path'] = './image';
                $config['allowed_types'] = 'jpg|gif|png';

                $this->load->library('upload', $config);
                $photo = $this->upload->data('file_name');

                if ($this->upload->do_upload('photo')) {
                    $photo = $this->upload->data('file_name');
                } else { }

                $data = array(
                    'kode_barang' => $kodejadi,
                    // 'kode_akurat' => $kode_akurat,
                    'nama_barang' => $nama_barang,
                    'nama_kategori' => $kategori,
                    'kondisi_barang' => $kondisi_barang,
                    'nomor_serial' => $nomor_serial,
                    'nomor_produk' => $nomor_produk,
                    'harga' => $harga,
                    'keterangan_barang' => $keterangan_barang,
                    'batas' => $batas,
                    'nama_satuan' => $satuan,
                    'photo' => $photo
                );
                // print_r($data);

                $this->db->insert('mbarang', $data);
            }
        }

        public function getMasterbarangById($id)
        {
            return $this->db->get_where('mbarang', ['id' => $id])->row_array();
        }

        public function EditMasterbarang()
        {
            $id = $this->input->post('id');

            $kode_barang = $this->input->post('kode_barang');
            $nama_barang = $this->input->post('nama_barang');
            $kategori = $this->input->post('kategori');
            $kondisi_barang = $this->input->post('kondisi_barang');
            $nomor_serial = $this->input->post('nomor_serial');
            $nomor_produk = $this->input->post('nomor_produk');
            $harga = $this->input->post('harga');
            $keterangan_barang = $this->input->post('keterangan_barang');
            $batas = $this->input->post('batas');
            $satuan = $this->input->post('satuan');
            $photo = $_FILES['photo']['name'];

            if ($photo = '') { } else {
                $config['upload_path'] = './image';
                $config['allowed_types'] = 'jpg|gif|png';

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('photo')) {
                    $photo = $this->upload->data('file_name');
                } else {
                    $photo = $this->upload->data('file_name');
                }
                $data = array(
                    'kode_barang' => $kode_barang,
                    'nama_barang' => $nama_barang,
                    'nama_kategori' => $kategori,
                    'kondisi_barang' => $kondisi_barang,
                    'nomor_serial' => $nomor_serial,
                    'nomor_produk' => $nomor_produk,
                    'harga' => $harga,
                    'keterangan_barang' => $keterangan_barang,
                    'batas' => $batas,
                    'nama_satuan' => $satuan,
                    'photo' => $photo
                );
                $this->db->where('id', $id);
                $this->db->update('mbarang', $data);
            }
        }

        public function HapusMasterBarang($id)
        {
            // $this->db->where('id', $id);
            $this->db->delete('mbarang', ['id' => $id]);
        }
    }
