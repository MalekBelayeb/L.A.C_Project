<?php
     
    include_once 'C:/wamp64/www/AvenirCulturel/config.php';
    include_once 'C:/wamp64/www/AvenirCulturel/core/bookcore.php';


    $id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
    if ( null==$id) {
        header("Location: index.php");
    } else {
        $pdo = connexion:: getConnexion();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM book where ID = ?";
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
    <?php require_once "header.php"; ?>








 <div class="container">
     




                <div>
                    <div>
                        <h3>Read a book</h3>
                    </div>
                     
                    <div >
                      <divc>
                        <label>ID</label>
                        <div>
                            <label>
                                <?php echo $data['ID'];?><br><br>
                            </label>
                        </div>
                      </div>
                      
                      <div>

                        <label>Nom</label>
                        <div >
                            <label >
                                <?php echo $data['NOM'];?><br><br>
                            </label>
                        </div>
                      </div>

                    <div >
                      <divc>
                        <label>Prix</label>
                        <div>
                            <label>
                                <?php echo $data['PRIX'];?><br><br>
                            </label>
                        </div>
                      </div>
                      <div>

                        <label>Genre</label>
                        <div >
                            <label >
                                <?php echo $data['GNERE'];?><br><br>
                            </label>
                        </div>
                      </div>

                      <div >
                      <divc>
                        <label>Image</label>
                        <div>
                            <label>
                                <?php echo $data['IMAGE'];?><br><br>
                            </label>
                        </div>
                      </div>
                      
                      <div>

                        <label>Date</label>
                        <div >
                            <label >
                                <?php echo $data['DATE'];?><br><br>
                            </label>
                        </div>
                      </div>

                    <div >
                      <divc>
                        <label>Reduction</label>
                        <div>
                            <label>
                                <?php echo $data['REDUCTION'];?><br><br>
                            </label>
                        </div>
                      </div>
                      <div>

                        <label>Author</label>
                        <div >
                            <label >
                                <?php echo $data['AUTHOR'];?><br><br>
                            </label>
                        </div>
                      </div>

                       <div >
                      <divc>
                        <label>Overview</label>
                        <div>
                            <label>
                                <?php echo $data['OVERVIEW'];?><br><br>
                            </label>
                        </div>
                      </div>
                      
                      <div>

                        <label>Originalite</label>
                        <div >
                            <label >
                                <?php echo $data['ORIGINALITE'];?><br><br>
                            </label>
                        </div>
                      </div>

                    <div >
                      <divc>
                        <label>Hardcover</label>
                        <div>
                            <label>
                                <?php echo $data['HARDCOVER'];?><br><br>
                            </label>
                        </div>
                      </div>
                      <div>

                        <label>Language</label>
                        <div >
                            <label >
                                <?php echo $data['LANGUAGE'];?><br><br>
                            </label>
                        </div>
                      </div>

                      <div >
                      <divc>
                        <label>ISBN</label>
                        <div>
                            <label>
                                <?php echo $data['ISBN'];?><br><br>
                            </label>
                        </div>
                      </div>
                      <div>

                        <label>Dimension</label>
                        <div >
                            <label >
                                <?php echo $data['DIMENSION'];?><br><br>
                            </label>
                        </div>
                      </div>



                       




                        <div>
                          <a class="btn" href="crud_index_livre.php">Back</a>
                       </div>
                     
                      
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