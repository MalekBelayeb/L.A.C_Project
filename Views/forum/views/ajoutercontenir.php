<?php


include_once "../core/contenircore.php";
include_once "../entities/contenir.php";

  
    
     
     
  

    if(isset($_POST['ajouter']))
  {

      //$id = $_POST["id"];
    
     $nom = $_POST["nom"];
     //$Date = $_POST["Date"];

    
     
     
     


    if(  isset($_POST['nom'])  and isset($_POST['foruma']))



    {
      $coree = new contenircore();
     $liste=$coree->recuperers($_POST['foruma']);

      foreach($liste as $row){
        $coree1 = new contenircore();
    $id_souscategorie=$row['id'];
    echo $id_souscategorie;

    if(strlen($nom)>3){
     $topp = new contenir($id,$nom,$id_souscategorie);
      $coree1->ajouter($topp);
    }
    else
    {
       echo '<script type="text/javascript">alert("le nom doit contenir au moins trois lettres");</script>';
    }

     }
  
   

      
     
     
   }
    else
    {
      echo "verifier champ";
    }

     
header("Location:forum.php");
      

   }

   ?>