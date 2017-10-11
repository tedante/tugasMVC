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
				include_once 'view/layout/header.php';
				include_once 'view/index_v.php';
				include_once 'view/layout/footer.php';
			break;

			default: 
				include 'view/index_v.php';
		}
	}
}

?>