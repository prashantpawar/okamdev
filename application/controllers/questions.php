<?php
class Questions extends Controller {

    const DEFAULT_QUESTIONS_PAGE_SIZE = 10;

    function Questions() {
        parent::Controller();
        $this->load->library('DX_Auth');  
        $this->load->model('ok_questionsmodel');
        $this->load->model('ok_answersmodel');
    }

    /**
     * Returns a set of questions already answered for a given User
     * @param $username
     * @return unknown_type
     */
    function view($username = NULL, $start = 0, $pageSize = self::DEFAULT_QUESTIONS_PAGE_SIZE) {
        // Get a list of questions/answers which are already answered by the user
        if(!$this->dx_auth->is_logged_in()){
        	redirect('auth/login/', 'refresh');
        	return;
        }
        if($username==NULL){
        	$username=$this->dx_auth->get_username();
        }
        //Fetch the questions
        $data['questions']=$this->ok_questionsmodel->findByFilter(NULL,NULL,10);
        //Fetch the answer texts
        /*foreach($data['questions'] as $key=>$question){
       		$data['questions'][$key]=$this->
        }*/
        $this->load->view('header',array('page'=>'question'));
        $this->load->view('questions/view.php',$data);
        $this->load->view('footer');
    }
    
    /**
     * Returns a set of questions not answered by the current User
     */
    function show($start = 0, $pageSize = self::DEFAULT_QUESTIONS_PAGE_SIZE) {
        // Get entire list of questions & answers which are not answered by the user
        $answer=$this->input->post('');
        if(!$this->dx_auth->is_logged_in()){
        	redirect('auth/login', 'refresh');
        	return;
        }
        $username=$this->dx_auth->get_username();
                //Fetch the questions
        $data['questions']=$this->ok_questionsmodel->findByFilter(NULL,NULL,"0,1");
        //Fetch the answer texts
        /*foreach($data['questions'] as $key=>$question){
       		$data['questions'][$key]=$this->
        }*/
        $headerdata=array(
        		'page'=>'question',
        		'navbar'=> array(
        					anchor('questions/add','Add Question')
        			),
        		);
        if(isset($_POST['submit'])){
            $data['post']=$_POST;
            $this->load->view('header',$headerdata);
            $this->load->view('questions/showanswers.php',$data);
            $this->load->view('footer');
        }else{
            $data['post']=$_POST;
            $this->load->view('header',$headerdata);
            $this->load->view('questions/show.php',$data);
            $this->load->view('footer');
        }
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