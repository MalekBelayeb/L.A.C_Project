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
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">Start Bootstrap</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.html">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="charts.html">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Charts</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="tables.html">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Tables</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">livraison</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="navbar.html">livraison</a>
            </li>
            <li>
              <a href="cards.html">livreur</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Example Pages</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
              <a href="login.html">Login Page</a>
            </li>
            <li>
              <a href="register.html">Registration Page</a>
            </li>
            <li>
              <a href="forgot-password.html">Forgot Password Page</a>
            </li>
            <li>
              <a href="blank.html">Blank Page</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-sitemap"></i>
            <span class="nav-link-text">Menu Levels</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti">
            <li>
              <a href="#">Second Level Item</a>
            </li>
            <li>
              <a href="#">Second Level Item</a>
            </li>
            <li>
              <a href="#">Second Level Item</a>
            </li>
            <li>
              <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Third Level</a>
              <ul class="sidenav-third-level collapse" id="collapseMulti2">
                <li>
                  <a href="#">Third Level Item</a>
                </li>
                <li>
                  <a href="#">Third Level Item</a>
                </li>
                <li>
                  <a href="#">Third Level Item</a>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          <a class="nav-link" href="#">
            <i class="fa fa-fw fa-link"></i>
            <span class="nav-link-text">Link</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-envelope"></i>
            <span class="d-lg-none">Messages
              <span class="badge badge-pill badge-primary">12 New</span>
            </span>
            <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">New Messages:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>David Miller</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>Jane Smith</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>John Doe</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all messages</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell"></i>
            <span class="d-lg-none">Alerts
              <span class="badge badge-pill badge-warning">6 New</span>
            </span>
            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">New Alerts:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-danger">
                <strong>
                  <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all alerts</a>
          </div>
        </li>
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">livreur</li>
      </ol>
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
    $employe=new laivraison($_POST['nom'],$_POST['prenom'],$_POST['adresse_ligne_1'],$_POST['adresse_ligne_2'],$_POST['ville'],$_POST['mail'],$_POST['num_tel'],$_POST['code_livre'],$_POST['date_laivraison'],"0",$_POST['livreur']);

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
  </div>
</body>

</html>
