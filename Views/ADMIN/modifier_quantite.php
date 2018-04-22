<?php

    include_once 'C:/wamp64/www/AvenirCulturel/core/bookcore.php';
    $book = New bookcore();

    $id = null;


      if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
        $donnes_book = $book->Get_Livre_id($id);
    }
     


  if ( null==$id ) {
        header("Location: crud_index_livre.php");
    }

      if ( !empty($_POST)) {
               $quantError = null;




      $quant = $_POST['quant'];


       $valid = true;
        if (empty($quant)) {
            $quantError = 'entre quantite';
            $valid = false;
        }else if ($quant<$donnes_book['QUANTITE'])
        {
          $quantError = 'entre quantite plus grande que la precedente ';
          $valid = false;
        }




         if ($valid) {
            

            $book->changer_quantite($id,$quant);

            //Database::disconnect();
            header("Location: crud_index_livre.php");
        }else {

          

        $data = $book->Get_Livre_id($id);


        $quant = $data['QUANTITE'];
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
                        <h3>Update a Customer</h3>
                    </div>
             



                      <form  action="modifier_quantite.php?id=<?php echo $id?>" method="post">
                      
                      <div <?php echo !empty($quantError)?'error':'';?>">
                        <label>Nom</label>
                        <div>
                      
                            <input name="quant" type="text"  placeholder="quantite" value="<?php  echo $donnes_book['QUANTITE']; ?>">
                            <?php if (!empty($quant)): ?>
                                <span class="help-inline"><?php echo $quantError;?></span>
                            <?php endif; ?>
                     
                        </div>
                      </div>

                         <div class="form-actions">
                          <button type="submit" class="btn btn-success">Update</button>
                          <a class="btn" href="crud_index_livre.php">Back</a>
                        </div>

                      </form>
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