<?php

	class Authentication extends CI_Controller
	{
		function __construct(){
			parent::__construct();
			$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
			$this->load->model('UserModel');
		}

		function user_login(){
			$this->load->view('user/login');
		}

		function user_signup(){
			$this->load->view('user/signup');
		}

		function forgotPassword(){
			$this->load->view('user/forgotpassword');
		}

		function registerNewUser(){
			$userdata = $this->input->post();
			$this->form_validation->set_rules('name','Name','trim|required',
											array('required' => '%s is Required'));
			$this->form_validation->set_rules('email','Email','trim|required|valid_email',
											array('required' => '%s is Required'));
			$this->form_validation->set_rules('phone','Phone Number','trim|required|numeric',
											array('required' => '%s is Required'));
			$this->form_validation->set_rules('country','Country','trim|required',
											array('required' => '%s is Required'));
			$this->form_validation->set_rules('password','Password','trim|required',
											array('required' => '%s is Required'));
			$this->form_validation->set_rules('city','City','trim|required',
											array('required' => '%s is Required'));
			if($this->form_validation->run()){
				$result = $this->UserModel->registerNewUser($userdata);
				if($result == "ok"){

				if($this->session->userdata('redirect')){
				$this->session->set_flashdata('success','Welcome. Hare Krishna!');
				return redirect($this->session->userdata('redirect'));
				}

				$this->session->set_flashdata('success','You are Registered Successfully. Enjoy Your Shopping');
				return redirect('home');
			}
			else{
				$this->session->set_flashdata('error',$result);
				return redirect('user_signup');
			}
		}
		else{
			$this->load->view('user/signup');
		}
		}

		function validateUser(){
				$userdata = $this->input->post();
				$this->form_validation->set_rules('phoneEmail','Phone or Email','trim|required',
												array('required' => '%s is Required'));
				$this->form_validation->set_rules('password','Password','trim|required',
												array('required' => '%s is Required'));
				if($this->form_validation->run()){
					$result = $this->UserModel->validateUser($userdata);
					if($result == "ok"){
					if($this->session->userdata('redirect')){
						$this->session->set_flashdata('success','Welcome Back! You are in');
						return redirect($this->session->userdata('redirect'));
					}
					$this->session->set_flashdata('success','Hello User! You are in');
					return redirect('home');
				}
				else{
					$this->session->set_flashdata('error',$result);
					return redirect('user_login');
				}
			}
			else{
				$this->load->view('user/login');
			}
		}

		function recoverPassword(){
				$userdata = $this->input->post();
				$this->form_validation->set_rules('email','Email','trim|required',
												array('required' => '%s is Required'));
				if($this->form_validation->run()){
					$result = $this->UserModel->recoverPassword($userdata);
					if($result == "mail_sent"){
					$this->session->set_flashdata('success','A Recovery Link has sent on your Registered Email Address');
					return redirect('user_login');
				}
				else{
					$this->session->set_flashdata('error',$result);
					return redirect('forgotPassword');
				}
			}
			else{
				$this->load->view('user/forgotpassword');
			}
		}

		function newPassword($key,$email)
		{
			$result = $this->UserModel->newPassword($key,$email);
			if($result == 1){
				$this->load->view('user/newPassword');
			}
			else{
				$this->session->set_flashdata('warning','You are using Invalid Link or an Expired Link');
				return redirect('user_login');
			}
		}

		function setNewPassword()
		{
				$userdata = $this->input->post();
				$this->form_validation->set_rules('password','Password','trim|required',
												array('required' => '%s is Required'));
				if($this->form_validation->run()){
					$result = $this->UserModel->setNewPassword($userdata);
					if($result){
					$this->session->set_flashdata('success','Your Password Changed :) Please Login To Continue');
					return redirect('user_login');
				}
				else{
					$this->session->set_flashdata('error','Password Could not updated :( Try again');
					return redirect('user_login');
				}
			}
			else{
				$this->load->view('user/forgotpassword');
			}

		}

		function logout()
		{
			$this->session->unset_userdata('userData');
			$this->session->unset_userdata('redirect');
			$this->session->set_flashdata('success','User Logout');
			return redirect('home');
		}

	}
?>