<?php

		include_once "C:/wamp64/www/first_proj/bookjunky/backoffice/entities/categorie.php";
		include_once "C:/wamp64/www/first_proj/bookjunky/backoffice/config.php";













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

		$c = Config::getConnexion();

			$ctg = $c->query("SELECT * FROM `category` ");

			return $ctg;


	}


}



















?>