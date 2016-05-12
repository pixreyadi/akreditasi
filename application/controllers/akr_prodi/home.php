<?php
class Home extends CI_Controller{
	public function index(){
		$this->load->view("akr_prodi/includes/header");
		$this->load->view("akr_prodi/vw_home");
		$this->load->view("akr_prodi/includes/footer");
	}
}
?>