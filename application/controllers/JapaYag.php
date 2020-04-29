<?php

	class JapaYag extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
			$this->load->model('JapaYagModel');
		}

		function saveJapa(){
			$japaNumber = $this->input->post('japanumber');
			$this->form_validation->set_rules('japanumber','Japa Number', 'trim|required',
														array('required'=>'%s is required'));
			if($this->form_validation->run()){
				if($this->JapaYagModel->saveJapa($japaNumber)){
					$this->session->set_flashdata('success', 'Your Japa saved');
					return redirect('my_japa_mala');
				}
				else{
					$this->session->set_flashdata('error', 'Japa could not be saved');
					return redirect('my_japa_mala');
				}
			}
			else{
				$this->load->view('my_japa_mala');
			}
		}
		
		function updateJapa(){
			$japaNumber = $this->input->post('japanumber');
			$this->form_validation->set_rules('japanumber','Japa Number', 'trim|required',
														array('required'=>'%s is required'));
			if($this->form_validation->run()){
				if($this->JapaYagModel->updateJapa($japaNumber)){
					$this->session->set_flashdata('success', 'Your Japa Updated');
					return redirect('my_japa_mala');
				}
				else{
					$this->session->set_flashdata('error', 'Japa could not be updated');
					return redirect('my_japa_mala');
				}
			}
			else{
				$this->session->set_flashdata('error', 'Japa Number Field Can not be empty');
				return redirect('my_japa_mala');
			}
		}

		function collectReward(){
			$this->form_validation->set_rules('star','star Field', 'trim|required');
			if($this->form_validation->run()){
				$post_data = $this->input->post();
				if($this->JapaYagModel->saveClaimReward($post_data['star'])){
					$this->session->set_flashdata('success', "Reward Collected");
					return redirect('my_japa_mala');
				}
				else{
					$this->session->set_flashdata('error', "An Error Occured Collecting Reward");
					return redirect('my_japa_mala');		
				}
			}
			else{
				$this->session->set_flashdata('error', "An Error Occured");
				return redirect('my_japa_mala');
			}
		}
		
	}
?>