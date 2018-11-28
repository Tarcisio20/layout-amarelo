<?php
class homeController extends controller{

	public function __construct(){
		parent::__construct();

		/*$u = new Users();

		if($u->isLogged() === false){
			header("Location: ".BASE."login");
			exit;
		}*/
	}

	public function index(){

		$data = array();



		$this->loadTemplate('home',$data);
	}
}

/*RewriteRule ^(.*)$ /contaazul/index.php?url=$1 [QSA,L] */