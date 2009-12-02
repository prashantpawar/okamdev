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
		$this->load->view('header');
        if(!$this->dx_auth->is_logged_in()){
            $this->load->view('welcome_message',array('loggedin'=>false));
        }else{    
            $this->load->view('welcome_message',array('loggedin'=>true,'username'=>$this->dx_auth->get_username()));
        }
        $this->load->view('footer');
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */