<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
*   authenticate_user_model Model checks if user has entered the correct email/secret phrase combo
*/
class Authenticate_user_model extends CI_Model {
	
	// The Constructor
	
	function __construct(){
		parent::__construct();


	} // end __construct

	/**
	 * 
	 */
	
	public function validate($data){
		$email = strip_tags($data['email']);
		$secret_phrase = strip_tags($data['secret_phrase']);
		$username = $data['username'];

		$sql = "SELECT * FROM users WHERE username = ? AND email = ? AND secret_phrase = ?";
		$query  = $this->db->query($sql, array($username, $email, $secret_phrase));

		if($query->num_rows() > 0){
			$result = array('is_true' => TRUE, 'username' => $username);
			return $result;
			//return TRUE;
		} else {
			return FALSE;
		}
	}

	public function reset($data){
		$pass = $data['password'];
		$salt = date('mYs');
		$password = MD5($salt . $pass);
		$username = $data['username'];
		
		// update password for user in database, then log user out.
        $newData = array('password' => $password, 'salt' => $salt);
        $this->db->where('username',  $username);
        $query = $this->db->update('users', $newData);

        // if query executes successfully log user out so they can login with new password
        if($query){
        	redirect('logout');
        }
        else {
        	return FALSE;
        }
	}

}

/* End of file authenticate_user_model.php */
/* Location: ./application/models/some.php */