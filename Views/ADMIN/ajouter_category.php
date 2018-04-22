<?php
     
    include_once 'C:/wamp64/www/AvenirCulturel/config.php';
    include_once 'C:/wamp64/www/AvenirCulturel/core/bookcore.php';



    if ( !empty($_POST)) {
        // keep track validation errors
        $nameError = null;
        
         
        // keep track post values
        $nom = $_POST['nom'];
        

        // validate input
        $valid = true;
        if (empty($nom)) {
            $nameError = 'Please enter Name';
            $valid = false;
        }
         
          
         
        // insert data
        if ($valid) {
            $pdo = connexion:: getConnexion();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO category (CATEGORY) values(?)";
            $q = $pdo->prepare($sql);
            $q->execute(array($nom));


            




            //Database::disconnect();
            header("Location: crud_index_categorie.php");
        }
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
                        <h3>Create a Customer</h3>
                    </div>
             
                    <form  action="ajouter_category.php" method="post">
                      
                      <div <?php echo !empty($nameError)?'error':'';?>">
                        <label>Nom</label>
                        <div>
                      
                            <input name="nom" type="text"  placeholder="Nom" value="<?php echo !empty($nom)?$nom:'';?>">
                            <?php if (!empty($nameError)): ?>
                                <span class="help-inline"><?php echo $nameError;?></span>
                            <?php endif; ?>
                     
                        </div>
                      </div>

                      
                      </div>

                      <div class="form-actions">
                          <button type="submit" class="btn btn-success">Create</button>
                          <a class="btn" href="crud_index_livre.php">Back</a>
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