<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * MODULE NAME   : Ok_questions.php
 *
 * DESCRIPTION   : Ok_questions module controller
 *
 * MODIFICATION HISTORY
 *   V1.0   2009-11-28 02:40 AM   - Pradesh Chanderpaul     - Created
 *
 * @package             Ok_questions
 * @subpackage          ok_questions component Class
 * @author              Pradesh Chanderpaul
 * @copyright           Copyright (c) 2006-2007 DataCraft Software
 * @license             http://www.datacraft.co.za/codecrafter/license.html
 * @link                http://www.datacraft.co.za/codecrafter/
 * @since               Version 1.0
 * @filesource
 */

class Ok_questions extends Controller {

   /**
   * Contructor function
   *
   * Load the instance of CI by invoking the parent constructor
   *
   * @access      public
   * @return      none
   */
   function Ok_questions() {
      parent::Controller();
   }

   /**
   * "Index" Page
   *
   * Default class action
   *
   * @access      public
   * @return      none
   */

   function index() {
      // The default action is the showall action
      $this->browse();

      // ///////////////////////////////////////////////////////////////////////
      // NOTE: Load libraries and other libraries and helpers here. The
      // NOTE: ...generated code loads the database library as it requires it,
      // NOTE: ...but you may prefer to load here or autoload, In this case
      // NOTE: ...remember to delete all explicit load()s.
      // ///////////////////////////////////////////////////////////////////////
   }

   // //////////////////////////////////////////////////////////////////////////
   // Function: showall()
   //
   // Description: Extracts a list of all ok_questions data records and displays it.
   //
   // //////////////////////////////////////////////////////////////////////////
   function browse() {

      // ///////////////////////////////////////////////////////////////////////
      // Request the list from database. This is done by creating an instance of
      // ...the ok_questions model and sending it a 'retrievelist' request.
      // ///////////////////////////////////////////////////////////////////////

      // ///////////////////////////////////////////////////////////////////////
      // NOTE: If you are not using pagination, then set appropriate values for
      // NOTE: ...the $start and $limit_per_page values, or remove then from the
      // NOTE: ...function call.
      // ///////////////////////////////////////////////////////////////////////
      $start = $this->uri->segment(3,0);
      $limit_per_page = 10;

      $this->load->model('ok_questionsmodel');                  // Instantiate the model
      $the_results['ok_questions_list'] = $this->ok_questionsmodel->findAll($start, $limit_per_page);  // Send the retrievelist msg
      // $the_results['rowcount'] = count($the_results['ok_questions_list']);

      // ///////////////////////////////////////////////////////////////////////
      // NOTE: Set up the paging links. Just remove this if you don't need it,
      // NOTE: ...but you must remember to change the views too.
      // ///////////////////////////////////////////////////////////////////////
      $this->load->library('pagination');
      $this->load->helper('url');

      $config['base_url']     = site_url('ok_questions/showall/');   // or just /ok_questions/
      $config['total_rows']   = $this->ok_questionsmodel->table_record_count;
      $config['per_page']     = $limit_per_page;

      $this->pagination->initialize($config);

      $the_results['page_links'] = $this->pagination->create_links();


      // ///////////////////////////////////////////////////////////////////////
      // Print the results on the web page tmeplate. This is done by creating an
      // ...instance of the layout library and sending it a 'render_page' request
      // ///////////////////////////////////////////////////////////////////////
      $this->load->library('layout');

      $this->layout->render_page('/ok_questions/ok_questionsgrid', $the_results);
      // NOTE: If you don't want to use the layout library, use the line below.
      // $this->load->view('/ok_questions/ok_questionsgrid', $the_results);

   }

   // //////////////////////////////////////////////////////////////////////////
   // Function: add()
   //
   // Description: Prompts user for input and adds a new ok_questions entry
   //              ...onto the database.
   //
   // //////////////////////////////////////////////////////////////////////////
   function add() {

      $this->load->helper('url');

      // ///////////////////////////////////////////////////////////////////////
      // How are we being invoked. The user is either requesting a form or is
      // ...submitting it.
      // ///////////////////////////////////////////////////////////////////////
      $submit = $this->input->post('Submit');

      if ( $submit != false ) {
         // ////////////////////////////////////////////////////////////////////
         // User is submitting data
         // Store the values from the form onto the db
         // ////////////////////////////////////////////////////////////////////
         $this->load->model('ok_questionsmodel');

         /*
		// XXS Filtering enforced for user input
		$data['id']		= $this->input->post('id', TRUE);
		$data['question_text']		= $this->input->post('question_text', TRUE);
		$data['addedbyuser_id']		= $this->input->post('addedbyuser_id', TRUE);
		$data['answer1_id']		= $this->input->post('answer1_id', TRUE);
		$data['answer2_id']		= $this->input->post('answer2_id', TRUE);
		$data['answer3_id']		= $this->input->post('answer3_id', TRUE);
		$data['answer4_id']		= $this->input->post('answer4_id', TRUE);
		$data['answer5_id']		= $this->input->post('answer5_id', TRUE);
		$data['answer6_id']		= $this->input->post('answer6_id', TRUE);

         */
         $data = $this->_get_form_values();

         $this->ok_questionsmodel->add($data);

         // $this->load->helper('url');
         redirect('/ok_questions/', 'location');

      }
      else {
         // We have to show the user the input form
         /*
		$data['id']		= '';
		$data['question_text']		= '';
		$data['addedbyuser_id']		= '';
		$data['answer1_id']		= '';
		$data['answer2_id']		= '';
		$data['answer3_id']		= '';
		$data['answer4_id']		= '';
		$data['answer5_id']		= '';
		$data['answer6_id']		= '';

         */
         $data = $this->_clear_form();
         $data['action']       = 'add';

		// Retrieve the fa_user lookup values.
		$this->load->model('fa_usermodel');
		$data['fa_userlist'] = $this->fa_usermodel->findAll();

		// Retrieve the ok_answers lookup values.
		$this->load->model('ok_answersmodel');
		$data['ok_answerslist'] = $this->ok_answersmodel->findAll();

		// Retrieve the ok_answers lookup values.
		$this->load->model('ok_answersmodel');
		$data['ok_answerslist'] = $this->ok_answersmodel->findAll();

		// Retrieve the ok_answers lookup values.
		$this->load->model('ok_answersmodel');
		$data['ok_answerslist'] = $this->ok_answersmodel->findAll();

		// Retrieve the ok_answers lookup values.
		$this->load->model('ok_answersmodel');
		$data['ok_answerslist'] = $this->ok_answersmodel->findAll();

		// Retrieve the ok_answers lookup values.
		$this->load->model('ok_answersmodel');
		$data['ok_answerslist'] = $this->ok_answersmodel->findAll();

		// Retrieve the ok_answers lookup values.
		$this->load->model('ok_answersmodel');
		$data['ok_answerslist'] = $this->ok_answersmodel->findAll();



         // Call upon the layout library to draw the input screen
         $this->load->library('layout');
         $this->layout->render_page('/ok_questions/ok_questionsdetails', $data);
         // NOTE: If you don't want to use the layout library, use the line below.
         // $this->load->view('/ok_questions/ok_questionsdetails', $data);


      }
   }

   // //////////////////////////////////////////////////////////////////////////
   // Function: modify()
   //
   // Description: Controller function to process user modify requests
   //
   // //////////////////////////////////////////////////////////////////////////
   function modify() {

      $this->load->helper('url');

      // ///////////////////////////////////////////////////////////////////////
      // How are we being invoked
      // ///////////////////////////////////////////////////////////////////////
      $submit = $this->input->post('Submit');

      if ( $submit != false ) {
         // ////////////////////////////////////////////////////////////////////
         // User is submitting data
         // Store the values from the form onto the db
         // ////////////////////////////////////////////////////////////////////
         $this->load->model('ok_questionsmodel');

         // $data['action']          = 'modify';
         /*
		// XXS Filtering enforced for user input
		$data['id']		= $this->input->post('id', TRUE);
		$data['question_text']		= $this->input->post('question_text', TRUE);
		$data['addedbyuser_id']		= $this->input->post('addedbyuser_id', TRUE);
		$data['answer1_id']		= $this->input->post('answer1_id', TRUE);
		$data['answer2_id']		= $this->input->post('answer2_id', TRUE);
		$data['answer3_id']		= $this->input->post('answer3_id', TRUE);
		$data['answer4_id']		= $this->input->post('answer4_id', TRUE);
		$data['answer5_id']		= $this->input->post('answer5_id', TRUE);
		$data['answer6_id']		= $this->input->post('answer6_id', TRUE);

         */
         $data = $this->_get_form_values();

         $this->ok_questionsmodel->modify($data['id'], $data);

         redirect('/ok_questions/', 'location');

      }
      else {
         // We have to show the user the input form

         $idField = $this->uri->segment(3);

         $this->load->model('ok_questionsmodel');
         $data = $this->ok_questionsmodel->retrieve_by_pkey($idField);
         $data['action'] = 'modify';

		// Retrieve the fa_user lookup values.
		$this->load->model('fa_usermodel');
		$data['fa_userlist'] = $this->fa_usermodel->findAll();

		// Retrieve the ok_answers lookup values.
		$this->load->model('ok_answersmodel');
		$data['ok_answerslist'] = $this->ok_answersmodel->findAll();

		// Retrieve the ok_answers lookup values.
		$this->load->model('ok_answersmodel');
		$data['ok_answerslist'] = $this->ok_answersmodel->findAll();

		// Retrieve the ok_answers lookup values.
		$this->load->model('ok_answersmodel');
		$data['ok_answerslist'] = $this->ok_answersmodel->findAll();

		// Retrieve the ok_answers lookup values.
		$this->load->model('ok_answersmodel');
		$data['ok_answerslist'] = $this->ok_answersmodel->findAll();

		// Retrieve the ok_answers lookup values.
		$this->load->model('ok_answersmodel');
		$data['ok_answerslist'] = $this->ok_answersmodel->findAll();

		// Retrieve the ok_answers lookup values.
		$this->load->model('ok_answersmodel');
		$data['ok_answerslist'] = $this->ok_answersmodel->findAll();



         $this->load->library('layout');
         $this->layout->render_page('/ok_questions/ok_questionsdetails', $data);
         // NOTE: If you don't want to use the layout library, use the line below.
         // $this->load->view('/ok_questions/ok_questionsdetails', $data);


      }
   }


   // //////////////////////////////////////////////////////////////////////////
   // Function: delete()
   //
   // Description: Controller function to process user delete requests
   //
   // //////////////////////////////////////////////////////////////////////////
   function delete() {
      $idField = $this->uri->segment(3);

      $this->load->model('ok_questionsmodel');
      $the_results = $this->ok_questionsmodel->delete_by_pkey($idField);

      $this->load->helper('url');
      redirect('/ok_questions/', 'location');

   }

   function _clear_form() {

      // ///////////////////////////////////////////////////////////////////////
      // NOTE: Set default values for the form here if you wish.
      // ///////////////////////////////////////////////////////////////////////
		$data['id']		= '';
		$data['question_text']		= '';
		$data['addedbyuser_id']		= '';
		$data['answer1_id']		= '';
		$data['answer2_id']		= '';
		$data['answer3_id']		= '';
		$data['answer4_id']		= '';
		$data['answer5_id']		= '';
		$data['answer6_id']		= '';

      return $data;

   }

   function _get_form_values() {
      // ///////////////////////////////////////////////////////////////////////
      // NOTE: Perform customisation on the retrieved form values here if you wish.
      // ///////////////////////////////////////////////////////////////////////
		// XXS Filtering enforced for user input
		$data['id']		= $this->input->post('id', TRUE);
		$data['question_text']		= $this->input->post('question_text', TRUE);
		$data['addedbyuser_id']		= $this->input->post('addedbyuser_id', TRUE);
		$data['answer1_id']		= $this->input->post('answer1_id', TRUE);
		$data['answer2_id']		= $this->input->post('answer2_id', TRUE);
		$data['answer3_id']		= $this->input->post('answer3_id', TRUE);
		$data['answer4_id']		= $this->input->post('answer4_id', TRUE);
		$data['answer5_id']		= $this->input->post('answer5_id', TRUE);
		$data['answer6_id']		= $this->input->post('answer6_id', TRUE);

      return $data;

   }

}
?>