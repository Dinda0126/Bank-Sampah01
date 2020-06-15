<?php
class Welcome extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url();
            redirect($url);
        };
	}
	
	function index(){
		$this->load->view('admin/tambahan/v_header');
		$this->load->view('admin/tambahan/v_index');
		$this->load->view('admin/tambahan/v_footer');
	}
}