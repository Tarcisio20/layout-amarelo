<?php
class Users extends model{

	private $userInfo;
	private $permissions;

	public function isLogged(){

		if(isset($_SESSION['ccUser']) && !empty($_SESSION['ccUser'])){
			return true;
		}else{
			return false;
		}
	}

}/*Fim da class User*/