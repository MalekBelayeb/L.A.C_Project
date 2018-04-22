<?php

		include_once "C:/wamp64/www/AvenirCulturel/Entity/categorie.php";
		include_once "C:/wamp64/www/AvenirCulturel/config.php";













/**
* 
*/
class CategorieCore
{
	
	function __construct()
	{
		# code...
	}



	function Afficher_categorie()
	{

		$c = connexion::getConnexion();

			$ctg = $c->query("SELECT * FROM `category` ");

			return $ctg;


	}


}



















?>