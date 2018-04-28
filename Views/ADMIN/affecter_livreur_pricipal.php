<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

  <!--google-->
  <script type="text/javascript" src="goraede/js/googlemap.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <style type="text/css">
    
    .container{
      height: 450px;
    }
    #map{
      width: 100%;
      height: 100%;
      border: 1px solid blue;
    }
    #data{
      display: none;
    }
    #alldata{
      display: none;
    }
    
  </style>



</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->



<?php  require_once "header.php";  ?>

 
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      
      <h1>livreur</h1>
      <hr>
     
      
                       <?PHP
                       
include "../../Entity/laivraison.php";
include "../../Core/laivraisonC.php";





 if (isset($_GET['cin'])){
    $employeC = new laivraisonC();
    $result=$employeC->recupererLaivraison($_GET['cin']);
    foreach($result as $row){
        $code_Livraison=$row['code_Livraison'];
        $nom=$row['nom'];
        $prenom=$row['prenom'];
        $adresse_ligne_1=$row['adresse_ligne_1'];
        $adresse_ligne_2=$row['adresse_ligne_2'];
        $ville=$row['ville'];
        $mail=$row['mail'];
        $num_tel=$row['num_tel'];
        $code_livre=$row['code_livre'];
        $date_laivraison=$row['date_laivraison'];
        $affectation=$row['affectation'];
        $livreur=$row['livreur'];
        
        

        
       




   
?>

<style type="text/css">
  #data1{
      display: none;
    }
</style>

<form   action="affecter_livreur_pricipal.php" method="POST">
<table>
<caption>Modifier Employe</caption>
<tr>
<td id="data1">code_Livraison</td>
<td><input id="data1" type="text" name="code_Livraison" value="<?PHP echo $code_Livraison ?>" ></td>
</tr>

<tr>
<td id="data1">Nom</td>
<td><input  id="data1" type="text" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>
<tr>
<td id="data1">Prenom</td>
<td><input id="data1" type="text" name="prenom" value="<?PHP echo $prenom ?>"></td>
</tr>
<tr>

  

  

    <tr>
<td id="data1" >adresse_ligne_1</td>
<td><input id="data1" type="text" name="adresse_ligne_1" value="<?PHP echo $adresse_ligne_1 ?>"></td>
</tr>
<tr>

    <tr>
<td id="data1" >adresse_ligne_2</td>
<td><input id="data1"  type="text" name="adresse_ligne_2" value="<?PHP echo $adresse_ligne_2 ?>"></td>
</tr>
<tr>

    <tr>
<td id="data1">ville</td>
<td><input id="data1" type="text" name="ville" value="<?PHP echo $ville ?>"></td>
</tr>
<tr>

    <tr>
<td id="data1">mail</td>
<td><input id="data1" type="text" name="mail" value="<?PHP echo $mail ?>"></td>
</tr>
<tr>

    <tr>
<td id="data1">num_tel</td>
<td><input id="data1" type="text" name="num_tel" value="<?PHP echo $num_tel ?>"></td>
</tr>
<tr>

    <tr>
<td id="data1" >code_livre</td>
<td><input id="data1" type="text" name="code_livre" value="<?PHP echo $code_livre ?>"></td>
</tr>
<tr>

     <tr>
<td id="data1" >date_laivraison</td>
<td><input id="data1" type="text" name="date_laivraison" value="<?PHP echo $date_laivraison ?> "></td>
</tr>
<tr>

 




<?php

$connect =Connexion::getConnexion();

$query = "SELECT cin,nom FROM livreur  ORDER BY cin  ";
$result = $connect->query($query); ?>

    <select name="livreur">
<?php while ($row = $result->fetch()){
?>
   <option value="<?php echo $row[0] ?> ">
     <?php echo $row[0]." || ".$row[1]; ?>
    </option>
<?php
}
?>        
</select>










<tr>
<td></td>
<td>
    <input type="submit" name="modifier" value="modifier" ></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="cin_ini" value="<?PHP echo $_GET['cin'];?>"></td>
</tr>
</table>
hhh

<div class="container">
  <center><h1>les livreur</h1></center>

  <?php
 

  require "../../Entity/livreur.php";

require "../../Core/livreurC.php";

  
           $edu = new livreurC;
           $coll =$edu->getcollegesblanklating();

           
           $coll =json_encode($coll,true);
           echo '<div id="data">'.$coll.'</div>';



           $alldata =$edu->getallcollg();
           $alldata =json_encode($alldata,true);
           echo '<div id="alldata">'.$alldata.'</div>';





  ?>
  <div id="map"></div>

  </div>

   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBlIlsOsaNiZisQoHtWAixK-vXW1Xy2Ess&callback=initMap"
    async defer></script>



<?PHP
  }
 }   

if (isset($_POST['modifier'])){
    $employe=new laivraison($_POST['nom'],$_POST['prenom'],$_POST['adresse_ligne_1'],$_POST['adresse_ligne_2'],$_POST['ville'],$_POST['mail'],$_POST['num_tel'],$_POST['code_livre'],$_POST['date_laivraison'],"0",$_POST['livreur'],15);

$employe->setcode_Livraison($_POST['code_Livraison']);







    $employeC = new laivraisonC(); 
    $employeC->modifierLaivraison($employe,$_POST['cin_ini']);
   // echo $_POST['cin_ini']; 
    //header('Location: afficherLaivraison.php');
//hiiiiiiiiier
 

include "../../Entity/livreur.php";

include "../../Core/livreurC.php";



    $employeC2 = new livreurC();
    $result=$employeC2->recupererLivreur($_POST['livreur']);
    foreach($result as $row){
        $cin=$row['cin'];
        $nom=$row['nom'];
        $prenom=$row['prenom'];
        
        $mail=$row['mail'];
        $num_tel=$row['num_tel'];
       
        $ville_actuelle=$row['ville_actuelle'];
        $situation=$row['situation']+1;
      $lat=$row['lat'];
    $lng=$row['lng'];}

        $employe2=new livreur($nom,$prenom,$mail,$num_tel,$ville_actuelle,$situation,$lat,$lng);
        $employe2->setcin($cin);
    $employeC2 = new livreurC(); 
    $employeC2->modifierLivreur($employe2,$cin);


   

}
?>
 
  <div class="woocommerce">   <p class="return-to-shop">
            
            <a href="affecter_livreur.php">returne</a>

            
                          </p>
                         </div>


      <!-- Blank div to give the page height to preview the fixed vs. static navbar-->
      <div style="height: 1000px;"></div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <!-- Toggle between fixed and static navbar-->
    <script>
    $('#toggleNavPosition').click(function() {
      $('body').toggleClass('fixed-nav');
      $('nav').toggleClass('fixed-top static-top');
    });

    </script>
    <!-- Toggle between dark and light navbar-->
    <script>
    $('#toggleNavColor').click(function() {
      $('nav').toggleClass('navbar-dark navbar-light');
      $('nav').toggleClass('bg-dark bg-light');
      $('body').toggleClass('bg-dark bg-light');
    });

    </script>
</body>

</html>
