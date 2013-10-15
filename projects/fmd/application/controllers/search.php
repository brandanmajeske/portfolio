<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
*   Search Controller
*/
class Search extends CI_Controller {

	function __construct(){
		parent::__construct();


	} // end __construct

	/**
	 * load views for Search page
	 */
	public function index()
	{	

		$this->load->view('header');
		$this->load->view('search');
		$this->load->view('footer');
	}

	public function displayAll(){
		$this->load->model('sylvania_model');
		$data = $this->sylvania_model->get();

		print_r($data);
	}
}

/* End of file Search.php */
/* Location: ./application/controllers/Search.php */