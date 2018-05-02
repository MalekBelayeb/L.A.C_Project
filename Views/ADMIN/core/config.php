<?php

/**
* 
*/
class Config
{
	
 public static $db=NULL;

 public static function getconnexion()
 {
 	try {
 	     if(!isset(self::$db))
 	      {
		      self::$db=new PDO('mysql:host=localhost;dbname=malek','root','');

		      self::$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		      echo "connected to db ";
 			}
 }catch(Exception $s ){
 	die('Erreur: ' .$s.getMessage());
 }
 return self::$db;
}
}
Config::getconnexion();
?>