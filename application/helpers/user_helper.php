<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function getUsername() {
    $App =& get_instance();
    $App->load->library('dx_auth');
    return $App->dx_auth->get_username();
}

function getUserId() {
    $App =& get_instance();
    $App->load->library('dx_auth');
    return $App->dx_auth->get_user_id();
}

function isLoggedIn() {
    $App =& get_instance();
    $App->load->library('dx_auth');
    return $App->dx_auth->is_logged_in();
}

function getUserIdFromUsername($username) {
    $App =& get_instance();
    $App->load->model('ok_usersmodel');
    $result = $app->ok_usermodel->findByFilter(array('username' => $username));
    return $result['id'];
}