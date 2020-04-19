<?php
	class UserModel extends CI_Model
	{
		function registerNewUser($userData)
		{
			$no = $this->checkifUserExist($userData);
			if($no == "no_data" ){
				$query = $this->db->insert('users',$userData);
				$insert_id = $this->db->insert_id();
				if($query){
					$data = $this->db->where('email',$userData['email'])->get('users')->row_array();
					unset($data['password']);
					$this->session->set_userdata('userData',$data);
					return "ok";
				}
				else{
					return "Data can not be insert into Database.";
				}
			}
			else{
				return $no."Alredy Registered.";
			}

		}

		function checkifUserExist($userData){
			$this->db->where('email',$userData['email']);
			$this->db->or_where('phone',$userData['phone']);
			$data = $this->db->get('users')->row_array();
			if (!$data) {
				return "no_data";
			}
			else{
				$msg = "";
				if($data['email']==$userData['email']){
					$msg .= "Email address ";
				}
				if($data['phone']==$userData['phone']){
					$msg .= "Phone Number ";
				}
				return $msg;
			}
		}

		function validateUser($userData){
			$this->db->where('email',$userData['phoneEmail']);
			$this->db->or_where('phone',$userData['phoneEmail']);
			$data = $this->db->get('users')->row_array();
			if ($data){
				if($data['password'] == $userData['password']){
					unset($data['password']);
					$this->session->set_userdata('userData',$data);
					return "ok";
				}
				else{
					return "wrong Password";
				}
			}
			else{
				return "No User Found";
			}
		}

		function recoverPassword($userData){
			$userData['phone'] = 0;
			$check = $this->checkifUserExist($userData);
			if($check == "no_data" ){
				return "User Not found with this Email";
			}
			else{
				$userData['key'] = md5(time());
				$query = $this->verificationKey($userData);
				if($query){
					$this->sendVerificationKeyOnEmail($userData);
				}
				return "mail_sent";
			}
		}

		function verificationKey($userData){
			return $this->db->where('email',$userData['email'])->update('users',['verification_key'=>$userData['key']]);
		}

		function sendVerificationKeyOnEmail($userData){

			$url = base_url("newPasword/".$userData['key']."/".$userData['email']);

			$config['protocol']    = 'smtpout.secureserver.net';
            $config['smtp_host']    = 'localhost';
            $config['smtp_port']    = '465';
            $config['smtp_timeout'] = '600';

            $config['smtp_user']    = 'contact@iskconcalgary.ca';    //Important
            $config['smtp_pass']    = 'iskconCalgary@123';  //Important


            $config['charset']    = 'utf-8';
            $config['crlf']    = "\r\n";
            $config['newline']    = "\r\n";
            $config['mailtype'] = 'html'; // or html
            $config['validation'] = TRUE; // bool whether to validate email or not 

            $this->email->initialize($config);
            $this->email->set_mailtype("html"); 
            $this->email->set_newline("\r\n");

            $message = "";
            $message .= 'Hare Krishna! <br><br>';
            $message .= 'Dear Devote, please Click on Below button and Create a new password.<br><br>';
            $message .= '<a href='.$url.' style="background: #2C3E50;padding: 5px 10px;color: #fff; text-decoration: none;">Click Here</a> <br><br>' ;

            $this->email->from('contact@iskconcalgary.ca', 'Japa Yag');
            $this->email->to($userData['email']);

            $this->email->subject('Recovery Password Mail From Japa Yag');
            $this->email->message($message);
            $this->email->send();
            
            return true;
		}

		function newPassword($key,$email){
			$row = $this->db->where(['verification_key'=>$key,'email'=>$email])->get('users')->num_rows();
			if($row){
				$this->session->set_userdata('userEmail',$email);
				return true;
			}
			else{
				return false;
			}
		}

		function setNewPassword($userData)
		{
			$userData['verification_key'] = md5(time());
			$userEmail = $this->session->userdata('userEmail');
			$this->session->unset_userdata('userEmail');
			return $this->db->where('email',$userEmail)->update('users',$userData);
		}

		function totalUserCount(){
			return $this->db->get('users')->num_rows();
		}
	}
?>