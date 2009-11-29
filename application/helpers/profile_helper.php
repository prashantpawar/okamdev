<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Gets basic profile details from the model for a given user
 * @param $username
 * @return unknown_type
 */
function profile_getBasicProfileData($username = NULL) {
    if (is_null($username)) {
        $userId = isLoggedIn() ? getUserId() : null;
    } else {
        $userId = getUserIdFromUsername($username);
    }
    if (is_null($userId)) {
        log_message('error', 'User is not logged!'); 
        return NULL; 
    }
    $App =& get_instance();
    $App->load->model('ok_personal_profilesmodel');
    return $App->ok_personal_profilesmodel->findByFilter(array('user_id' => getUserId()));  // Send the retrievelist msg
}