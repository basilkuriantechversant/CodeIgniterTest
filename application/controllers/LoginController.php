<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

	/**
	 * View Login Page
	 */
	public function loginView()
	{
		$this->load->view('header');
		$this->load->view('Login/login');
		$this->load->view('footer');
	}

	/**
	 * View Register Page
	 */
	public function registerView()
	{
		$this->load->view('header');
		$this->load->view('Login/register');
		$this->load->view('footer');
	}

	/**
	 * User Registration Functionality
	 */
	public function register()
	{
		$this->load->model('UserModel');
		$emailCheck = $this->UserModel->emailCheck();
		if($emailCheck == NULL){
			$this->UserModel->insert();
			echo "<script>alert('User Registered Successfull. Please Login'); window.location = '". site_url() ."'</script>";
		}else{
			echo "<script>alert('Email Already Exist'); window.location = '". site_url('registerView') ."'</script>";
		}
	}

	/**
	 * User Login Functionality
	 */
	public function login()
	{
		$this->load->model('LoginModel');
		$userDetails = $this->LoginModel->login();

		if($userDetails == NULL) {
			echo "<script>alert('Inavlid User'); window.location = '". site_url() ."'</script>";
		}else{
			if($userDetails->role == '1'){
				$data['sessionId'] = $userDetails->id;
				$this->session->set_userdata('uid', $userDetails->id);
				$this->load->model('ProductModel');
				$data['productDetails'] = $this->ProductModel->read();
				$this->load->view('header');
				$this->load->view('Admin/homepage', $data);
				$this->load->view('footer');
			}else{
				$this->session->set_userdata('uid', $userDetails->id);
				$this->load->view('header');
				$this->load->view('User/homepage');
				$this->load->view('footer');
			}
		}
	}

	/**
	 * User Logout Functionality
	 */
	public function logout()
	{
		$this->session->unset_userdata('uid');
		redirect(site_url());
	}
}
