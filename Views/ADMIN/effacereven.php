<?php
  //  require 'database.php';
include_once "C:/wamp64/www/AvenirCulturel/core/evenementcore.php";

    $id_ev = 0;
     
    if ( !empty($_GET['id_ev'])) {
        $id_ev = $_REQUEST['id_ev'];
    }
     
    if ( !empty($_POST)) {
        // keep track post values
        $id_ev = $_POST['id_ev'];
         
        // delete data


    $core = new evenementcore();
    $core-> delete_evenement($id_ev);
  


        header("Location: evenement.php");
         
    }
?>






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
     
                <div class="span10 offset1">
                    <div class="row">
                        <h3>Delete a Evenement</h3>
                    </div>
                     
                    <form class="form-horizontal" action="effacereven.php" method="post">
                      <input type="hidden" name="id_ev" value="<?php echo $id_ev;?>"/>
                      <p class="alert alert-error">Are you sure to delete ?</p>
                      <div class="form-actions">
                          <button type="submit" class="btn btn-danger">Yes</button>
                          <a  href="evenement.php" class="btn btn-primary" >No</a>
                        </div>
                    </form>
                </div>
                 
    </div> <!-- /container -->








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
