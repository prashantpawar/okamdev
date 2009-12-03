<?php
class Questions extends Controller {

    const DEFAULT_QUESTIONS_PAGE_SIZE = 10;

    function Questions() {
        parent::Controller();
    }

    /**
     * Returns a set of questions already answered for a given User
     * @param $username
     * @return unknown_type
     */
    function view($username = NULL, $start = 0, $pageSize = self::DEFAULT_QUESTIONS_PAGE_SIZE) {
        // Get a list of questions/answers which are already answered by the user
        $this->load->view('header',array('page'=>'question'));
        
        $this->load->view('footer');
    }
    
    /**
     * Returns a set of questions not answered by the current User
     */
    function show($start = 0, $pageSize = self::DEFAULT_QUESTIONS_PAGE_SIZE) {
        // Get entire list of questions & answers which are not answered by the user
    }
    
    /**
     * 
     * @param $questionId
     * @param $answerId
     * @param $relevancy
     * @return unknown_type
     */
    function add($questionId, $answerId, $relevancy) {
        // Adds current users answers to the db 
    }
    
    function update($questionId, $answerId, $relevancy, $isPublic) {
        // Updates the given question with new attributes
    }
    
    function remove($questionId) {
        // Removes the answered question from users list of answered questions
    }
}
