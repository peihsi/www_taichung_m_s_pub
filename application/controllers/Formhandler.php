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
			$this->s_email($name, $id, $birthday, $phone, $email);
		}			
	}
	private function s_email($name, $id, $birthday, $phone, $email){
		$config = Array(
		    'protocol' => 'smtp',
		    'smtp_host' => 'smtp.taichung.gov.tw',
		    'smtp_port' => 25,
		    'smtp_user' => 'A0000',
		    'smtp_pass' => 'cab387020000C@',
		    'mailtype'  => 'html', 
		    'smtp_timeout'  => '30',
		    'crlf'  		=> "\r\n", 
		    'newline'  	=> "\r\n", 
		    'charset'   => 'utf-8'
		);
		$this->load->library('email', $config);
		$this->email->initialize($config);
		//$this->email->set_newline("\r\n");
		//$this->load->library('email');
		$this->email->from('A0000@taichung.gov.tw','臺中市政府民政局');
		$this->email->to($email); 
		//$this->email->cc('another@another-example.com'); 
		//$this->email->bcc('them@their-example.com'); 

		$this->email->subject('臺中安家樂-服兵役役男家屬生活扶助系統(臺中市政府民政局)');
		$TEST_MSG = 
		"
		<p>親愛的市民，您好：</p>
		<p>感謝您使用[臺中安家樂-服兵役役男家屬生活扶助系統]的線上申請功能。</p>
		<p>你所登記申請的役男資料為：</p>
		<table style='background-color: #d7fad8;'>
		<tr><td>役男姓名：</td><td>{$name}</td></tr>
		<tr><td>役男身分證字號：</td><td>{$id}</td></tr>
		<tr><td>役男生日：</td><td>{$birthday}</td></tr>
		<tr><td>家屬連絡電話：</td><td>{$phone}</td></tr>
		</table>
		<p>本系統已將案件排入流程中，將由戶籍地區公所與臺中市政府民政局協同處理。</p>
		<p>若需了解目前案件進度，可由<a href='http://milicare.taichung.gov.tw/page/P5'>安家樂-進度查詢</a>之功能查詢之。</p>
		<p>&nbsp;</p>
		<p>臺中市政府民政局　敬啟</p>
		";

		$this->email->message($TEST_MSG); 

		$this->email->send();

		//echo $this->email->print_debugger();
	}

	//資料庫備份測試
	public function MYSQLDUMP(){
		$filename='military_family_support_taichung_backup_'.date('Y-m-d~~H-i-s').'.sql';
		$output_path = "D:\\";
		echo $filename."<br>";

		$CC = "D:\wamp\bin\mysql\mysql5.6.17\bin\mysqldump military_family_support_taichung --password=123456 --user=root --single-transaction > ";
		echo $CC."<br>";


		//$result = exec($CC,$output);
		//system("mkdir D:\\wamp\\bin\\mysql\\mysql5.6.17\\bin\\CC");
		system( $CC.$output_path.$filename);


		// if($output==''){/* no output is good */}
		// else { //we have something to log the output here
		// var_dump($output) ;


		// Export:
		//
		// 		mysqldump -u root -p --all-databases > alldb.sql
		// 		Look up the documentation for mysqldump. You may want to use some of the options mentioned in comments:

		// 		mysqldump -u root -p --opt --all-databases > alldb.sql
		// 		mysqldump -u root -p --all-databases --skip-lock-tables > alldb.sql
		//
		// Import:

		// 		mysql -u root -p < alldb.sql
		
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
			$msg = "役男 $name $id (生日:$birthday) 之扶助案，進度為 [". $status. "]";
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
