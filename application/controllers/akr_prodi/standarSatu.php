<?php
class StandarSatu extends CI_Controller{
	public function index(){
		$this->load->view("akr_prodi/includes/header");
		$this->load->view("akr_prodi/vw_standar_satu");
		$this->load->view("akr_prodi/includes/footer");
	}
	public function formStandarSatu($param){
		if($param=="tambah"){
			$this->load->view("akr_prodi/includes/header");
			$this->load->view("akr_prodi/form/vw_form_standar_satu");
			$this->load->view("akr_prodi/includes/footer");
		}
	}
}
?>