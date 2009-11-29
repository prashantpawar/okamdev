<?
class Ok_user_autologinModel extends Model {
/**
 * MODULE NAME   : ok_user_autologinmodel.php
 *
 * DESCRIPTION   : Ok_user_autologin model controller
 *
 * MODIFICATION HISTORY
 *   V1.0   2009-11-28 11:09 PM   - Pradesh Chanderpaul     - Created
 *
 * @package             ok_user_autologin
 * @subpackage          Ok_user_autologin model component Class
 * @author              Pradesh Chanderpaul
 * @copyright           Copyright (c) 2006-2007 DataCraft Software
 * @license             http://www.datacraft.co.za/codecrafter/license.html
 * @link                http://www.datacraft.co.za/codecrafter/
 * @since               Version 1.0
 * @filesource
 */

var $table_record_count;

var $key_id;
var $user_id;
var $user_agent;
var $last_ip;
var $last_login;


   function Ok_user_autologinModel()
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
      $this->_init_Ok_user_autologin();

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
//      return $this->find(array('key_id' => '$key_value'));
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
      $this->table_record_count = $this->db->count_all( 'ok_user_autologin' );


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
      $sql = 'SELECT * FROM ok_user_autologin ' . $where_clause . $limit_clause;

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

			$query_results['key_id']		 = $row['key_id'];
			$query_results['user_id']		 = $row['user_id'];
			$query_results['user_agent']		 = $row['user_agent'];
			$query_results['last_ip']		 = $row['last_ip'];
			$query_results['last_login']		 = $row['last_login'];

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

      $query = $this->db->query("SELECT * FROM ok_user_autologin WHERE key_id = '$idField' LIMIT 1");

      if ($query->num_rows() > 0) {
         $row = $query->row_array();

		$query_results['key_id']		 = $row['key_id'];
		$query_results['user_id']		 = $row['user_id'];
		$query_results['user_agent']		 = $row['user_agent'];
		$query_results['last_ip']		 = $row['last_ip'];
		$query_results['last_login']		 = $row['last_login'];

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
      $sql = $this->db->insert_string('ok_user_autologin', $data);

      $query = $this->db->query($sql);

      return $this->db->insert_id();
   }

   function modify($keyvalue, $data) {


      // Load the database library
      $this->load->database();

      // Build up the SQL query string
      $where = "key_id = $keyvalue";
      $sql = $this->db->update_string('ok_user_autologin', $data, $where);

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
      // $query = $this->db->query("DELETE FROM ok_user_autologin WHERE key_id = '$idField' ");

     return true;

   }

	function get_Key_id() {
		return $this->key_id;	}

	function set_Key_id($key_id) {
		$this->key_id = $key_id;	}

	function get_User_id() {
		return $this->user_id;	}

	function set_User_id($user_id) {
		$this->user_id = $user_id;	}

	function get_User_agent() {
		return $this->user_agent;	}

	function set_User_agent($user_agent) {
		$this->user_agent = $user_agent;	}

	function get_Last_ip() {
		return $this->last_ip;	}

	function set_Last_ip($last_ip) {
		$this->last_ip = $last_ip;	}

	function get_Last_login() {
		return $this->last_login;	}

	function set_Last_login($last_login) {
		$this->last_login = $last_login;	}



      // Function used to initilialise class variables.
      // NOTE: Not particularly useful unless you are using model persistence
      // NOTE: You may want to add default values here.
      function _init_Ok_user_autologin()
      {
		$this->key_id = "";
		$this->user_id = "";
		$this->user_agent = "";
		$this->last_ip = "";
		$this->last_login = "";

      }

      // Initialize all your default variables here
      // Function used to initilialise class variables.
      // NOTE: Not particularly useful unless you are using model persistence
      // NOTE: You could add default values here, but fields are generally set empty
      function _emptyOk_user_autologin()
      {
		$this->key_id = "";
		$this->user_id = "";
		$this->user_agent = "";
		$this->last_ip = "";
		$this->last_login = "";

      }

}

?>
