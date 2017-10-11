<?php 

class Mahasiswa_m {
	public $db;
	public $conn;
	
	function __construct() {
		$this->conn = mysqli_connect("localhost", "root", "");
		$this->db = mysqli_select_db($this->conn, "db_mvc");
	}
	
	function getAll() {
		$sql = "SELECT * FROM tb_mahasiswa";
		$query = mysqli_query($this->conn, $sql);
		
		//$data = mysqli_fetch_assoc($query);
		$wadah = array();
		while($data = mysqli_fetch_assoc($query)) {
			$wadah[] = $data;
		}
		return $wadah;
	}
	
	function getByNim($arg_nim) {
		$sql = "SELECT * FROM tb_mahasiswa where nim = '$arg_nim'";
		$query = mysqli_query($this->conn, $sql);
		$wadah = mysqli_fetch_assoc($query);
		return $wadah;	
	}
	
	function insert($arg_nim, $arg_nama, $arg_kelas) {
		$sql = "INSERT INTO tb_mahasiswa (nim, nama, kelas) values 
				('$arg_nim', '$arg_nama', '$arg_kelas')";
		$query = mysqli_query($this->conn, $sql);
		return $query; 
	}
	
	function updateByNim($arg_nim, $arg_nama, $arg_kelas) {
		$sql = "UPDATE t_mhs set nama = '$arg_nama', 
				kelas = '$arg_kelas'
				WHERE nim = '$arg_nim'";
		$query = mysqli_query($this->conn, $sql);
		return $query; 
	}
	
	
	
	
	
}

 ?>