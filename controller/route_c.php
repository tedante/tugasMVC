<?php 

/**
* 
*/
class Route {
	
	function __construct()
	{

	}

	function index() {
		if (isset($_GET['arg_menu'])){
			$arg_menu=$_GET['arg_menu'];
		} else {
			$arg_menu="";
		}

		switch ($arg_menu) {
			case 'mahasiswa':
				// $data = $this->mymodel->getAll();
				// include_once ("view_mhs_tables.php");
			
				include_once("view/index_mahasiswa_v.php");
				break;
			
			default:
				// $data = $this->mymodel->getAll();
				include_once("view/index_mahasiswa_v.php");
				break;
		}
	}
}

 ?>