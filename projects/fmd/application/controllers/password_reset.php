<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
*   Password Reset Controller
*/
class Password_reset extends CI_Controller {

	function __construct(){
		parent::__construct();


	} // end __construct

	/*
	* Load views for password reset
	*/

	public function index()
	{
		$this->load->view('header');
		$this->load->view('password_reset_view');
		$this->load->view('footer');
	}

	public function authenticate_user(){

		/* Rules for form validation */
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');		
		$this->form_validation->set_rules('secret_phrase', 'Secret Phrase', 'trim|required');

		/* Check if form validation passed, then call function for authenticating user else throw error */
		if ($this->form_validation->run() == FALSE){
			$this->load->view('header');
			$this->load->view('password_reset_view');
			$this->load->view('footer');
		} else {	

			$this->load->model('authenticate_user_model');
			$data = $_POST;
			$data['validated'] = $this->authenticate_user_model->validate($data);
			// once user is validated pass the variable back to the view to show password reset fields
			$this->load->view('header');
			$this->load->view('password_reset_view', array('data' => $data));
			$this->load->view('footer');

		}
	}


	public function reset(){
		$this->form_validation->set_rules('password', 'Password', 'trim|required|matches[passconf]');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required');

		if ($this->form_validation->run() == FALSE){
			$this->load->view('header');
			$this->load->view('password_reset_view');
			$this->load->view('footer');
		} else {	
			// once passwords have passed the form validation check, update user's password in the database
			$this->load->model('authenticate_user_model');
			$data = $_POST;
			$this->authenticate_user_model->reset($data);
		}
	}

}

/* End of file Password_reset.php */
/* Location: ./application/controllers/Password_reset.php */