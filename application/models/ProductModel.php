<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductModel extends CI_Model {

	/**
	 * Product Create Model
	 */
	public function create() {
		$this->title = $_POST['title'];
		$this->description = $_POST['description'];
		$this->image = 'image.jpg';
		$this->status = '1';
		$this->timestamp = date('Y-m-d H:i:s');
		$this->db->insert('products', $this);
		
	}

	/**
	 * Product Read Model
	 */
	public function read() {
		$this->db->where('deleted_at', NULL);
		$query = $this->db->get('products')->result();
		return $query;
		
	}

	/**
	 * Product Edit Model
	 */
	public function edit() {
		$this->db->where('id', $_GET['pid']);
		$query = $this->db->get('products')->result();
		return $query;
		
	}

	/**
	 * Product Delete Model
	 */
	public function delete() {
		$this->deleted_at = date('Y-m-d H:i:s');
		$this->db->update('products', $this, array('id' => $_GET['pid']));
		
	}
}

?>
