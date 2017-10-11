<?php 

/**
* 
*/
class Route {
	
	function __construct()
	{
		$this->index();
	}

	function index() {
		if (isset($_GET['controller'])){
			$controller=$_GET['controller'];
		} else {
			$controller="";
		}

		switch ($controller) {
			case 'mahasiswa':
				include_once("view/index_mahasiswa_v.php");
				break;
			
			default:
				// $data = $this->mymodel->getAll();
				include_once("view/index_v.php");
				break;
		}
	}
}

 ?>