<?php

class Welcome extends Application {

	function Welcome()
	{
		parent::Controller();
        //$this->load->	
	}
	
	function index()
	{
        $this->auth->login();
		$this->load->view('welcome_message');
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */