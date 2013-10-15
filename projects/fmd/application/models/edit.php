<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
*   Edit Model comment
*/
class Edit extends CI_Model {
	
	// The Constructor
	
	function __construct(){
		parent::__construct();


	} // end __construct

	public function getRow($id){
		$query = $this->db->get_where('sylvania', array('id' => $id));

		if($query->num_rows() > 0){
			return $query->result_array();
		}
	} // end getRow


	public function updateRow($data){
		$id = $data['id'];
		$newData = array(
			'division' => strip_tags($data['division']),
			'month_of_schedule' => strip_tags($data['month_of_schedule']),
			'week_of_schedule' => strip_tags($data['week_of_schedule']),
			'banner_store_number' => strip_tags($data['banner_store_number']),
			'oracle_store_number' => strip_tags($data['oracle_store_number']),
			'store_name' => strip_tags($data['store_name']),
			'address' => strip_tags($data['address']),
			'city' => strip_tags($data['city']),
			'state' => strtoupper(strip_tags($data['state'])),
			'last_update' => date('n/d/Y'),
			'updated_by' => ucfirst($data['username']),
			'special_note' => strip_tags($data['special_note'], '<h1><h2><h3><h4><h5><h6><p><a><b><u><em><strong><cite><sup><sub><div><pre><ol><ul><li><div>')
		);

		$this->db->where('id', $id);
		$query = $this->db->update('sylvania', $newData);

		if($query){
			return TRUE;
		} else {
			return FALSE;
		}

	} // end updateRow

	public function addRecord($data){
		$newData = array(
			'division' => strip_tags($data['division']),
			'month_of_schedule' => strip_tags($data['month_of_schedule']),
			'week_of_schedule' => strip_tags($data['week_of_schedule']),
			'banner_store_number' => strip_tags($data['banner_store_number']),
			'oracle_store_number' => strip_tags($data['oracle_store_number']),
			'store_name' => strip_tags($data['store_name']),
			'address' => strip_tags($data['address']),
			'city' => strip_tags($data['city']),
			'state' => strtoupper(strip_tags($data['state'])),
			'last_update' => date('n/d/Y'),
			'updated_by' => ucfirst($data['username']),
			'special_note' => strip_tags($data['special_note'], '<h1><h2><h3><h4><h5><h6><p><a><b><u><em><strong><cite><sup><sub><div><pre><ol><ul><li><div>')
		);

		$query = $this->db->insert('sylvania', $newData);
		if($query){
			redirect('admin');
		}else{
			return FALSE;
		}
	} // end addRecord

	public function deleteRecord($id){
		$id = strip_tags($id);
		$query = $this->db->delete('sylvania', array('id' => $id)); 
		if($query){
			redirect('admin');
		}else{
			return FALSE;
		}
	} // end deleteRecord
}

/* End of file Edit.php */
/* Location: ./application/models/some.php */