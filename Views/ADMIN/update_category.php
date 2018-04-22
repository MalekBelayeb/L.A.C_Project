<?php
    include_once 'C:/wamp64/www/AvenirCulturel/config.php';
    include_once 'C:/wamp64/www/AvenirCulturel/core/auteurcore.php';
 
    $id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
    if ( null==$id ) {
        header("Location: crud_index_auteur.php");
    }
     
    if ( !empty($_POST)) {
        // keep track validation errors
        $nameError = null;
       
        // keep track post values
        $nom  = $_POST['nom'];
         
        // validate input
        $valid = true;
        if (empty($nom)) {
            $nameError = 'Please enter Name';
            $valid = false;
        }
        
        
        
         
         
        // update data
        if ($valid) {
            $pdo = connexion:: getConnexion();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE category SET CATEGORY=? WHERE ID=?";
            $q = $pdo->prepare($sql);
            $q->execute(array($nom,$id));
            //Database::disconnect();
            header("Location: crud_index_categorie.php");
        }
    } else {
            $pdo = connexion:: getConnexion();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM category where ID = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        $nom = $data['CATEGORY'];
       
        //Database::disconnect();
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
                        <h3>Update a Customer</h3>
                    </div>
             



                    <form class="form-horizontal" action="update_category.php?id=<?php echo $id?>" method="post">
             
                    <?php  echo $id;  ?>


                      <div class="control-group <?php echo !empty($nameError)?'error':'';?>">
                        <label class="control-label">nom</label>
                        <div class="controls">
                            <input name="nom" type="text" placeholder="Nom" value="<?php echo !empty($nom)?$nom:'';?>">
                            <?php if (!empty($nameError)): ?>
                                <span class="help-inline"><?php echo $nameError;?></span>
                            <?php endif;?>
                        </div>
                      </div>

                    
                        
                      </div>



                      </div>

                      



                      <div class="form-actions">
                          <button type="submit" class="btn btn-success">Update</button>
                          <a class="btn" href="crud_index_auteur.php">Back</a>
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