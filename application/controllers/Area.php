<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Area extends CI_Controller {
	public function __construct() { 
        parent::__construct(); 
        $this->load->database();
        $this->load->model('area_model');
    }

	public function get_town_by_county(){	
		
		$county = $this->input->post('county');		
		$towns = $this->area_model->town_by_county($county);
		$data['town_list'] = $towns;
		echo json_encode($data);		
	}

	public function get_village_by_town(){
		
		$town_code = $this->input->post('town');
		log_message('debug', 'town code received = '. $town_code);	
		$villages = $this->area_model->village_by_town($town_code);
		$data['village_list'] = $villages;
		echo json_encode($data);				
	}

	public function military_type_list(){
		$this->load->model('area_model');
		//$town_code = $this->input->post('ADF_town');		
		$military_type_list = $this->area_model->military_type_list();
		$data['military_type_list'] = $military_type_list;
		echo json_encode($data);				
	}
}
