<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formhandler extends CI_Controller {
	public function __construct() { 
        parent::__construct(); 
        $this->load->database();
        $this->load->model('boy_model');
        $this->load->model('file_model');		
     }

	public function newfile(){
		
		if ( !isset( $_SESSION ) ) session_start();
		$verify = trim($this->input->post('verify'));
		if (md5($verify) != $_SESSION['nekoCheck']['verify']){			
			echo '<div class="alert alert-danger">驗證碼錯誤</div>';
			return;
		}

		$id = trim($this->input->post('id'));	
		$exists = $this->boy_model->exists($id);		
		
		if ($exists){
			log_message('debug', 'cannot create a new file, because boy ID alreay exists.');
			echo '<div class="alert alert-danger">役男已送過申請</div>';			
		}else{
			//boy info
			$name = trim($this->input->post('name'));
			$birthday = trim($this->input->post('birthday'));
			$begin_date = trim($this->input->post('bdate'));
			$type = $this->input->post('mtype');
			$status ='服役中';	// 服役狀態預設為'服役中'
			
			$boy_key = $this->boy_model->add_new_boy($name, $id, $birthday, $begin_date, $type, $status);
				
			// create a new file record for this boy
			$email = trim($this->input->post('email'));
			$phone = trim($this->input->post('phone'));
			$address = trim($this->input->post('address'));
			$county = $this->input->post('county');
			$town = $this->input->post('town');
			$village = $this->input->post('village');
			$today = date("Y-m-d H:i:s");
			
			$file_key = $this->file_model->add_new_file($today, $boy_key, $county, $town, $village, $address, $email, $phone);
		
			$this->boy_model->update_new_boy_file_link($boy_key, $file_key);
			$this->log_activity("民眾自行線上登記案件", "file_key=$file_key");
			$this->progress_log($file_key);
			$msg = "役男 [$name] 扶助案，線上登記成功！請攜帶證明文件前往戶籍所在區公所辦理。<br>
					請填寫<a href='https://goo.gl/forms/3EWzF30XXThZyXU83' target='_blank' style='color: #d22121;'>線上問卷</a>，協助我們做出改進並提供更好的服務。";
			echo '<div class="alert alert-success">'.$msg.'</div>';
		}			
	}

	public function queryprogress(){
		$name = trim($this->input->post('q_name'));
		$id = trim($this->input->post('q_id'));
		$birthday = trim($this->input->post('q_birthday'));
		
		$file_key = $this->boy_model->get_filekey($name, $id, $birthday);
		if (empty($file_key)){
			echo '<div class="alert alert-danger">此役男資料不存在！</div>';
		}else{
			$status = $this->file_model->get_status($file_key);
			$msg = "役男 $name $id (生日:$birthday) 之扶助案，進度為 ". $status;
			echo '<div class="alert alert-success">'.$msg.'</div>';			
		}
	}

	protected function log_activity($activity1="", $activity2="", $activity3=""){

		//$this->load->library('session');
		$log['user_id'] = ""; //varchar 20
		$log['full_name'] = ""; //varchar 20
		$log['organization'] = ""; //varchar 20
		$log['department'] 	= ""; //varchar 20

		$log['activity1']		= $activity1;
		$log['activity2']		= $activity2;
		$log['activity3']		= $activity3;

		$log['date_time'] 	= date('Y-m-d H:i:s', time());
		$log['ip'] 			= $this->input->ip_address();
		
		$this->load->model('activitylog_model');
		$this->activitylog_model->add($log);
	}

	protected function progress_log($file_key){		
		$datetime = date ("Y-m-d H:i:s"); 
		$this->file_model->progress_log($file_key,"", "民眾線上申請", 0,"","","民眾",0,$datetime);
	}
}
