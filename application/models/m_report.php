<?php
class M_report extends CI_Model{
	public function data(){
		return $this->db->query("SELECT * FROM ms_dua_n GROUP BY mitra HAVING mitra !=''")->result();
	}
	public function hitung($nama,$status){
		return $this->db->query("SELECT * FROM ms_dua_n WHERE mitra='$nama' AND status='$status'")->num_rows();
	}
}
?>