<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Supir_model extends CI_Model{
	public function getAllSupir(){
		return $this->db->get('supir')->result_array();
	}

	public function CreateSupir(){
		$nama_supir = $this->input->post('nama_supir');

		$data = array(
			'nama_supir' => $nama_supir,
		);

		$this->db->insert('supir', $data);
	}

	public function ModalSupir(){
		$nama_supir = $this->input->post('nama_supir');

		$data = array(
			'nama_supir' => $nama_supir,
		);

		$this->db->insert('supir', $data);
	}

	public function getSupirById($id){
		return $this->db->get_where('supir', ['id' =>$id])->row_array();
	}

	public function EditSupir(){
		$id = $this->input->post('id');

		$nama_supir = $this->input->post('nama_supir');

		$data = array(
			'nama_supir' => $nama_supir,
		);
		$this->db->where('id', $id);
		$this->db->update('supir', $data);
	}

	public function HapusSupir($id){
		$this->db->delete('supir', ['id' => $id]);
	}
}