<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
*   sylvania_model Model comment
*/
class Sylvania_model extends CI_Model {
	
	// The Constructor
	
	function __construct(){
		parent::__construct();


	} // end __construct

	/**
	 * sylvania_model Model Index function comment
	 */
	
	public function index(){
		
	}

	/*
	*	Function to display all rows in the Sylvania table
	*/

	public function get(){
		$query = $this->db->get('sylvania');
		if($query->num_rows() > 0){
			$rows = $query->result_array();
			header('Content-Type: application/json');
			$results = json_encode($rows);
			return $results;

		} else {
			return FALSE;
		}
	}

}

/* End of file sylvania_model.php */
/* Location: ./application/models/some.php */