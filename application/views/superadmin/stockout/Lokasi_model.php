<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lokasi_model extends CI_Model{
	public function getAllLokasi(){
		return $this->db->get('lokasi')->result_array();
	}

	public function CreateLokasi(){
		$nama_lokasi = $this->input->post('nama_lokasi');

		$data = array(
			'nama_lokasi' => $nama_lokasi,
		);

		$this->db->insert('lokasi', $data);
	}

	public function ModalLokasi(){
		$nama_lokasi = $this->input->post('nama_lokasi');

		$data = array(
			'nama_lokasi' => $nama_lokasi,
		);

		$this->db->insert('lokasi', $data);
	}

	public function getLokasiById($id){
		return $this->db->get_where('lokasi', ['id' =>$id])->row_array();
	}

	public function EditLokasi(){
		$id = $this->input->post('id');

		$nama_lokasi = $this->input->post('nama_lokasi');

		$data = array(
			'nama_lokasi' => $nama_lokasi,
		);
		$this->db->where('id', $id);
		$this->db->update('lokasi', $data);
	}

	public function HapusLokasi($id){
		$this->db->delete('lokasi', ['id' => $id]);
	}
}