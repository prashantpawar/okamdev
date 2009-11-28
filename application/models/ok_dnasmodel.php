<?
class Ok_dnasModel extends Model {
/**
 * MODULE NAME   : ok_dnasmodel.php
 *
 * DESCRIPTION   : Ok_dnas model controller
 *
 * MODIFICATION HISTORY
 *   V1.0   2009-11-28 02:49 AM   - Pradesh Chanderpaul     - Created
 *
 * @package             ok_dnas
 * @subpackage          Ok_dnas model component Class
 * @author              Pradesh Chanderpaul
 * @copyright           Copyright (c) 2006-2007 DataCraft Software
 * @license             http://www.datacraft.co.za/codecrafter/license.html
 * @link                http://www.datacraft.co.za/codecrafter/
 * @since               Version 1.0
 * @filesource
 */

var $table_record_count;

var $id;
var $userid;
var $question_id;
var $answer_id;
var $relevance_id;
var $answer1_id;
var $answer2_id;
var $answer3_id;
var $answer4_id;
var $answer5_id;
var $answer6_id;


   function Ok_dnasModel()
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
      $this->_init_Ok_dnas();

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
      $this->table_record_count = $this->db->count_all( 'ok_dnas' );


      // Filter could be an array or filter values or an SQL string.
      $where_clause = '';
      if ($filters) {
         if ( is_string($filters) ) {
            $where_clause = $filters;
         }
         elseif ( is_array($filters) ) {
            // Build your filter rules
            // ///////////////////////////////////////////////////////////////////////
            // NOTE: There are many ways to build the select code. (For example, you
            // NOTE: ...just pass the $filters array to where() like:
            // NOTE: ...   $this->db->where($filters);
            // NOTE: ...instead of the foreach loop below. However, it's added to
            // NOTE: ...allow further customisation.
            // ///////////////////////////////////////////////////////////////////////
            if ( count($filters) > 0 ) {
               foreach ($filters as $field => $value) {
                  $this->db->where($field, $value);
               }
            }
         }

      }

      if ($start) {
         if ($count) {
            $this->db->limit($start, $count);
         }
         else {
            $this->db->limit($start);
         }
      }


      // ///////////////////////////////////////////////////////////////////////
      // NOTE: If you want the results ordered by a specific field, do it here.
      // ///////////////////////////////////////////////////////////////////////
      // $this->db->orderby();

      $query = $this->db->get( 'ok_dnas' );

      if ($query->num_rows() > 0) {
         // return $query->result_array();
         foreach ($query->result_array() as $row)      // Go through the result set
         {
            // Build up a list for each column from the database and place it in
            // ...the result set

			$query_results['id']		 = $row['id'];
			$query_results['userid']		 = $row['userid'];
			$query_results['question_id']		 = $row['question_id'];
			$query_results['answer_id']		 = $row['answer_id'];
			$query_results['relevance_id']		 = $row['relevance_id'];
			$query_results['answer1_id']		 = $row['answer1_id'];
			$query_results['answer2_id']		 = $row['answer2_id'];
			$query_results['answer3_id']		 = $row['answer3_id'];
			$query_results['answer4_id']		 = $row['answer4_id'];
			$query_results['answer5_id']		 = $row['answer5_id'];
			$query_results['answer6_id']		 = $row['answer6_id'];

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

      $this->db->where( 'id', "$idField");
      $this->db->limit( 1 );
      $query = $this->db->get( 'ok_dnas' );


      if ($query->num_rows() > 0) {
         $row = $query->row_array();

		$query_results['id']		 = $row['id'];
		$query_results['userid']		 = $row['userid'];
		$query_results['question_id']		 = $row['question_id'];
		$query_results['answer_id']		 = $row['answer_id'];
		$query_results['relevance_id']		 = $row['relevance_id'];
		$query_results['answer1_id']		 = $row['answer1_id'];
		$query_results['answer2_id']		 = $row['answer2_id'];
		$query_results['answer3_id']		 = $row['answer3_id'];
		$query_results['answer4_id']		 = $row['answer4_id'];
		$query_results['answer5_id']		 = $row['answer5_id'];
		$query_results['answer6_id']		 = $row['answer6_id'];

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

      $this->db->insert('ok_dnas', $data);

      return $this->db->insert_id();
   }

   function modify($keyvalue, $data) {

      // Load the database library
      $this->load->database();

      $this->db->where('id', $keyvalue);
      $this->db->update('ok_dnas', $data);

   }

   function delete_by_pkey($idField) {
      // Load  the db library
      $this->load->database();

      // ///////////////////////////////////////////////////////////////////////
      // TODO: Just to eliminate nasty mishaps, the delete query has been
      // TODO: ...deliberately disabled. Enable it if you mean to by uncommenting
      // TODO: ...the database calls below
      // ///////////////////////////////////////////////////////////////////////
      // $this->db->where('id', $idField);
      // $this->db->delete('ok_dnas');

      return true;

   }

	function get_Id() {
		return $this->id;	}

	function set_Id($id) {
		$this->id = $id;	}

	function get_Userid() {
		return $this->userid;	}

	function set_Userid($userid) {
		$this->userid = $userid;	}

	function get_Question_id() {
		return $this->question_id;	}

	function set_Question_id($question_id) {
		$this->question_id = $question_id;	}

	function get_Answer_id() {
		return $this->answer_id;	}

	function set_Answer_id($answer_id) {
		$this->answer_id = $answer_id;	}

	function get_Relevance_id() {
		return $this->relevance_id;	}

	function set_Relevance_id($relevance_id) {
		$this->relevance_id = $relevance_id;	}

	function get_Answer1_id() {
		return $this->answer1_id;	}

	function set_Answer1_id($answer1_id) {
		$this->answer1_id = $answer1_id;	}

	function get_Answer2_id() {
		return $this->answer2_id;	}

	function set_Answer2_id($answer2_id) {
		$this->answer2_id = $answer2_id;	}

	function get_Answer3_id() {
		return $this->answer3_id;	}

	function set_Answer3_id($answer3_id) {
		$this->answer3_id = $answer3_id;	}

	function get_Answer4_id() {
		return $this->answer4_id;	}

	function set_Answer4_id($answer4_id) {
		$this->answer4_id = $answer4_id;	}

	function get_Answer5_id() {
		return $this->answer5_id;	}

	function set_Answer5_id($answer5_id) {
		$this->answer5_id = $answer5_id;	}

	function get_Answer6_id() {
		return $this->answer6_id;	}

	function set_Answer6_id($answer6_id) {
		$this->answer6_id = $answer6_id;	}



      // Function used to initilialise class variables.
      // NOTE: Not particularly useful unless you are using model persistence
      // NOTE: You may want to add default values here.
      function _init_Ok_dnas()
      {
		$this->id = "";
		$this->userid = "";
		$this->question_id = "";
		$this->answer_id = "";
		$this->relevance_id = "";
		$this->answer1_id = "";
		$this->answer2_id = "";
		$this->answer3_id = "";
		$this->answer4_id = "";
		$this->answer5_id = "";
		$this->answer6_id = "";

      }

      // Initialize all your default variables here
      // Function used to initilialise class variables.
      // NOTE: Not particularly useful unless you are using model persistence
      // NOTE: You could add default values here, but fields are generally set empty
      function _emptyOk_dnas()
      {
		$this->id = "";
		$this->userid = "";
		$this->question_id = "";
		$this->answer_id = "";
		$this->relevance_id = "";
		$this->answer1_id = "";
		$this->answer2_id = "";
		$this->answer3_id = "";
		$this->answer4_id = "";
		$this->answer5_id = "";
		$this->answer6_id = "";

      }

}

?>
