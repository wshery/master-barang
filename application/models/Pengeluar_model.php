<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengeluar_model extends CI_Model{
	public function getAllPengeluar(){
		return $this->db->get('pengeluar')->result_array();
	}

	public function CreatePengeluar(){
		$nama_pengeluar = $this->input->post('nama_pengeluar');

		$data = array(
			'nama_pengeluar' => $nama_pengeluar,
		);

		$this->db->insert('pengeluar', $data);
	}

	public function ModalPengeluar(){
		$nama_pengeluar = $this->input->post('nama_pengeluar');

		$data = array(
			'nama_pengeluar' => $nama_pengeluar,
		);

		$this->db->insert('pengeluar', $data);
	}

	public function getPengeluarById($id){
		return $this->db->get_where('pengeluar', ['id' =>$id])->row_array();
	}

	public function EditPengeluar(){
		$id = $this->input->post('id');

		$nama_pengeluar = $this->input->post('nama_pengeluar');

		$data = array(
			'nama_pengeluar' => $nama_pengeluar,
		);
		$this->db->where('id', $id);
		$this->db->update('pengeluar', $data);
	}

	public function HapusPengeluar($id){
		$this->db->delete('pengeluar', ['id' => $id]);
	}
}