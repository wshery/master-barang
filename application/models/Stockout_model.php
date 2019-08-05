<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Stockout_model extends CI_Model{
	public function getAllstockout(){
        // pengurutan berdasarkan divisi
        $user_session = $this->session->userdata('email');
        $d=$this->db->query("SELECT * FROM user WHERE email='$user_session' ")->result();
        foreach ($d as $v){}
        $divisi = $v->divisi;

        $query=$this->db->query("SELECT DISTINCT(no_suratjalan),dateout,lokasi,user_session FROM stockout WHERE divisi='$divisi' ")->result_array();
        return $query;
	}

    public function upload_file($filename){
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

	public function CreateStockout(){
            $lokasi = $this->input->post('lokasi');
            $keterangan = $this->input->post('keterangan');
            $user_session = $this->session->userdata('email');
            $dateout = date('d/m/Y');

            $d=$this->db->query("SELECT * FROM user WHERE email='$user_session' ")->result();
            foreach ($d as $v){}
            $divisi = $v->divisi;
            $tanggal = date('d');
            $bulan = date('m');

            $cek = $this->db->query('select * from stockout order by id_out desc limit 1')->result_array();
            foreach ($cek as $p) 
            {
                $ex = explode('/', $p['nolast_suratjalan']);
            $ambilBulan = explode('/', $p['dateout']);  // ambil bulan si tanggal keluar atau tanggal dibuat nya
        }
        if ($bulan != $ambilBulan[1] && $ex[0] != '01') { 
            $nolast_suratjalan = '01';
        }
        else{
            $nolast_suratjalan = sprintf("%02d",$ex[0]+1);
        }

        $b = 'IJSM';
        $c = array('','I','II','III','IV','V','VI','VII','VIII','IX','X','XI','XII');
        $d = date('Y');
        $no_suratjalan = $divisi.'/'.$b.'/'.$c[date('n')].'/'.$d.'/'.$nolast_suratjalan;

        for($count = 0; $count < count($_POST['nama_barang']); $count++)
        {
            $nama_barang = $_POST['nama_barang'][$count];
            $jumlah = $_POST['quantity_out'][$count];

            $data = array(
             'nama_barang' => $nama_barang,
             'jumlah' => $jumlah,
             'lokasi' => $lokasi,
             'keterangan' => $keterangan,
             'user_session' => $user_session,
             'dateout' => $dateout,
             'divisi' => $divisi,
             'no_suratjalan' => $no_suratjalan,
             'nolast_suratjalan' => $nolast_suratjalan
         );
        $this->db->insert('stockout', $data);
        }
        
	}

	public function suratjalan()
    {

        $id=$this->input->get('id', TRUE);
        $query=$this->db->query("
        SELECT
        stockout.`nama_barang`,stockout.`jumlah`,stockout.`lokasi`,stockout.`keterangan`
        ,mbarang.`harga`,
        (REPLACE(mbarang.`harga`,'Rp. ','')*(stockout.`jumlah`)) AS subtotal 
        FROM mbarang
        INNER JOIN stockout ON stockout.`nama_barang`=mbarang.`nama_barang`
        WHERE stockout.`no_suratjalan`='$id'"
        )->result_array();
        return $query;
    }

    public function no_surat(){
        $id=$this->input->get('id', TRUE);
        $query = $this->db->query("SELECT DISTINCT(no_suratjalan),stockout.*,mbarang.`harga`
        FROM stockout 
        JOIN mbarang ON stockout.`nama_barang`=mbarang.`nama_barang`
        WHERE stockout.`no_suratjalan`='$id'  LIMIT 1 ")->result_array();
        return $query;
    }

    public function total(){
        $id=$this->input->get('id', TRUE);
        $query = $this->db->query("SELECT
        SUM(REPLACE(mbarang.`harga`,'Rp. ','')*(stockout.`jumlah`))AS total
        FROM mbarang
        INNER JOIN stockout ON stockout.`nama_barang`=mbarang.`nama_barang`
        WHERE stockout.`no_suratjalan`='$id'")->result();
        return $query;
    }

	public function getStockoutById($id){
		return $this->db->get_where('stockout', ['id_out' => $id])->row_array();
	}

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