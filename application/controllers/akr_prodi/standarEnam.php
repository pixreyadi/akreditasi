<?php
class StandarEnam extends CI_Controller{
	public function index(){
		$this->load->view("akr_prodi/includes/header");
		$this->load->view("akr_prodi/vw_standar_enam");
		$this->load->view("akr_prodi/includes/footer");
	}
	public function formStandarEnam($param){
		if($param=="tambah"){
			$this->load->view("akr_prodi/includes/header");
			$this->load->view("akr_prodi/form/vw_form_standar_enam");
			$this->load->view("akr_prodi/includes/footer");
		}
	}
}
?>