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






 <div class="container">
            <div class="row">
                <h3>Gestion des Livres</h3>
            </div>
            <div class="row">
              

              <p>
                  <a href="ajouter_category.php" class="btn btn-success">Create</a>
                </p>



                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>ID             </th>
                      <th>Categorie            </th>
                      
                     
                    </tr>
                  </thead>
                  <tbody>

 <?php
                   include_once 'C:/wamp64/www/AvenirCulturel/config.php';
                   
                  

                   $pdo = connexion:: getConnexion();
                   $sql = 'SELECT * FROM category ORDER BY ID DESC';
                   foreach ($pdo->query($sql) as $row) {
                            echo '<tr>';
                            echo '<td>'. $row['ID'] . '</td>';
                            echo '<td>'. $row['CATEGORY'] . '</td>';
                     

                              echo '<td width=250>';
                                
                                echo '<a class="btn btn-success" href="update_category.php?id='.$row['ID'].'">Update</a>';
                                echo ' ';
                                echo '<a class="btn btn-danger" href="delete_category.php?id='.$row['ID'].'">Delete</a>';
                                echo '</td>';
                                echo '</tr>';
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