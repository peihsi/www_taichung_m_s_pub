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

	public function get_status($file_key){
		return "民眾線上申請";
	}
}