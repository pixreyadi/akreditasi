<?php
class M_pengguna extends CI_Model{
	public function data(){
		return $this->db->query("SELECT * FROM user ORDER BY id_user ASC")->result();
	}
	public function dataSleksi($id){
		return $this->db->query("SELECT * FROM user WHERE id_user='$id'");
	}
	public function tambah($username,$password,$level,$nama,$foto){
		$this->db->query("INSERT INTO user(username,`password`,level,nama,foto) VALUES('$username','$password','$level','$nama','$foto')");
		return true;
	}
	public function ubah($id_user,$username,$password,$level,$nama,$foto){
		$this->db->query("UPDATE user SET username='$username',
			`password`='$password',
			level='$level',
			nama='$nama',
			foto='$foto' WHERE id_user='$id_user'");
		return true;
	}
	public function hapus($id_user){
		$this->db->query("DELETE FROM user WHERE id_user='$id_user'");
		return true;
	}
}
?>