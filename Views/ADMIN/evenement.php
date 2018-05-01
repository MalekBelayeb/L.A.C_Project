
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
  <?php require_once "header.php"; ?>
<!--*******************************************************************************************************************************************************************************-->
<!--*******************************************************************************************************************************************************************************-->
<!--*******************************************************************************************************************************************************************************-->
<!--*******************************************************************************************************************************************************************************-->


<div class="container">
            <div class="row">
                <h3>Evenement</h3>
            </div>
            <div class="row">
              

              <p>
                  <a href="creeeven.php" class="btn btn-success">Create</a>
                </p>



                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>nom evenemet  </th>
                      <th>invite de l evenement  </th>
                      <th>date de l evenement    </th>
                      <th>Action    ||</th>
                    </tr>
                  </thead>
                  <tbody>

 

 <?php
                
include_once "C:/wamp64/www/AvenirCulturel/core/evenementcore.php";
$core = new evenementcore();
$liste = $core->afficher_evenement();

                   foreach ($liste as $row) {
                            echo '<tr>';
                            echo '<td>'. $row['nom_ev'] . '</td>';
                            echo '<td>'. $row['invite_ev'] . '</td>';
                            echo '<td>'. $row['date_ev'] . '</td>';

                              echo '<td width=250>';
                                echo '<a class="btn btn-primary"  href="affichereven.php?id_ev='.$row['id_ev'].'">Read</a>';
                                echo ' ';
                                echo '<a class="btn btn-success" href="modifiereven.php?id_ev='.$row['id_ev'].'">Update</a>';
                                echo ' ';
                                echo '<a class="btn btn-danger" href="effacereven.php?id_ev='.$row['id_ev'].'">Delete</a>';
                                echo '</td>';
                                echo '</tr>';
                            echo '</tr>';
                   }
                  // Database::disconnect();
                  ?>



                   </tbody>
            </table>
        </div>
    </div> <!-- /container -->



<!--*******************************************************************************************************************************************************************************-->
<!--*******************************************************************************************************************************************************************************-->
<!--*******************************************************************************************************************************************************************************-->
<!--*******************************************************************************************************************************************************************************-->




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




  


