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
			$msg = "役男 [$name] 扶助案，線上登記成功！請攜帶證明文件前往戶籍所在區公所辦理。";
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
}
