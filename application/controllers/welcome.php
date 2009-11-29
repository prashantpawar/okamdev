<?php

class Welcome extends Controller {

	function Welcome()
	{
		parent::Controller();	
        $this->load->library('DX_Auth');  
        $this->load->helper('url');
	}
	
	function index()
	{
        if(!$this->dx_auth->is_logged_in()){
            $this->load->view('welcome_message',array('flash'=>'Not logged in','displaylink'=>true));
        }else{    
            $this->load->view('welcome_message',array('flash'=>'Welcome '.$this->dx_auth->get_username(),'displaylink'=>false));
        }
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */