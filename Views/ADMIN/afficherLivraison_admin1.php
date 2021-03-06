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
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->

    <?php  require_once "header.php"; ?>





    <div class="container-fluid">
      <!-- Breadcrumbs-->
   
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Table Example</div>
        <div class="card-body">
          <div class="table-responsive">
             <?php
                             
                             include "../../Core/laivraisonC.php";
                             $employe1C=new laivraisonC();
                             $listeEmployes=$employe1C->afficherLaivraison();

                             

                                
                             ?>


            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>code_Livraison</th>
                  <th>nom</th>
                  <th>prenom</th>
                  <th>adresse_ligne_1</th>
                  <th>adresse_ligne_2 </th>
                  <th>ville</th>
                  <th>mail</th>
                  <th>num_tel</th>
                  <th>code_livre</th>
                  <th>date_laivraison</th>
                  <th>affectation</th>
                  <th>livreur</th>


                 
                  
                  

                </tr>
              </thead>
              <tfoot>
                <tr>
                   <th>code_Livraison</th>
                  <th>nom</th>
                  <th>prenom</th>
                  <th>adresse_ligne_1</th>
                  <th>adresse_ligne_2 tel</th>
                  <th>ville</th>
                  <th>mail</th>
                  <th>num_tel</th>
                  <th>code_livre</th>
                  <th>date_laivraison</th>
                  <th>affectation</th>
                  <th>livreur</th>
                  
                  
                </tr>
              </tfoot>
              <tbody>
                <?PHP
foreach($listeEmployes as $row){
    ?>

    <tr>
    <td><?PHP echo $row['code_Livraison']; ?></td>
    <td><?PHP echo $row['nom']; ?></td>
    <td><?PHP echo $row['prenom']; ?></td>
    <td><?PHP echo $row['adresse_ligne_1']; ?></td>
    <td><?PHP echo $row['adresse_ligne_2']; ?></td>
    <td><?PHP echo $row['ville']; ?></td>
    <td><?PHP echo $row['mail']; ?></td>
    <td><?PHP echo $row['num_tel']; ?></td>
    <td><?PHP echo $row['code_livre']; ?></td>
    <td><?PHP echo $row['date_laivraison']; ?></td>
    <td><?PHP echo $row['affectation']; ?></td>
    <td><?PHP echo $row['livreur']; ?></td>


    

   
    </tr>

     <?PHP
}
?>




               
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
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
    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
  </div>
</body>

</html>
