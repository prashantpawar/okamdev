<?php
class Profile extends Controller {
    
    function Profile() {
        parent::Controller();
    }
    
    /**
     * Default page for this controller.
     * Redirects to profile show
     * @return unknown_type
     */
     function index() {
        $this->show();
        return;
    }
    
    /**
     * Displays the profile page of a current User or given username
     * @return unknown_type
     */
    function myProfile($username = NULL) {
        // 1. Get User Status from the DB
        // 2. Get User Profile photo
        // 3. Get user's basic Profile info. These are basic profile questions.
        // Like what do you like to do on weekends, etc.
        // 4. Get user's basic personal info, like age, location, height, body type. etc
        $data = profile_getBasicProfileData();
        var_dump($data);
        $this->load->view('/profile/myProfile', $data);
    }
    
    /**
     * Shows the profile of any user
     * @param $username string Username whose profile is to be shown
     * @return unknown_type
     */
    function show($username) {
        // This will do mostly what myProfile does. 
        // We might user myProfile to render this page.
    }

    
    /**
     * Updates the user status in async using AJAX
     * @return json response
     */
    function updateStatus($username = NULL) {
        // Sets the status of user in DB
    }

    /**
     * Displays the inbox of current User
     * @return unknown_type
     */
    function inbox() {
        // Displays current users inbox messages
        // Will have actions like reply and delete
    }
    
    /**
     * Shows and saves basic profile info like
     * age, location, height etc
     * @return unknown_type
     */
    function aboutYou() {
        
    }

    /**
     * Users wanted to leave our website. 
     * Not in V1
     * @return unknown_type
     */
    function delete() {
        // Redirect to homepage and signout
    }

    /**
     * Blocks the user
     * Not in V1
     * @return unknown_type
     */
    function block($usernmae) {
        
    }
    
    /**
     * Marks the given user as Fake
     * Not in V1
     * @param $username
     * @return unknown_type
     */
    function reportFake($username) {
        
    }
    
    /**
     * Marks the given user as a bookmark
     * @param $username
     * @return unknown_type
     */
    function bookmarkNow($username) {
        
    }

    /**
     * Shows the bookmarks of current user
     * @return unknown_type
     */
    function bookmarks() {
        
    }

    /**
     * Reformarts the output based on the request.
     * Outputs in json/php array
     * @param $output
     * @return unknown_type
     */
    function _output($output)
    {
        echo $output;
    }

    /**
     * Redirects to this page if the page doesnt exist
     * @return unknown_type
     */
    function errorPage() {
        //show_404
        show_error('Page does not exist!');
        return;
    }
    
    /**
     * Checks if the method exists in the class else redirects to error page
     * @param $action
     * @return unknown_type
     */
    /*function _remap($action) {
        if (!method_exists(get_class($this), $action)) {
            $this->default_method($action);
        } else {
            // Not sure what _remap does with passed params. Check later and implement
            call_user_func_array(array(get_class($this), $action), array());
        }
    }*/
  
    /**
     * Default method which is executed in case given action doesnot exist
     * @param $action
     * @return unknown_type
     */
    function default_method($action = NULL) {
        $this->errorPage();
    }

}
