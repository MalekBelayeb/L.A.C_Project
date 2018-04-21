<?php



	include_once "C:/wamp64/www/AvenirCulturel/Entity/user.php";
		include_once "C:/wamp64/www/AvenirCulturel/config.php";





/**
* 
*/
class Usercore
{
	
	function __construct()
	{
		# code...
	}






	function Afficher_user()
	{
		$c = connexion::getConnexion();



		$check_user = $c->query("SELECT * FROM user");


		return $check_user;

	}


	function Afficher_user_id($id)
	{

		$c = connexion::getConnexion();

try {
	$reg_name = $c->query("SELECT * FROM `compte` WHERE LOGIN  = $id");
		$name_comm = $reg_name->fetch();

		return $name_comm;
	
} catch (PDOException $e) {
	die ($e->getMessage());
	
}

		

	}



}













?>