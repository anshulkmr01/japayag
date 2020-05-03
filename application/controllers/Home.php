<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('JapaYagModel');
		$this->GMTDate = gmdate('m-d-Y');
	}

	public function index()
	{
		$japaCount = $this->JapaYagModel->globalJapaCount();
		$todayJapaCount = $this->JapaYagModel->todayJapaCount();
		$maxJapaCountCity = $this->JapaYagModel->maxJapaCountCity();
		$totalJapaData = $this->JapaYagModel->totalJapaData();

		foreach ($totalJapaData as $key => $value) {
			if($value['date'] == $this->GMTDate){
				$totalJapaData[$key]['todayJapa'] = $totalJapaData[$key]['japa'];
			}
			else{
				$totalJapaData[$key]['todayJapa'] = 0;	
			}
		}

		$combined = array();
		foreach( $totalJapaData as $values )  {
		  if( ( $key = array_search( $values['city'], array_column( $combined, 'city') ) ) !== false )  {
		    $combined[$key]['japa'] += $values['japa'];
		    $combined[$key]['todayJapa'] += $values['todayJapa'];
		  } else {
		    $combined[] = $values;
		  }
		}

		$japaDataByDate = array();		

		foreach ($totalJapaData as $key => $value) {
			$japaDataByDate[] = ['label'=>$value['date'],'y'=>$value['japa']];
		}

		$result = array();
		foreach($japaDataByDate as $k => $v) {
		    $label = $v['label'];
		    $result[$label][] = $v['y'];
		}

		$assembeledData = array();
		foreach($result as $key => $value) {
		    $assembeledData[] = array('label' => $key, 'y' => array_sum($value));
		}

		$this->load->view('home',['japaCount'=>$japaCount, 'todayJapaCount'=>$todayJapaCount, 'maxJapaCountCity'=>$maxJapaCountCity, 'japaTotalData'=>$assembeledData, 'japaDataCombined'=>$combined]);
	}

	public function my_japa_mala()
	{
		if(!$this->session->userdata('userData')){
			$this->session->set_userdata('redirect',current_url());
			$this->session->set_flashdata('warning','Please Login to Continue');
			return redirect('user_login');
		}

		$userTodayJapa = $this->JapaYagModel->userTodayJapa();
		$todayJapa  = $this->JapaYagModel->isTodayJapaExist();
		$totalStars = $this->JapaYagModel->totalStars();
		$this->load->view('my_japa_mala',['todayJapa'=>$todayJapa,'userTodayJapa'=>$userTodayJapa,'totalStars'=>$totalStars]);
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
