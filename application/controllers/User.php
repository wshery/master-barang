<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('User_model');
        $this->load->model('Role_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Management User';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['userm'] = $this->User_model->getAllUser();

        $this->load->view('templates/header', $data);
        $this->load->view('superadmin/user/index', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $data['title'] = "Management User";
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['userm'] = $this->User_model->getAllUser();

        $data['role'] = $this->db->get('user_role')->result_array();
        $data['hm'] = $this->db->get('user_role')->row_array();

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]', [
            'is_unique' => 'This Username has already registered, please choose another one!'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This Email has already registered, please choose another one!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]', [
            'matches' => 'Password Dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        $this->form_validation->set_rules('role', 'Role', 'trim|required');
        $this->form_validation->set_rules('is_active', 'Active', 'trim|required');

        $this->load->view('templates/header', $data);
        $this->load->view('superadmin/user/create', $data);
        $this->load->view('templates/footer');
    }

    public function store()
    {
        $this->User_model->CreateUser();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="success">Success Insert New User!</div>');
        redirect('user');
    }

    // function edit_user()
    // {
    //     $id = $this->input->post('id');
    //     $name = $this->input->post('name');
    //     $username = $this->input->post('username');
    //     $email = $this->input->post('email');
    //     $password1 = $this->input->post('password1');
    //     $role = $this->input->post('role');
    //     $status = 1;
    //     $image = $_FILES['image']['name'];
    //     $this->m_barang->edit_barang($id, $name, $username, $email, $password1, $role, $status, $image);
    // }

    public function editUser($id)
    {
        $data['title'] = 'User Management';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        // $data['userm'] = $this->User_model->getAllUser();
        $data['userm'] = $this->User_model->getUserById($id);
        // $data['rolem'] = $this->Role_model->getAllRole();

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim');
        $this->form_validation->set_rules('password1', 'Password', 'min_length[8]|matches[password2]', [
            'matches' => 'Password Dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        $this->form_validation->set_rules('role', 'Role', 'trim|required');
        $this->form_validation->set_rules('is_active', 'Active', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header');
            $this->load->view('superadmin/user/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Masterbarang_model->EditMasterbarang();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="success">Success Edit Barang!</div>');
            redirect('user/index');
        }
    }

    // public function edit()
    // {
    //     $id = $this->input->get('id', TRUE);

    //     $edit_user = $this->db->query("SELECT * FROM user WHERE id='$id' ")->result();

    //     $data = array('edit_user' => $edit_user);
    // }

    // function update()
    // {
    //     $id = $this->input->post('id');
    //     $name = $this->input->post('name');
    //     $username = $this->input->post('username');
    //     $email = $this->input->post('email');
    //     $password1 = $this->input->post('password1');
    //     $role_id = $this->input->post('role_id');
    //     $status = 1;
    //     $image = $_FILES['image']['name'];

    //     if ($image = '') { } else {
    //         $config['upload_path'] = './image';
    //         $config['allowed_types'] = 'jpg|gif|png';

    //         $this->load->library('upload', $config);

    //         if (!$this->upload->do_upload('image')) {
    //             echo "download gagal";
    //             die();
    //         } else {
    //             $image = $this->upload->data('file_name');
    //         }

    //         $data = array(
    //             'name' => $name,
    //             'username' => $username,
    //             'email' => $email,
    //             'password' => $password1,
    //             'role_id' => $role_id,
    //             'is_active' => $status,
    //             'image' => $image,
    //             'date_created' => time(),
    //         );

    //         $where = array(
    //             'id' => $id
    //         );

    //         $this->User_model->update_data($where, $data, 'user');
    //         print_r($data);
    //         // redirect('user/index');
    //     }
    // }

    public function delete($id)
    {
        $this->User_model->HapusUser($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="success">Success Delete User!</div>');
        redirect('user');
    }
}
