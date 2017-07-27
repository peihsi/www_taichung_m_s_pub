<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct() { 
        parent::__construct(); 
        $this->load->database();
        $this->load->model('area_model');
    }
	public function index()
	{
		$this->load->view('one_0');
	}
	public function P0()
	{
		$this->load->view('one_0');
	}
	public function P1()
	{
		$this->load->view('one_1');
	}
	public function P2()
	{
		$this->load->view('one_2');
	}

	public function P3()
	{	
		$this->load->model('area_model');
		$seloption = "";	
		$military_type_list = $this->area_model->military_type_list();
		foreach($military_type_list as $Mo){
            $seloption .= '<option value="'.$Mo['name'].'">'.$Mo['name'].'</option>'; 
        }
		//echo $seloption;

		$this->load->view('one_3', Array(
				'seloption'	=> 	$seloption,
		));




		//$this->load->view('one_3');
	}
	public function P4()
	{
		$this->load->view('one_4');
	}
	public function P5()
	{
		$this->load->view('one_5');
	}

	//echo time();
	public function A1()
	{
		$this->load->view('attached/A1');
	}
	public function A2()
	{
		$this->load->view('attached/A2');
	}
	public function A3()
	{
		$this->load->view('attached/A3');
	}
	public function A4()
	{
		$this->load->view('attached/A4');
	}
	public function A5()
	{
		$this->load->view('attached/A5');
	}
	public function PC1()
	{
		$this->load->view('attached/PC1');
	}
	public function PC2()
	{
		$this->load->view('attached/PC2');
	}
	public function PC3()
	{
		$this->load->view('attached/PC3');
	}
}
