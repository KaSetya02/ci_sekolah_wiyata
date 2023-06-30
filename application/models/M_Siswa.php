<?php 
class M_siswa extends CI_Model{

	function simpan_siswa($siswa,$nama_siswa,$gender,$agama,$kelas,$jurusan,$no_telp,$alamat,$foto){
		$hsl=$this->db->query("INSERT INTO siswa (siswa,nama_siswa,gender,agama,kelas,jurusan,no_telp,alamat,foto) VALUES ('$siswa','$nama_siswa','$gender','$agama','$kelas','$jurusan','$no_telp','$alamat','$foto')");
		return $hsl;
	}
	function simpan_siswa_tanpa_img($siswa,$nama_siswa,$gender,$agama,$kelas,$jurusan,$no_telp,$alamat){
		$hsl=$this->db->query("INSERT INTO siswa (siswa,nama_siswa,gender,agama,kelas,jurusan,no_telp,alamat) VALUES ('$siswa','$nama_siswa','$gender','$agama','$kelas','$jurusan','$no_telp','$alamat')");
		return $hsl;
	}

	//front-end
	function siswa(){
		$hsl=$this->db->query("SELECT * FROM siswa");
		return $hsl;
	}
	function siswa_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * FROM siswa limit $offset,$limit");
		return $hsl;
	}

}