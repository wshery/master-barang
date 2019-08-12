<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Stockout_model extends CI_Model
{
    public function getAllstockout()
    {
        // pengurutan berdasarkan divisi
        $user_session = $this->session->userdata('email');
        $d = $this->db->query("SELECT * FROM user WHERE email='$user_session' ")->result();
        foreach ($d as $v) { }
        $divisi = $v->divisi;

        $query = $this->db->query("SELECT DISTINCT(no_suratjalan),kode_barang,nama_barang,satuan,jumlah,lokasi,keterangan,pengeluar,user_session,dateout,supir,divisi,nolast_suratjalan FROM stockout  WHERE divisi='$divisi' GROUP BY no_suratjalan ")->result_array();
        return $query;
    }

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
        $this->db->insert_batch('stockout', $data);
    }

    public function getNamaBarang()
    {
        $query = $this->db->query("SELECT DISTINCT(nama_barang)
        FROM stockin")->result();
        return $query;
    }

    public function CreateStockout()
    {
        $lokasi = $this->input->post('lokasi');
        $pengeluar = $this->input->post('pengeluar');
        $supir = $this->input->post('supir');
        $keterangan = $this->input->post('keterangan');
        $user_session = $this->session->userdata('email');
        $dateout = date('d/m/Y');

        $d = $this->db->query("SELECT * FROM user WHERE email='$user_session' ")->result();
        foreach ($d as $v) { }
        $divisi = $v->divisi;
        $tanggal = date('d');
        $bulan = date('m');

        $cek = $this->db->query('select * from stockout order by id_out desc limit 1')->result_array();
        foreach ($cek as $p) {
            $ex = explode('/', $p['nolast_suratjalan']);
            $ambilBulan = explode('/', $p['dateout']);  // ambil bulan si tanggal keluar atau tanggal dibuat nya
        }
        if ($bulan != $ambilBulan[1] && $ex[0] != '01') {
            $nolast_suratjalan = '01';
        } else {
            $nolast_suratjalan = sprintf("%02d", $ex[0] + 1);
        }

        $b = 'IJSM';
        $c = array('', 'I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX', 'X', 'XI', 'XII');
        $d = date('Y');
        $no_suratjalan = $divisi . '/' . $b . '/' . $c[date('n')] . '/' . $d . '/' . $nolast_suratjalan;

        for ($count = 0; $count < count($_POST['nama_barang']); $count++) {
            $nama_barang = $_POST['nama_barang'][$count];
            $jumlah = $_POST['quantity_out'][$count];

            $kd = $this->db->query("SELECT * FROM stockin WHERE nama_barang='$nama_barang'")->result();
            foreach ($kd as $kdb) { }
            $kode_barang = $kdb->kode_barang;

            $sat = $this->db->query("SELECT * FROM stockin WHERE nama_barang='$nama_barang'")->result();
            foreach ($sat as $satu) { }
            $satuan = $satu->unit;

            $stk = $this->db->query("SELECT nama_barang, sum(jumlah_masuk) as jml from stockin
                where nama_barang like '%" . $_POST['nama_barang'][$count] . "%'
                group by nama_barang ")->result();
            foreach ($stk as $key) { }

            $jum = $this->db->query("SELECT nama_barang, sum(jumlah)+('$jumlah') as jumlah from stockout
                where nama_barang like '%" . $_POST['nama_barang'][$count] . "%'
                group by nama_barang ")->result();
            foreach ($jum as $juml) { }

            if ($key->jml < $jumlah) {
                $this->session->set_flashdata('message', '<div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <strong>Warning</strong> Jumlah keluar melebihi jumlah masuk.
                                    </div>');
                redirect('stockout/create');
            } else {
                if ($key->jml < $juml->jumlah) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <strong>Warning</strong> Jumlah keluar melebihi jumlah masuk.
                                    </div>');
                    redirect('stockout/create');
                } else {
                    if ($jumlah == 0) {
                        $this->session->set_flashdata('message', '<div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <strong>Warning</strong> Jumlah Tidak boleh nol.
                                    </div>');
                        redirect('stockout/create');
                    } else {
                        $data = array(
                            'kode_barang' => $kode_barang,
                            'nama_barang' => $nama_barang,
                            'satuan' => $satuan,
                            'jumlah' => $jumlah,
                            'lokasi' => $lokasi,
                            'keterangan' => $keterangan,
                            'pengeluar' => $pengeluar,
                            'user_session' => $user_session,
                            'dateout' => $dateout,
                            'supir' => $supir,
                            'divisi' => $divisi,
                            'no_suratjalan' => $no_suratjalan,
                            'nolast_suratjalan' => $nolast_suratjalan
                        );
                        $this->db->insert('stockout', $data);
                    }
                }
            }
        }
    }

    public function suratjalan()
    {

        $id = $this->input->get('id', TRUE);
        $query = $this->db->query(
            "
        SELECT *
        FROM stockout
        WHERE stockout.`no_suratjalan`='$id'"
        )->result_array();
        return $query;
    }

    public function no_surat()
    {
        $id = $this->input->get('id', TRUE);
        $query = $this->db->query("SELECT DISTINCT(no_suratjalan),stockout.*,stockin.`unit`
        FROM stockout 
        JOIN stockin ON stockout.`kode_barang`=stockin.`kode_barang`
        WHERE stockout.`no_suratjalan`='$id'  LIMIT 1 ")->result_array();
        return $query;
    }

    // public function total(){
    //     $id=$this->input->get('id', TRUE);
    //     $query = $this->db->query("SELECT
    //     SUM(REPLACE(mbarang.`harga`,'Rp. ','')*(stockout.`jumlah`))AS total
    //     FROM mbarang
    //     INNER JOIN stockout ON stockout.`nama_barang`=mbarang.`nama_barang`
    //     WHERE stockout.`no_suratjalan`='$id'")->result();
    //     return $query;
    // }

    // public function getStockoutById($id){
    // 	return $this->db->get_where('stockout', ['id_out' => $id])->row_array();
    // }

    //    public function EditStockout()
    //    {
    //        $id = $this->input->post('id');

    //        $nama_barang = $this->input->post('nama_barang');
    //        $jumlah = $this->input->post('quantity_out');
    //        $lokasi = $this->input->post('lokasi');
    //        $keterangan = $this->input->post('keterangan');
    //        $nolast = $this->input->post('nolast_suratjalan');
    //        $nolast_suratjalan = '0'.$nolast;

    //        $user_session = $this->session->userdata('email');
    //        $dateout = date('d/m/Y');


    //        $d=$this->db->query("SELECT * FROM user WHERE email='$user_session' ")->result();
    //        foreach ($d as $v){}
    //        $divisi = $v->divisi;

    //        $q=$this->db->query("SELECT * FROM mbarang WHERE nama_barang='$nama_barang' ")->result();
    //        foreach ($q as $w){}
    //        $id_barang = $w->id;

    //        // $tanggal = date('d');
    //        // $bulan = date('m');

    //        // $cek = $this->db->query('select * from stockout order by id_out desc limit 1')->result_array();
    //        //  foreach ($cek as $p) {
    //        //      $ex = explode('/', $p['nolast_suratjalan']);
    //        //      $ambilBulan = explode('/', $p['dateout']);  // ambil bulan si tanggal keluar atau tanggal dibuat nya
    //        //    }


    //        //  if ($bulan != $ambilBulan[1] && $ex[0] != '01') { 
    //        //      $nolast_suratjalan = '01';
    //        //  }
    //        //  else{
    //        //      $nolast_suratjalan = sprintf("%02d",$ex[0]+1);
    //        //  }


    //        $b = 'IJSM';
    //        $c = array('','I','II','III','IV','V','VI','VII','VIII','IX','X','XI','XII');
    //        $d = date('Y');
    //        $no_suratjalan = $divisi.'/'.$b.'/'.$c[date('n')].'/'.$d.'/'.$nolast_suratjalan;

    //            $data = array(
    //                'nama_barang' => $nama_barang,
    //                'jumlah' => $jumlah,
    //                'lokasi' => $lokasi,
    //                'keterangan' => $keterangan,
    //                'user_session' => $user_session,
    //                'dateout' => $dateout,
    //                'divisi' => $divisi,
    //                // 'no_suratjalan' => $no_suratjalan,
    //                // 'nolast_suratjalan' => $nolast_suratjalan
    //            );
    //            $this->db->where('id_out', $id);
    //            $this->db->update('stockout', $data);
    //        }

    // public function HapusStockout($id){
    // 	$this->db->delete('stockout', ['id_out' => $id]);
    // }
}
