<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function getAllUser()
    {
        $query = $this->db->get('user')->result_array();
        return $query;
    }

    public function CreateUser()
    {
        $name = $this->input->post('name');
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = $this->input->post('password1');
        $role = $this->input->post('role');
        $divisi = $this->input->post('divisi');
        $status = 1;
        $image = $_FILES['image']['name'];

        if ($image = '') { } else {
            $config['upload_path'] = './image';
            $config['allowed_types'] = 'jpg|gif|png';

            $this->load->library('upload', $config);
            $image = $this->upload->data('file_name');

            if ($this->upload->do_upload('image')) {
                $image = $this->upload->data('file_name');
            } else { }

            $data = array(
                'name' => $name,
                'username' => $username,
                'email' => $email,
                'password' => $password,
                'role' => $role,
                'divisi' => $divisi,
                'is_active' => $status,
                'image' => $image,
                'date_created' => time()
            );

            $this->db->insert('user', $data);
        }
    }

    // public function edit_user($id, $name, $username, $email, $password1, $role, $divisi, $status, $image)
    // {
    //     $hasil = $this->db->query("UPDATE user SET name='$name',username='$username',email='$email',password1='$password1',role='$role',divisi='$divisi',is_active='$status',image='image' WHERE id='$id'");
    //     return $hasil;
    // }

    // public function editUser($data)
    // {
    //     $edit = $this->db->update('user', $data);
    //     return $edit;
    // }

    // function edit_data($where, $table)
    // {
    //     return $this->db->get_where($table, $where);
    // }

    // function update_data($where, $data, $table)
    // {
    //     $this->db->where($where);
    //     $this->db->update($table, $data);
    // }

    public function getUserById($id)
    {
        return $this->db->get_where('user', ['id' => $id])->row_array();
    }

    public function EditUser()
    {
        $id = $this->input->post('id');

        $name = $this->input->post('name');
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password1 = $this->input->post('password1');
        $role = $this->input->post('role');
        $divisi = $this->input->post('divisi');
        $status = 1;
        $image = $_FILES['image']['name'];

        $data = array(
            'name' => $name,
            'username' => $username,
            'email' => $email,
            'password' => $password1,
            'role' => $role,
            'divisi' => $divisi,
            'is_active' => $status,
            'image' => $image,
            'date_created' => time(),
        );
        $this->db->where('id', $id);
        $this->db->update('user', $data);
    }

    // public function edit($post)
    // {
    //     $params['name'] = $post['name'];
    //     $params['username'] = $post['username'];
    //     $params['email'] = $post['email'];
    //     if (!empty($post['password'])) {
    //         $params['password'] = sha1($post['password']);
    //     }
    //     $params['role'] = $post['role'];
    //     $params['divisi'] = $post['divisi'];
    //     $params['is_active'] = 1;
    //     $params['image'] = $_FILES['image']['name'];

    //     $this->db->where('id', $post['id']);
    //     $this->db->update('user', $params);
    // }

    public function HapusUser($id)
    {
        $this->db->delete('user', ['id' => $id]);
    }
}
