<?php

//    require 'database.php';
    include_once "C:/wamp64/www/AvenirCulturel/Config.php";




    $id = null;
    if ( !empty($_GET['id_ev'])) {
        $id = $_REQUEST['id_ev'];
    }
     
    if ( null==$id) {
        header("Location: index.php");
    } else {
        $pdo =Connexion::getConnexion();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM evenement where id_ev = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        $data = $q->fetch(PDO::FETCH_ASSOC);
       // Database::disconnect();
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
 





<!--***********************************************************************************8****************************************-->
<!--***********************************************************************************8****************************************-->
<!--***********************************************************************************8****************************************-->
<!--***********************************************************************************8****************************************-->



<?php require_once "header.php"; ?>
    <div class="container">
     
                <div>
                    <div>
                        <h3>Read a Evenement</h3>
                    </div>
                     
                    <div >
                      <divc>
                        <label>|| Nom de l'evenement   ||</label>
                        <div>
                            <label>

                                <?php echo $data['nom_ev'];?><br><br>
                            </label>
                        </div>
                      </div>
                      <div>

                        <label>|| Inviter de l'evenement    ||</label>
                        <div >
                            <label >
                                <?php echo $data['invite_ev'];?><br><br>
                            </label>
                        </div>
                      </div>

                      <div >
                        <label>|| Date de l'evenemet      ||</label>
                        <div >
                            <label>
                                <?php echo $data['date_ev'];?><br><br>
                            </label>
                        </div>
                      </div>


                      <div >
                        <label>|| Le sujet  de l'evenemet      ||</label>
                        <div >
                            <label>
                                <?php echo $data['sujet_ev'];?><br><br>
                            </label>
                        </div>
                      </div>


<div >
                        <label>|| Le resume de sujet de l'evenemet      ||</label>
                        <div >
                            <label>
                                <?php echo $data['sujet_res_ev'];?><br><br>
                            </label>
                        </div>
                      </div>


                      <div >
                        <label>|| Image 1 de l'evenemet      ||</label>
                        <div >
                            <label>
                                <?php echo $data['image_ev'];?><br><br>
                            </label>
                        </div>
                      </div>


                       <div >
                        <label>|| Image 2 de l'evenemet      ||</label>
                        <div >
                            <label>
                                <?php echo $data['image_ev1'];?><br><br>
                            </label>
                        </div>
                      </div>

 <div >
                        <label>|| Image 3 de l'evenemet      ||</label>
                        <div >
                            <label>
                                <?php echo $data['image_ev2'];?><br><br>
                            </label>
                        </div>
                      </div>


 <div >
                        <label>|| Image 4 de l'evenemet      ||</label>
                        <div >
                            <label>
                                <?php echo $data['image_ev3'];?><br><br>
                            </label>
                        </div>
                      </div>
                  <div>
                          <a class="btn btn-primary"  href="evenement.php">Back</a>
                       </div>
                     
                      
                    </div>
                </div>
                 
    </div> <!-- /container -->
  </body>
</html>



<!--***********************************************************************************8****************************************-->
<!--***********************************************************************************8****************************************-->
<!--***********************************************************************************8****************************************-->
<!--***********************************************************************************8****************************************-->










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
