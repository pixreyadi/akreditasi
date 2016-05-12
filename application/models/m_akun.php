<?php
class M_akun extends CI_Model{
	public function dataSleksi($id_user){
		return $this->db->query("SELECT * FROM user WHERE id_user='$id_user'");
	}
	public function ubah($id_user,$username,$password,$nama,$foto){
		$this->db->query("UPDATE user SET username='$username', `password`='$password', nama='$nama', foto='$foto' WHERE id_user='$id_user'");
		return true;
	}
}
?>