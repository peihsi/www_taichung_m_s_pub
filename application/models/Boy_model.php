<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');  
class Boy_model extends CI_Model {

    public function __construct(){
    	parent::__construct();
    }

    /* check if a boy already exists by 身分證字號*/
    public function exists($boy_id){
    	$query = $this->read_row_by_code($boy_id);    	
    	$count = $query->num_rows();
    	log_message('debug', 'check id exist, count : '.print_r($count, true));
    	if ($count >= 1){
    		return true;
    	}else{
    		return false;
    	}    
    }

    public function read_row_by_code($Boy_ID_code){
		$this->db->select('*');
		$this->db->from('miliboy_table');
		$this->db->where('身分證字號', $Boy_ID_code);
		$this->db->where('役男刪除', 0);
		//$this->db->where('Login_PW', $Login_PW);
		$query = $this->db->get();
		return $query;
	}

	/*
	* get the 最新案件流水號 by 姓名,身分證字號,役男生日
	*	if found, return 最新案件流水號
	*	if not found, return an empty string ''
	*/
	public function get_filekey($name, $id, $birthday){
		$condition= array(
			'役男姓名' => $name,
			'身分證字號' => $id,
			'役男生日' => $birthday,
			);
		$this->db->select('最新案件流水號');
		$this->db->from('miliboy_table');
		$this->db->where($condition);
		$query = $this->db->get();
		$row = $query->row_array();
		if (isset($row)){
			return $row['最新案件流水號'];
		}else{
			return '';
		}			
	}
	
	public function add_new_boy($name, $id, $birthday, $begin_date, $mili_type, $mili_status){
		$data = array(
			'役男姓名' => $name,
			'身分證字號' => $id,
			'役男生日' => $birthday,
			'入伍日期' => $begin_date,
			'服役軍種' => $mili_type,
			'服役狀態' => $mili_status
			);
		$this->db->insert('miliboy_table', $data);
		$index = $this->db->insert_id();
		log_message('debug', 'boy table insert_id = '. $index);

		return $index;
	}

	public function update_new_boy_file_link($boy_key, $file_key){
		$data = array('最新案件流水號' => $file_key);
		$this->db->where('役男系統編號', $boy_key);
		$this->db->update('miliboy_table', $data);
	}


}