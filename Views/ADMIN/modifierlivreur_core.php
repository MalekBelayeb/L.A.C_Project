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
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
 


<?php  require_once "header.php";  ?>


    <div class="container-fluid">
     
     
      <!-- Breadcrumbs-->
     
      <!-- Example DataTables Card-->


                       <?PHP
                       



include "../../Entity/livreur.php";

include "../../Core/livreurC.php";



if (isset($_GET['cin'])){
    $employeC2 = new livreurC();
    $result=$employeC2->recupererLivreur($_GET['cin']);
    foreach($result as $row){
        $cin=$row['cin'];
        $nom=$row['nom'];
        $prenom=$row['prenom'];
        
        $mail=$row['mail'];
        $num_tel=$row['num_tel'];
       
        $ville_actuelle=$row['ville_actuelle'];
        $situation=$row['situation'];
        $lat=$row['lat'];
        $lng=$row['lng'];



      
        



   
?>



      <form id="register-form" action="modifierlivreur_core.php" method="POST">

                        <label class="raed">cin       </label>
                        <input type="text" class="livraison2" name="cin"  placeholder="nom... " required="" value="<?PHP echo $cin ?>"><br>
                       
                        <label class="raed">nom       </label>
                        <input type="text" class="livraison2" name="nom"  placeholder="nom... " required="" value="<?PHP echo $nom ?>"><br>
                        <label class="raed">prenom</label>
                        <input type="text" class="livraison6" name="prenom" placeholder="prenom... " required="" value="<?PHP echo $prenom ?>"><br>
                        

                       
                        <br>
                        <label class="raed">e-mail</label>
                        <input type="email" class="livraison5" name="mail"  placeholder="e-mail... " required="" value="<?PHP echo $mail ?>"><br>


                        <label class="raed">num telephone</label>
                        <input type="number" class="livraison7" name="num_tel"  placeholder="num telephone..." required="" value="<?PHP echo $num_tel ?>"><br>

                         
                        

                         <label class="raed">ville_actuelle</label>
                        <select name="ville_actuelle" class="select1">
                        
                        <option value="tunis"> tunis </option>
                        <option value="bizert"> bizert </option>
                        <option value="kef"> kef </option>
                         <option value="sous"> sous  </option>
                         <option value="mounestir"> mounestir  </option>
                         <option value="jendouba"> jendouba  </option>
                         <option value="gafssa"> gafssa  </option></select>


                       
                        <br>

                        <label  class="raed">situation</label>
                        <input  type="text" class="livraison7" name="situation"  placeholder="lat" value="<?PHP echo $situation ?>"><br>
                         <br>

                        <label id="data77" class="raed">lat</label>
                        <input id="data77" type="text" class="livraison7" name="lat" placeholder="lat" value=""><br>


                        <label id="data77" class="raed">lng</label>
                        <input id="data77" type="text" class="livraison7" name="lng"  placeholder="lng..." value=""><br>


                         
                         
               <input type="submit" name="modifier" value="modifier" >
               <input type="hidden" name="cin_ini" value="<?PHP echo $_GET['cin'];?>">
            

                       


                       </form>

                
    <?PHP
  

}
}



if (isset($_POST['modifier'])){
  if ($_POST['ville_actuelle']=='tunis') {
  $_POST['lat']=36.8065;
  $_POST['lng']=10.1815;
}

if ($_POST['ville_actuelle']=='bizert') {
  $_POST['lat']=37.2746;
  $_POST['lng']=9.8627;
}

if ($_POST['ville_actuelle']=='kef') {
  $_POST['lat']=36.1680;
  $_POST['lng']=8.7096;
}

if ($_POST['ville_actuelle']=='sous') {
  $_POST['lat']=35.8245;
  $_POST['lng']=10.6346;
}

if ($_POST['ville_actuelle']=='mounestir') {
  $_POST['lat']=35.7643;
  $_POST['lng']=10.8113;
}

if ($_POST['ville_actuelle']=='jendouba') {
  $_POST['lat']=36.5072;
  $_POST['lng']=8.7757;
}
if ($_POST['ville_actuelle']=='gafssa') {
  $_POST['lat']=34.4311;
  $_POST['lng']=8.7757;
}

    $employe=new livreur($_POST['nom'],$_POST['prenom'],$_POST['mail'],$_POST['num_tel'],$_POST['ville_actuelle'],$_POST['situation'],$_POST['lat'],$_POST['lng']);

    



    
    $employe->setcin($_POST['cin']);

    $employeC = new livreurC(); 
    $employeC->modifierLivreur($employe,$_POST['cin_ini']);
   // echo $_POST['cin_ini']; 
    //header('Location: afficherLaivraison.php');

   

}


?>
 <style type="text/css">

    #data77{
      display: none;
    }
    </style>
 <a href="modifier_livreur.php">returne</a>

  



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
