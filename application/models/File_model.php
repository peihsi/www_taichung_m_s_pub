<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');  
class File_model extends CI_Model {

    public function __construct(){
		parent::__construct();
    }

	/*
	*	add a 民眾線上申請的，初審案件
	*/
	public function add_new_file($today, $id, $county, $town, $village, $address, $email, $phone){		
		$data = array(
			'作業類別' => 1,
			'建案日期' => $today,
			'役男系統編號' => $id,
			'county'=> (int)$county,
			'town'=> (int)$town,
			'village' => (int)$village,			
			'戶籍地址' => $address,
			'email' => $email,
			'聯絡電話1' => $phone,
			'審批階段' => 0
			);
		$this->db->insert('files_info_table', $data);
		$index = $this->db->insert_id();
		log_message('debug', 'file table insert_id = '. $index);
		return $index;
	}

	/**
	* get 案件階段名稱 by the given 案件流水號
	*/
	public function get_status($file_key){
		$status_name = '';

		$this->db->select('*');
		$this->db->from('files_info_table');
		$this->db->join('files_status_code','files_info_table.審批階段 = files_status_code.審批階段代號','left');
		$this->db->where('案件流水號', $file_key);

		$row = $this->db->get()->row_array();		

		if (isset($row)){
			$status_name = $row['案件階段名稱'];
		}
		log_message('debug', 'last query = '.print_r($this->db->last_query(), true));
		return $status_name;	
	}
	
	public function progress_log($file_key,$log_comment, $progress_name, $progress_level,$organization,$department,$FullName,$User_Level,$datetime){
		$data = array(
			'案件流水號' => $file_key,
			'動作者意見' => $log_comment,
			'動作名稱' => $progress_name,
			'動作後案件流程層級' => $progress_level,
			'動作者' => $FullName,
			'動作者單位' => $department,
			'動作者機關' => $organization,
			'動作者職級' => $User_Level,
			'日期時間' => $datetime
			);
		$this->db->insert('files_process_log', $data);
		$index = $this->db->insert_id();
		log_message('debug', 'file table insert_id = '. $index);

		return $index;

	}
}