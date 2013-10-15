<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
*   Admin Controller
*/
class Admin extends CI_Controller {

	/**
	 * Admin Controller Index First check if user is logged in, reroute to login if user not logged in.
	 */
	
	public function index($error = null){
		$user_data  = $this->session->all_userdata();
		$username = $user_data['username'];
		$this->load->model('profile_model');

		if($this->session->userdata('logged_in')){
			$this->load->view('header');
			$profile = $this->profile_model->getUser($username);
			$this->load->view('admindash', array('user_data' => $user_data, 'profile' => $profile));
			$this->load->view('footer');
		} else {
			redirect('login');
		}		
	} // end index

	public function edit($id){
		$this->load->model('edit');
		$data = $this->edit->getRow($id);


		if($this->session->userdata('logged_in')){

		$this->load->view('header');
		$this->load->view('edit', array('data' => $data));
		$this->load->view('footer');
		
		} else {
			redirect('login');
		}
	}

	public function update(){
		$data = $_POST;
		$this->load->model('edit');
		$update = $this->edit->updateRow($data);

		if($update === TRUE){
			redirect('admin');
		}
	} // end update

	public function add(){
		$this->load->view('header');
		$this->load->view('add');
		$this->load->view('footer');
	}

	public function addNew(){
		$this->form_validation->set_rules("division", "Division", 'trim|required|alpha');
		$this->form_validation->set_rules("month_of_schedule", "Month of Schedule", 'trim|required');
		$this->form_validation->set_rules("week_of_schedule", "Week of Schedule", 'trim|required|numeric'); 
		$this->form_validation->set_rules("banner_store_number", "Banner Store Number", 'trim|required|numeric|is_unique[sylvania.banner_store_number]');
		$this->form_validation->set_rules("oracle_store_number", "Oracle Store Number", 'trim|required|numeric|is_unique[sylvania.oracle_store_number]');
		$this->form_validation->set_rules("store_name","Store Name", 'trim|required|alpha');
		$this->form_validation->set_rules("address", "Address", 'trim|required');
		$this->form_validation->set_rules("city", "City", 'trim|required|alpha');	
		$this->form_validation->set_rules("state", "State", 'trim|required|min_length[2]|max_length[2]');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('header');
			$this->load->view('add');
			$this->load->view('footer');
		} else {
			$data = $_POST;
			$this->load->model('edit');
			$query = $this->edit->addRecord($data);
			if($query === FALSE){
			$error = "<p class='alert alert-error'>Something went wrong! That record was not added.</p>";
			$this->load->view('header');
			$this->load->view('add', array('error' => $error));
			$this->load->view('footer');
			}
		}
	} //end addNew

	public function delete($id){
		$this->load->model('edit');
		$query = $this->edit->deleteRecord($id);
		if($query === FALSE){
			$error = "<p class='alert alert-error'>Something went wrong! That record was not deleted.</p>";
			$this->load->view('header');
			$this->load->view('edit', array('error' => $error));
			$this->load->view('footer');
		}
	}

}
/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */