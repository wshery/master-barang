<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Role_model extends CI_Model
{
    public function getAllRole()
    {
        return $this->db->get('user_role')->result_array();
    }
}
