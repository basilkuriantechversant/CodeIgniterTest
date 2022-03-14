<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

	/**
	 * Create Product View
	 */
	public function createView()
	{
		$data['sessionId'] = $this->session->userdata('uid');
		$this->load->view('header');
		$this->load->view('Admin/create', $data);
		$this->load->view('footer');
	}

	/**
	 * All Products View
	 */
	public function productsView()
	{
		$data['sessionId'] = $this->session->userdata('uid');
		$this->load->model('ProductModel');
		$data['productDetails'] = $this->ProductModel->read();
		$this->load->view('header');
		$this->load->view('Admin/homepage', $data);
		$this->load->view('footer');
	}

	/**
	 * Create Product
	 */
	public function create()
	{
		$this->load->model('ProductModel');
		$this->ProductModel->create();
		echo "<script>alert('Product Added'); window.location = '". site_url('productsView') ."'</script>";
	}

	/**
	 * Edit Product
	 */
	public function edit()
	{
		echo $_GET['pid'];
	}

	/**
	 * Delete Product
	 */
	public function delete()
	{
		$this->load->model('ProductModel');
		$this->ProductModel->delete();
		echo "<script>alert('Product Deleted'); window.location = '". site_url('productsView') ."'</script>";
	}
}
