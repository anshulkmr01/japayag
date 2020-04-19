<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('JapaYagModel');
	}

	public function index()
	{
		$japaCount = $this->JapaYagModel->globalJapaCount();
		$todayJapaCount = $this->JapaYagModel->todayJapaCount();
		$maxJapaCountCity = $this->JapaYagModel->maxJapaCountCity();
		$this->load->view('home',['japaCount'=>$japaCount, 'todayJapaCount'=>$todayJapaCount, 'maxJapaCountCity'=>$maxJapaCountCity]);
	}

	public function my_japa_mala()
	{
		if(!$this->session->userdata('userData')){
			$this->session->set_userdata('redirect',current_url());
			$this->session->set_flashdata('warning','Please Login to Continue');
			return redirect('user_login');
		}

		$userTodayJapa = $userTodayJapa = $this->JapaYagModel->userTodayJapa();
		$todayJapa = $isTodayJapaExist = $this->JapaYagModel->isTodayJapaExist();
		$this->load->view('my_japa_mala',['todayJapaExist'=>$todayJapa,'userTodayJapa'=>$userTodayJapa]);
	}

	public function settings()
	{
		if(!$this->session->userdata('userData')){
			$this->session->set_userdata('redirect',current_url());
			$this->session->set_flashdata('warning','Please Login to Continue');
			return redirect('user_login');
		}
		$this->load->view('settings');
	}

	public function yoga_kirtan()
	{
			// $myApiKey="AIzaSyC65JrWDDCZkL-QV0tvc3hIKACAHVXwLLQ"; // Provide your API Key
			// $myChannelID="UC36DKuFYKpcparUt0nI9y4w"; // Provide your Channel ID
			$myApiKey="AIzaSyA1bSz7tQOcH0IUXJ649P1-jWI019sPl6Q"; // Provide your API Key
			$myChannelID="UCKXwTD1-JJOBkj6ohCs7PRg"; // Provide your Channel ID
			
			$maxResults="10"; // Number of results to display
			 
			// Make an API call to store list of videos to JSON variable
			$myQuery = "https://www.googleapis.com/youtube/v3/search?key=$myApiKey&channelId=$myChannelID&part=snippet,id&order=date&maxResults=20";//
			$myQueryForLatest = "https://www.googleapis.com/youtube/v3/search?key=$myApiKey&channelId=$myChannelID&part=snippet,id&order=date&maxResults=1";//
			$videoList = file_get_contents($myQuery);
			 
			$videoListForLatest = file_get_contents($myQueryForLatest);
			 
			// Convert JSON to PHP Array
			$decoded = json_decode($videoList, true);
			$decodedForLatest = json_decode($videoListForLatest, true);

		$this->load->view('yoga_kirtan',['decoded'=>$decoded, 'decodedForLatest'=>$decodedForLatest]);
	}
}
