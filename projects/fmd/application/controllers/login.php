<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
*   Login authentication controller
*/
class Login extends CI_Controller {

	function __construct(){
		parent::__construct();


	} // end __construct

	/**
	 * Load views for login
	 */
	public function index()
	{

		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');
		
	}

	/*
	* If authentication credentials are provided, attempt to authenticate user else redirect to the login screen.
	*/

	public function auth(){	
		$data = isset($_POST) ? $_POST : NULL;
		if(isset($data)){
			$loggedIn = $this->auth_model->getUser($data);
			if($loggedIn === FALSE){
				$error = 'Unable to log in';
				$this->load->view('header');
				$this->load->view('error');
				$this->load->view('login');
				$this->load->view('footer');
			}
		}
		else 
		{
			redirect('login');
		}

	} // end login

	/*
	*  Function to provide user ability to reset their password if they have forgotten it
	*/

	public function forgot_password(){

		$this->load->view('header');
		$this->load->view('forgot_password_view');
		$this->load->view('footer');

	} // end forgot_password

}/* End of file Login.php */
/* Location: ./application/controllers/Login.php */