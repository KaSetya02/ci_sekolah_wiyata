<?php 
class M_guru extends CI_Model{

	function simpan_guru($nip,$nama_guru,$gender,$agama,$status,$no_telp,$alamat,$foto){
		$hsl=$this->db->query("INSERT INTO guru (nip,nama_guru,gender,agama,status,no_telp,alamat,foto) VALUES ('$nip','$nama_guru','$gender','$agama','$status','$no_telp','$alamat','$foto')");
		return $hsl;
	}
	function simpan_guru_tanpa_img($nip,$nama_guru,$gender,$agama,$status,$no_telp,$alamat){
		$hsl=$this->db->query("INSERT INTO guru (nip,nama_guru,gender,agama,status,no_telp,alamat) VALUES ('$nip','$nama_guru','$gender','$agama','$status','$no_telp','$alamat')");
		return $hsl;
	}

	//front-end
	function guru(){
		$hsl=$this->db->query("SELECT * FROM guru");
		return $hsl;
	}
	function guru_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * FROM guru limit $offset,$limit");
		return $hsl;
	}

}