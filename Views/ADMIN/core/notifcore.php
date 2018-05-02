<?php

include_once "config.php";
//include_once "../views/forum.php";



class Notifcore
{
	
	

function check()
		{
			$serv="localhost";
		$use="root";
		$pass="";
		$dbname="malek";
		$con=mysqli_connect($serv,$use,$pass,$dbname);
		$sql="SELECT COUNT(id) AS total FROM `reclamation` where `notif`= 0";
		//$sql="SELECT COUNT(id) AS total FROM `f_souscategories` WHERE id_categorie=:id";
   		//$db = config::getConnexion();
   		$result=mysqli_query($con,$sql);
   		$values=mysqli_fetch_assoc($result);
   		$num=$values['total'];
   		//echo $num;
   		return $num;
		
}
}