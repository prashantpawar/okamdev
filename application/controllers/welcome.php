<?php

class Welcome extends Controller {

	function Welcome()
	{
		parent::Controller();	
        $this->load->helper('form');
	}
	
	function index()
	{
        if($this->freakauth_light->check())
        {
            //$data['user']=
        }else{
            $this->load->view('login_form');
        }
		$this->load->view('welcome_message',$data);
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */