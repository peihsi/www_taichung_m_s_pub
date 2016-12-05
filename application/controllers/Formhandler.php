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
		$verify = $this->input->post('verify');
		if (md5($verify) != $_SESSION['nekoCheck']['verify']){			
			echo '<div class="alert alert-danger">驗證碼錯誤</div>';
			return;
		}

		$id = $this->input->post('id');		
		$exists = $this->boy_model->exists($id);		
		
		if ($exists){
			log_message('debug', 'cannot create a new file, because boy ID alreay exists.');
			echo '<div class="alert alert-danger">役男已送過申請</div>';			
		}else{
			//boy info
			$name = $this->input->post('name');
			$birthday = $this->input->post('birthday');
			$begin_date = $this->input->post('bdate');
			$type = $this->input->post('mtype');
			$status ='服役中';	// 服役狀態預設為'服役中'
			
			$boy_key = $this->boy_model->add_new_boy($name, $id, $birthday, $begin_date, $type, $status);
				
			// create a new file record for this boy
			$email = $this->input->post('email');
			$phone = $this->input->post('phone');
			$address = $this->input->post('address');					
			$county = $this->input->post('county');
			$town = $this->input->post('town');
			$village = $this->input->post('village');
			$today = date("Y-m-d H:i:s");
			
			$file_key = $this->file_model->add_new_file($today, $boy_key, $county, $town, $village, $address, $email, $phone);
		
			$this->boy_model->update_new_boy_file_link($boy_key, $file_key);
			echo '<div class="alert alert-success">役男資料新增成功</div>';			
		}			
	}
}
