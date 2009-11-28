<?php

class Welcome extends Application {

	function Welcome()
	{
		parent::Application();
        //$this->load->	
	}
	
	function index()
	{
        if(logged_in())
        {
            $this->load->view('welcome_message');
        }else{
            $this->auth->login();
        }
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */