<?php
	class JapaYagModel extends CI_Model
	{
		function __construct()
		{
			$this->userData = array();
			$this->GMTDate = gmdate('m-d-Y');
			$this->userData = $this->session->userdata('userData');
		}

		function saveJapa($japaNumber)
		{
			$japaData['japa'] = $japaNumber;
			$japaData['userID'] = $this->userData['ID'];
			$japaData['date'] = $this->GMTDate;
			$japaData['city'] = $this->userData['city'];
			$japaData['country'] = $this->userData['country'];
			return $this->db->insert('japayag',$japaData);
		}

		function updateJapa($japaNumber)
		{
			$japaData['japa'] = $japaNumber;
			$japaData['userID'] = $this->userData['ID'];
			$todayDate = $this->GMTDate;
			$japaData['city'] = $this->userData['city'];
			$japaData['country'] = $this->userData['country'];
			return $this->db->where(['date'=>$todayDate,'userID'=>$this->userData['ID']])->update('japayag',$japaData);
		}

		function globalJapaCount()
		{
			$japaData = $this->db->get('japayag')->result_array();
			if(!$japaData){
				return 0;
			}
			$count = 0;
			foreach ($japaData as $japa) {
				$count += $japa['japa'];
			}
			return $count;
		}

		function maxJapaCountCity()
		{
			$japaData = $this->db->get('japayag')->result_array();
			if(!$japaData){
				return 0;
			}
			$city = array();
			foreach ($japaData as $key => $value) {
				if(!isset($city[$value['city']])){$city[$value['city']] = array('count'=>'0','country'=>'');}
				$city[$value['city']]['count'] += $value['japa'];
				$city[$value['city']]['country'] = $value['country'];
			}
			$maxNumJapaCitiesArray[array_keys($city,max($city))[0]] = max($city);
			return $maxNumJapaCitiesArray;
		}

		function todayJapaCount()
		{
			$todayDate = $this->GMTDate;
			$todayJapa = $this->db->where('date',$todayDate)->get('japayag')->result_array();
			$count = 0;
			foreach ($todayJapa as $japa) {
				$count += $japa['japa'];
			}
			return $count;
		}

		function userTotalJapa(){
			$userTotalJapa = $this->db->select_sum('japa')->where('userID',$this->userData['ID'])->get('japayag')->row('japa');
			if($userTotalJapa){
				return $userTotalJapa;
			}
			else{
				return 0;
			}
		}

		function isTodayJapaExist()
		{
			$todayDate = $this->GMTDate;
			$todayJapa = $this->db->where(['date'=>$todayDate,'userID'=>$this->userData['ID']])->get('japayag')->row_array();
			return $todayJapa;
		}

		function saveClaimReward($stars){
			$todayDate = $this->GMTDate;
			return $this->db->where(['date'=>$todayDate,'userID'=>$this->userData['ID']])->update('japayag',['dailyReward'=>$stars]);
		}

		function totalStars(){
			$totalStars = $this->db->select_sum('dailyReward')->where('userID',$this->userData['ID'])->get('japayag')->row('dailyReward');
			if($totalStars){
				return $totalStars;
			}
			else{
				return 0;
			}
		}

		function totalJapaData(){
			$this->db->order_by('city','asc');
			return $this->db->get('japayag')->result_array();
		}

		function japaStatic()
		{
			$this->db->order_by('city','asc');
			$country_data = json_decode(file_get_contents(base_url('assets/countries.min.json/countries.min.json')));
			foreach ($country_data as $key => $value) {		
					$query = $this->db->where('country',$key)->get('japayag')->result_array();	
					if ($query) {
						$query_['total_japa'] = $this->db->select_sum('japa')->where('country',$key)->get('japayag')->row('japa');
						$today_japa_sum = $this->db->select_sum('japa')->where(['country'=>$key, 'date'=>$this->GMTDate])->get('japayag')->row('japa');
						if ($today_japa_sum) {
							$query_['today_japa'] = $today_japa_sum;
						}
						else{
							$query_['today_japa']= 0;
						}
						$max_japa = $this->db->select_max('japa')->where(['country'=>$key, 'date'=>$this->GMTDate])->get('japayag')->row('japa');
						$max_japa_user_id = $this->db->where(['japa'=>$max_japa])->get('japayag')->row('userID');
						$query_['today_max_japa_by']['japa'] = $max_japa;
						$query_['today_max_japa_by']['name'] = $this->db->where('ID',$max_japa_user_id)->get('users')->row('name');
						$data[$key] = $query_;
					}
			}
			// echo "<pre>";
			// print_r($data);
			// exit();
			return $data;
		}
	}
?>