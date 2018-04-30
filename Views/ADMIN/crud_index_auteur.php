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
 

 <?php  require_once "header.php"  ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
  
$(document).ready(function () {

  $("#input").keyup(function () {
    var name = $("#input").val();
    $.post("suggestion_auteur.php", {
      suggestion : name
    }, function(data,status){
      $("#test").html(data);
    });




  });



});


</script>



 <div class="container">
            <div class="row">
                <h3>Gestion des Livres</h3>
            </div>
            <div class="row">
              

              <p>
                  <a href="ajouter_auteur.php" class="btn btn-success">Create</a>
                </p>
                <input class="form-control" type="text" placeholder="Search for..." id="input">



                <table class="table table-striped table-bordered" id="test">
                  <thead>
                    <tr>
                      <th>ID             </th>
                      <th>NOM            </th>
                      <th>ACTION         </th>
                     
                    </tr>
                  </thead>
                  <tbody>

 <?php
                   include_once 'C:/wamp64/www/AvenirCulturel/core/auteurcore.php';
                   
                  
                   $auter = new Auteurcore();


                  
                   foreach ($auter->afficher_order_id() as $row) {
                            echo '<tr>';
                            echo '<td>'. $row['ID'] . '</td>';
                            echo '<td>'. $row['NOM'] . '</td>';
                     

                              echo '<td width=250>';
                                echo '<a class="btn btn-primary" href="read_auteur.php?id='.$row['ID'].'">Read</a>';
                                echo ' ';
                                echo '<a class="btn btn-success" href="update_auteur.php?id='.$row['ID'].'">Update</a>';
                                echo ' ';
                                echo '<a class="btn btn-danger" href="delete_auteur.php?id='.$row['ID'].'">Delete</a>';
                                echo '</td>';
                                echo '</tr>';
                   }
                  // Database::disconnect();
                  ?>



                   </tbody>
            </table>
        </div>
    </div> 













   <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-charts.min.js"></script>
  </div>




</body>

</html>