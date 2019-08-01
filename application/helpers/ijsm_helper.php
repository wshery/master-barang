<?php

function is_logged_in()
{
    $ci = get_instance();
    // echo $ci->session->userdata('email');
    if (!$ci->session->userdata('email')) {
        redirect('auth');
    }
    // } elseif ($ci->session->userdata('role_id') == 1) {
    //     echo "xx";
    // } else {
    //     $role_id = $ci->session->userdata('role_id');
    //     $menu = $ci->uri->segment(1);

    //     $queryMenu = $ci->db->get_where('user_menu', ['menu' => $menu])->row_array();
    //     $menu_id = $queryMenu['id'];

    //     $userAccess = $ci->db->get_where('user_access_menu', [
    //         'role_id' => $role_id,
    //         'menu_id' => $menu_id,
    //     ]);
    // }
}
