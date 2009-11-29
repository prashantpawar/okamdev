<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * MODULE NAME   : Ok_users.php
 *
 * DESCRIPTION   : Ok_users module controller
 *
 * MODIFICATION HISTORY
 *   V1.0   2009-11-28 11:06 PM   - Pradesh Chanderpaul     - Created
 *
 * @package             Ok_users
 * @subpackage          ok_users component Class
 * @author              Pradesh Chanderpaul
 * @copyright           Copyright (c) 2006-2007 DataCraft Software
 * @license             http://www.datacraft.co.za/codecrafter/license.html
 * @link                http://www.datacraft.co.za/codecrafter/
 * @since               Version 1.0
 * @filesource
 */

class Ok_users extends Controller {

   /**
   * Contructor function
   *
   * Load the instance of CI by invoking the parent constructor
   *
   * @access      public
   * @return      none
   */
   function Ok_users() {
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
   // Description: Extracts a list of all ok_users data records and displays it.
   //
   // //////////////////////////////////////////////////////////////////////////
   function browse() {

      // ///////////////////////////////////////////////////////////////////////
      // Request the list from database. This is done by creating an instance of
      // ...the ok_users model and sending it a 'retrievelist' request.
      // ///////////////////////////////////////////////////////////////////////

      // ///////////////////////////////////////////////////////////////////////
      // NOTE: If you are not using pagination, then set appropriate values for
      // NOTE: ...the $start and $limit_per_page values, or remove then from the
      // NOTE: ...function call.
      // ///////////////////////////////////////////////////////////////////////
      $start = $this->uri->segment(3,0);
      $limit_per_page = 10;

      $this->load->model('ok_usersmodel');                  // Instantiate the model
      $the_results['ok_users_list'] = $this->ok_usersmodel->findAll($start, $limit_per_page);  // Send the retrievelist msg
      // $the_results['rowcount'] = count($the_results['ok_users_list']);

      // ///////////////////////////////////////////////////////////////////////
      // NOTE: Set up the paging links. Just remove this if you don't need it,
      // NOTE: ...but you must remember to change the views too.
      // ///////////////////////////////////////////////////////////////////////
      $this->load->library('pagination');
      $this->load->helper('url');

      $config['base_url']     = site_url('ok_users/showall/');   // or just /ok_users/
      $config['total_rows']   = $this->ok_usersmodel->table_record_count;
      $config['per_page']     = $limit_per_page;

      $this->pagination->initialize($config);

      $the_results['page_links'] = $this->pagination->create_links();


      // ///////////////////////////////////////////////////////////////////////
      // Print the results on the web page tmeplate. This is done by creating an
      // ...instance of the layout library and sending it a 'render_page' request
      // ///////////////////////////////////////////////////////////////////////
      $this->load->library('layout');

      $this->layout->render_page('/ok_users/ok_usersgrid', $the_results);
      // NOTE: If you don't want to use the layout library, use the line below.
      // $this->load->view('/ok_users/ok_usersgrid', $the_results);

   }

   // //////////////////////////////////////////////////////////////////////////
   // Function: add()
   //
   // Description: Prompts user for input and adds a new ok_users entry
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
         $this->load->model('ok_usersmodel');

         /*
		// XXS Filtering enforced for user input
		$data['id']		= $this->input->post('id', TRUE);
		$data['role_id']		= $this->input->post('role_id', TRUE);
		$data['username']		= $this->input->post('username', TRUE);
		$data['password']		= $this->input->post('password', TRUE);
		$data['email']		= $this->input->post('email', TRUE);
		$data['banned']		= $this->input->post('banned', TRUE);
		$data['ban_reason']		= $this->input->post('ban_reason', TRUE);
		$data['newpass']		= $this->input->post('newpass', TRUE);
		$data['newpass_key']		= $this->input->post('newpass_key', TRUE);
		$data['newpass_time']		= $this->input->post('newpass_time', TRUE);
		$data['last_ip']		= $this->input->post('last_ip', TRUE);
		$data['last_login']		= $this->input->post('last_login', TRUE);
		$data['created']		= $this->input->post('created', TRUE);
		$data['modified']		= $this->input->post('modified', TRUE);

         */
         $data = $this->_get_form_values();

         $this->ok_usersmodel->add($data);

         // $this->load->helper('url');
         redirect('/ok_users/', 'location');

      }
      else {
         // We have to show the user the input form
         /*
		$data['id']		= '';
		$data['role_id']		= '';
		$data['username']		= '';
		$data['password']		= '';
		$data['email']		= '';
		$data['banned']		= '';
		$data['ban_reason']		= '';
		$data['newpass']		= '';
		$data['newpass_key']		= '';
		$data['newpass_time']		= '';
		$data['last_ip']		= '';
		$data['last_login']		= '';
		$data['created']		= '';
		$data['modified']		= '';

         */
         $data = $this->_clear_form();
         $data['action']       = 'add';

		// Retrieve the ok_roles lookup values.
		$this->load->model('ok_rolesmodel');
		$data['ok_roleslist'] = $this->ok_rolesmodel->findAll();



         // Call upon the layout library to draw the input screen
         $this->load->library('layout');
         $this->layout->render_page('/ok_users/ok_usersdetails', $data);
         // NOTE: If you don't want to use the layout library, use the line below.
         // $this->load->view('/ok_users/ok_usersdetails', $data);


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
         $this->load->model('ok_usersmodel');

         // $data['action']          = 'modify';
         /*
		// XXS Filtering enforced for user input
		$data['id']		= $this->input->post('id', TRUE);
		$data['role_id']		= $this->input->post('role_id', TRUE);
		$data['username']		= $this->input->post('username', TRUE);
		$data['password']		= $this->input->post('password', TRUE);
		$data['email']		= $this->input->post('email', TRUE);
		$data['banned']		= $this->input->post('banned', TRUE);
		$data['ban_reason']		= $this->input->post('ban_reason', TRUE);
		$data['newpass']		= $this->input->post('newpass', TRUE);
		$data['newpass_key']		= $this->input->post('newpass_key', TRUE);
		$data['newpass_time']		= $this->input->post('newpass_time', TRUE);
		$data['last_ip']		= $this->input->post('last_ip', TRUE);
		$data['last_login']		= $this->input->post('last_login', TRUE);
		$data['created']		= $this->input->post('created', TRUE);
		$data['modified']		= $this->input->post('modified', TRUE);

         */
         $data = $this->_get_form_values();

         $this->ok_usersmodel->modify($data['id'], $data);

         redirect('/ok_users/', 'location');

      }
      else {
         // We have to show the user the input form

         $idField = $this->uri->segment(3);

         $this->load->model('ok_usersmodel');
         $data = $this->ok_usersmodel->retrieve_by_pkey($idField);
         $data['action'] = 'modify';

		// Retrieve the ok_roles lookup values.
		$this->load->model('ok_rolesmodel');
		$data['ok_roleslist'] = $this->ok_rolesmodel->findAll();



         $this->load->library('layout');
         $this->layout->render_page('/ok_users/ok_usersdetails', $data);
         // NOTE: If you don't want to use the layout library, use the line below.
         // $this->load->view('/ok_users/ok_usersdetails', $data);


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

      $this->load->model('ok_usersmodel');
      $the_results = $this->ok_usersmodel->delete_by_pkey($idField);

      $this->load->helper('url');
      redirect('/ok_users/', 'location');

   }

   function _clear_form() {

      // ///////////////////////////////////////////////////////////////////////
      // NOTE: Set default values for the form here if you wish.
      // ///////////////////////////////////////////////////////////////////////
		$data['id']		= '';
		$data['role_id']		= '';
		$data['username']		= '';
		$data['password']		= '';
		$data['email']		= '';
		$data['banned']		= '';
		$data['ban_reason']		= '';
		$data['newpass']		= '';
		$data['newpass_key']		= '';
		$data['newpass_time']		= '';
		$data['last_ip']		= '';
		$data['last_login']		= '';
		$data['created']		= '';
		$data['modified']		= '';

      return $data;

   }

   function _get_form_values() {
      // ///////////////////////////////////////////////////////////////////////
      // NOTE: Perform customisation on the retrieved form values here if you wish.
      // ///////////////////////////////////////////////////////////////////////
		// XXS Filtering enforced for user input
		$data['id']		= $this->input->post('id', TRUE);
		$data['role_id']		= $this->input->post('role_id', TRUE);
		$data['username']		= $this->input->post('username', TRUE);
		$data['password']		= $this->input->post('password', TRUE);
		$data['email']		= $this->input->post('email', TRUE);
		$data['banned']		= $this->input->post('banned', TRUE);
		$data['ban_reason']		= $this->input->post('ban_reason', TRUE);
		$data['newpass']		= $this->input->post('newpass', TRUE);
		$data['newpass_key']		= $this->input->post('newpass_key', TRUE);
		$data['newpass_time']		= $this->input->post('newpass_time', TRUE);
		$data['last_ip']		= $this->input->post('last_ip', TRUE);
		$data['last_login']		= $this->input->post('last_login', TRUE);
		$data['created']		= $this->input->post('created', TRUE);
		$data['modified']		= $this->input->post('modified', TRUE);

      return $data;

   }

}
?>