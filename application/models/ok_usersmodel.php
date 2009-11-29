<?
class Ok_usersModel extends Model {
/**
 * MODULE NAME   : ok_usersmodel.php
 *
 * DESCRIPTION   : Ok_users model controller
 *
 * MODIFICATION HISTORY
 *   V1.0   2009-11-28 11:06 PM   - Pradesh Chanderpaul     - Created
 *
 * @package             ok_users
 * @subpackage          Ok_users model component Class
 * @author              Pradesh Chanderpaul
 * @copyright           Copyright (c) 2006-2007 DataCraft Software
 * @license             http://www.datacraft.co.za/codecrafter/license.html
 * @link                http://www.datacraft.co.za/codecrafter/
 * @since               Version 1.0
 * @filesource
 */

var $table_record_count;

var $id;
var $role_id;
var $username;
var $password;
var $email;
var $banned;
var $ban_reason;
var $newpass;
var $newpass_key;
var $newpass_time;
var $last_ip;
var $last_login;
var $created;
var $modified;


   function Ok_usersModel()
   {
      parent::Model();
      $this->obj =& get_instance();

      // ///////////////////////////////////////////////////////////////////////
      // NOTE: Load database libraries and other libraries and helpers. The
      // NOTE: ...generated code loads the database library as it requires it,
      // NOTE: ...but you may prefer to load here or autoload, In this case
      // NOTE: ...remember to delete all explicit load()s.
      // ///////////////////////////////////////////////////////////////////////

      // Initialise or clear class variables.
      // NOTE: Not particularly useful unless you are using model persistence
      $this->_init_Ok_users();

   }

   // //////////////////////////////////////////////////////////////////////////
   // Function: findAll()
   //
   // Description: Retrieves and returns data listing from the database
   //
   // //////////////////////////////////////////////////////////////////////////
   function findAll($start = NULL, $count = NULL) {
      return $this->find(NULL, $start, $count);
   }

//   function findById($key_value) {
//      return $this->find(array('id' => '$key_value'));
//   }

   function findByFilter($filter_rules, $start = NULL, $count = NULL) {
      return $this->find($filter_rules, $start, $count);
   }

   function find($filters = NULL, $start = NULL, $count = NULL) {

      $results = array();

      // Load the database library
      $this->load->database();

      // ///////////////////////////////////////////////////////////////////////
      // Make a note of the current table record count
      // ///////////////////////////////////////////////////////////////////////
      $this->table_record_count = $this->db->count_all( 'ok_users' );


      // Filter could be an array or filter values or an SQL string.
      $where_clause = '';
      if ($filters) {
         if ( is_string($filters) ) {
            $where_clause = $filters;
         }
         elseif ( is_array($filters) ) {
            // Build your filter rules
            if ( count($filters) > 0 ) {
               foreach ($filters as $field => $value) {
                  $filter_list[] = " $field = '$value' ";
               }
               $where_clause = ' WHERE ' . join(' AND ', $filter_list );
            }
         }

      }

      $limit_clause = '';
      if ($start) {
         if ($count) {
            $limit_clause = " LIMIT $start, $count ";
         }
         else {
            $limit_clause = " LIMIT $start ";
         }
      }

      // Build up the SQL query string and run the query
      $sql = 'SELECT * FROM ok_users ' . $where_clause . $limit_clause;

      $query = $this->db->query($sql);

      if ($query->num_rows() > 0) {
         // ////////////////////////////////////////////////////////////////////
         // NOTE: At this stage you could return the entire result set, like:
         // NOTE: ...return $query->result_array();
         // NOTE: ...The generated code loops through the result set to provide
         // NOTE: ...the oppurtunity to provide further customisations on the
         // NOTE: ...code (especially if you are generating in verbose mode).
         // ////////////////////////////////////////////////////////////////////

         foreach ($query->result_array() as $row)      // Go through the result set
         {
            // Build up a list for each column from the database and place it in
            // ...the result set

			$query_results['id']		 = $row['id'];
			$query_results['role_id']		 = $row['role_id'];
			$query_results['username']		 = $row['username'];
			$query_results['password']		 = $row['password'];
			$query_results['email']		 = $row['email'];
			$query_results['banned']		 = $row['banned'];
			$query_results['ban_reason']		 = $row['ban_reason'];
			$query_results['newpass']		 = $row['newpass'];
			$query_results['newpass_key']		 = $row['newpass_key'];
			$query_results['newpass_time']		 = $row['newpass_time'];
			$query_results['last_ip']		 = $row['last_ip'];
			$query_results['last_login']		 = $row['last_login'];
			$query_results['created']		 = $row['created'];
			$query_results['modified']		 = $row['modified'];

			$results[]		 = $query_results;


         }

      }

      return $results;

   }


   // TODO: this won't be possible if there is no primary key for the table.
   function retrieve_by_pkey($idField) {

      $results = array();

      // Load  the db library
      $this->load->database();

      $query = $this->db->query("SELECT * FROM ok_users WHERE id = '$idField' LIMIT 1");

      if ($query->num_rows() > 0) {
         $row = $query->row_array();

		$query_results['id']		 = $row['id'];
		$query_results['role_id']		 = $row['role_id'];
		$query_results['username']		 = $row['username'];
		$query_results['password']		 = $row['password'];
		$query_results['email']		 = $row['email'];
		$query_results['banned']		 = $row['banned'];
		$query_results['ban_reason']		 = $row['ban_reason'];
		$query_results['newpass']		 = $row['newpass'];
		$query_results['newpass_key']		 = $row['newpass_key'];
		$query_results['newpass_time']		 = $row['newpass_time'];
		$query_results['last_ip']		 = $row['last_ip'];
		$query_results['last_login']		 = $row['last_login'];
		$query_results['created']		 = $row['created'];
		$query_results['modified']		 = $row['modified'];

		$results		 = $query_results;


      }
      else {
         $results = false;
      }

      return $results;
   }


   function add( $data ) {

      // Load the database library
      $this->load->database();

      // Build up the SQL query string
      $sql = $this->db->insert_string('ok_users', $data);

      $query = $this->db->query($sql);

      return $this->db->insert_id();
   }

   function modify($keyvalue, $data) {


      // Load the database library
      $this->load->database();

      // Build up the SQL query string
      $where = "id = $keyvalue";
      $sql = $this->db->update_string('ok_users', $data, $where);

      $query = $this->db->query($sql);

   }

   function delete_by_pkey($idField)
   {
      // Load  the db library
      $this->load->database();

      // ///////////////////////////////////////////////////////////////////////
      // TODO: Just to eliminate nasty mishaps, the delete query has been
      // TODO: ...deliberately disabled. Enable it if you mean to by uncommenting
      // TODO: ...the query function call below
      // ///////////////////////////////////////////////////////////////////////
      // $query = $this->db->query("DELETE FROM ok_users WHERE id = '$idField' ");

     return true;

   }

	function get_Id() {
		return $this->id;	}

	function set_Id($id) {
		$this->id = $id;	}

	function get_Role_id() {
		return $this->role_id;	}

	function set_Role_id($role_id) {
		$this->role_id = $role_id;	}

	function get_Username() {
		return $this->username;	}

	function set_Username($username) {
		$this->username = $username;	}

	function get_Password() {
		return $this->password;	}

	function set_Password($password) {
		$this->password = $password;	}

	function get_Email() {
		return $this->email;	}

	function set_Email($email) {
		$this->email = $email;	}

	function get_Banned() {
		return $this->banned;	}

	function set_Banned($banned) {
		$this->banned = $banned;	}

	function get_Ban_reason() {
		return $this->ban_reason;	}

	function set_Ban_reason($ban_reason) {
		$this->ban_reason = $ban_reason;	}

	function get_Newpass() {
		return $this->newpass;	}

	function set_Newpass($newpass) {
		$this->newpass = $newpass;	}

	function get_Newpass_key() {
		return $this->newpass_key;	}

	function set_Newpass_key($newpass_key) {
		$this->newpass_key = $newpass_key;	}

	function get_Newpass_time() {
		return $this->newpass_time;	}

	function set_Newpass_time($newpass_time) {
		$this->newpass_time = $newpass_time;	}

	function get_Last_ip() {
		return $this->last_ip;	}

	function set_Last_ip($last_ip) {
		$this->last_ip = $last_ip;	}

	function get_Last_login() {
		return $this->last_login;	}

	function set_Last_login($last_login) {
		$this->last_login = $last_login;	}

	function get_Created() {
		return $this->created;	}

	function set_Created($created) {
		$this->created = $created;	}

	function get_Modified() {
		return $this->modified;	}

	function set_Modified($modified) {
		$this->modified = $modified;	}



      // Function used to initilialise class variables.
      // NOTE: Not particularly useful unless you are using model persistence
      // NOTE: You may want to add default values here.
      function _init_Ok_users()
      {
		$this->id = "";
		$this->role_id = "";
		$this->username = "";
		$this->password = "";
		$this->email = "";
		$this->banned = "";
		$this->ban_reason = "";
		$this->newpass = "";
		$this->newpass_key = "";
		$this->newpass_time = "";
		$this->last_ip = "";
		$this->last_login = "";
		$this->created = "";
		$this->modified = "";

      }

      // Initialize all your default variables here
      // Function used to initilialise class variables.
      // NOTE: Not particularly useful unless you are using model persistence
      // NOTE: You could add default values here, but fields are generally set empty
      function _emptyOk_users()
      {
		$this->id = "";
		$this->role_id = "";
		$this->username = "";
		$this->password = "";
		$this->email = "";
		$this->banned = "";
		$this->ban_reason = "";
		$this->newpass = "";
		$this->newpass_key = "";
		$this->newpass_time = "";
		$this->last_ip = "";
		$this->last_login = "";
		$this->created = "";
		$this->modified = "";

      }

}

?>
