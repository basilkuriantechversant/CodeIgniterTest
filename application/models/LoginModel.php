<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model {

	/**
	 * User Login Model
	 */
	public function login() {
		$this->db->where('email', $_POST['email']);
		$this->db->where('password', $_POST['password']);
		$query = $this->db->get('user')->row();
		return $query;
		
	}
}

?>
