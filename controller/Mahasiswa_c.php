<?php
include_once "model/Mahasiswa_m.php";

class Mahasiswa_c {	
	
	var $model;
	
	function __construct(){
		$this->model = new Mahasiswa_m();		
		$this->index();
	}		
	
	function index(){
		if (isset($_GET['arg_menu'])){
			$arg_menu=$_GET['arg_menu'];
		} else {
			$arg_menu="";
		}

		switch($arg_menu) {
			case "table":
				$data = $this->model->getAll();
				include_once 'view/mahasiswa_table_v.php';
			break;
			case "list":
				include_once 'view/mahasiswa_list_v.php';
			break;
			case "insert":
				include_once 'view/mahasiswa_insert_v.php';
			break;
			case "insert_proses":
				$nim = $_POST['nim'];
				$nama = $_POST['nama'];
				$kelas = $_POST['kelas'];

				$this->model->insert($nim,$nama,$kelas);
				header("location:index.php?controler=mahasiswa&arg_menu=table");
			break;

			default: 
				include 'view/index_v.php';
		}
	}
}

?>