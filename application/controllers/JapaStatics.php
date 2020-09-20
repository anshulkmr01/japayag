<?php

	class JapaStatics extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
			$this->load->model('JapaYagModel');
		}

		function index()
		{
			$japa_data = $this->JapaYagModel->japaStatic();
			$this->load->view('japa_statics',['japa_statics'=>$japa_data]);
		}

		function JapaStatics_City($country)
		{
			$japa_data = $this->JapaYagModel->japaStaticCity($country);
			$this->load->view('japa_statics_city',['japa_statics'=>$japa_data]);
		}

	}
?>