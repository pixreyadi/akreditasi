<?php
class M_welcome extends CI_Model{
	public function data(){
		return $this->db->query("SELECT * FROM ms_dua_n ORDER BY nomor ASC")->result();
	}
	public function dataSleksi($nomor){
		return $this->db->query("SELECT * FROM ms_dua_n WHERE nomor='$nomor'");
	}
	public function tambah($reg,$area,$ndem,$status,$nd,$nd_speedy,$tgl_reg,$tgl_status,$lama,$nama,$k_contact,$ket_isiska,$sebab,$ket_sebab,$solusi,$ket_solusi,$duedate_solusi,$usage){
		$this->db->query("INSERT INTO ms_dua_n(regional,area,ndem,status,nd,nd_speedy,tgl_reg,tgl_status,lama,nama,k_contact,ket_isiska,sebab,ket_sebab,solusi,ket_solusi,duedate_solusi,`usage`)
			VALUES('$reg',
				'$area',
				'$ndem',
				'$status',
				'$nd',
				'$nd_speedy',
				'$tgl_reg',
				'$tgl_status',
				'$lama',
				'$nama',
				'$k_contact',
				'$ket_isiska',
				'$sebab',
				'$ket_sebab',
				'$solusi',
				'$ket_solusi',
				'$duedate_solusi',
				'$usage')");
		return true;

	}
	public function ubah($nomor,$reg,$area,$ndem,$status,$nd,$nd_speedy,$tgl_reg,$tgl_status,$lama,$nama,$k_contact,$ket_isiska,$sebab,$ket_sebab,$solusi,$ket_solusi,$duedate_solusi,$usage){
		$this->db->query("UPDATE ms_dua_n SET 
			regional='$reg',
			area='$area',
			ndem='$ndem',
			status='$status',
			nd='$nd',
			nd_speedy='$nd_speedy',
			tgl_reg='$tgl_reg',
			tgl_status='$tgl_status',
			lama='$lama',
			nama='$nama',
			k_contact='$k_contact',
			ket_isiska='$ket_isiska',
			sebab='$sebab',
			ket_sebab='$ket_sebab',
			solusi='$solusi',
			ket_solusi='$ket_solusi',
			duedate_solusi='$duedate_solusi',
			`usage`='$usage' WHERE nomor='$nomor'");
		return true;
	}
	public function petugas_ubah($nomor,$sebab,$ket_sebab,$solusi,$ket_solusi,$duedate_solusi){
		$this->db->query("UPDATE ms_dua_n SET
			sebab='$sebab',
			ket_sebab='$ket_sebab',
			solusi='$solusi',
			ket_solusi='$ket_solusi',
			duedate_solusi='$duedate_solusi' WHERE nomor='$nomor'");
		return true;
	}
	public function admin_ubah($nomor,$status,$tgl_reg,$tgl_status,$lama,$nama,$k_contact,$ket_isiska,$sebab,$ket_sebab,$solusi,$ket_solusi,$duedate_solusi,$usage){
		$this->db->query("UPDATE ms_dua_n SET 
			status='$status',
			tgl_reg='$tgl_reg',
			tgl_status='$tgl_status',
			lama='$lama',
			nama='$nama',
			k_contact='$k_contact',
			ket_isiska='$ket_isiska',
			sebab='$sebab',
			ket_sebab='$ket_sebab',
			solusi='$solusi',
			ket_solusi='$ket_solusi',
			duedate_solusi='$duedate_solusi',
			`usage`='$usage' WHERE nomor='$nomor'");
		return true;
	}
	public function hapus($nomor){
		$this->db->query("DELETE FROM ms_dua_n WHERE nomor='$nomor'");
		return true;
	}
	public function ubahMitra($nomor,$mitra){
		$this->db->query("UPDATE ms_dua_n SET mitra='$mitra' WHERE nomor='$nomor'");
		return true;
	}
	public function ubahSerial($nomor,$serial){
		$this->db->query("UPDATE ms_dua_n SET serial_number='$serial' WHERE nomor='$nomor'");
		return true;
	}
	public function dataMitra($nama){
		return $this->db->query("SELECT * FROM ms_dua_n WHERE mitra='$nama'");
	}
	public function cekReport($id){
		return $this->db->query("SELECT * FROM report WHERE id_user='$id'")->num_rows();
	}
}
?>