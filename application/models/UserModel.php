<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

	/**
	 * User Details Insert Model
	 */
	public function insert() {
		$this->name = $_POST['name'];
		$this->email = $_POST['email'];
		$this->password = $_POST['password'];
		$this->role = '2';
		$this->db->insert('user', $this);
	}

	/**
	 * User Email Validation Model
	 */
	public function emailCheck() {
		$this->db->where('email', $_POST['email']);
		$query = $this->db->get('user')->row();
		return $query;
	}
}

?>
