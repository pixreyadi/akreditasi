<?php
class M_login extends CI_Model{
	public function cekLogin($username,$password){
		$ePassword = base64_encode($password);
		return $this->db->query("SELECT * FROM user WHERE username='$username' AND password='$ePassword'");
	}
}
?>