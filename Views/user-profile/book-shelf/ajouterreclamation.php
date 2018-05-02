<?php


include_once "../../forum/core/reclamationcore.php";
include_once "../../forum/entities/reclamation.php";

 if(isset($_POST['ajouter']))
  {
      $id = $_POST["id"];
    
  	 $type = $_POST["type"];
     $rec = $_POST["rec"];
     $img=$_POST["img"];
    
     
     
  

  	if( isset($_POST['type']) and isset($_POST['rec']) and isset($_POST["img"]))
  	{
  		$coree = new Reclamationcore();
      
  		$top = new reclamation($id,$type,$rec,$img);
  		$coree->ajouterrec($top);

    }
    

  		header("Location:DonnesProfile.php");

  	}

    else
  	{
  		echo "verifier champ";
  	}

    

      

   ?>