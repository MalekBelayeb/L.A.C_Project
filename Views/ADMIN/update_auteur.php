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
        $imageError = null;
        $text_auteurError = null;
        $publisherError = null;
         
        // keep track post values
        $nom  = $_POST['nom'];
        $image = $_POST['image'];
        $text_auteur = $_POST['text_auteur'];
        $Publisher = $_POST['Publisher'];
         
        // validate input
        $valid = true;
        if (empty($nom)) {
            $nameError = 'Please enter Name';
            $valid = false;
        }
        
        if (empty($image)) {
            $imageError = 'Please enter Image';
            $valid = false;
        }

        if (empty($text_auteur)) {
            $text_auteurError = 'Please enter text';
            $valid = false;
        }

        if (empty($Publisher)) {
            $publisherError = 'Please enter Publisher';
            $valid = false;
        }
        
        
         
         
        // update data
        if ($valid) {
            $auteur = new Auteurcore();

            $auteur->modifier_auteur($nom,$image,$text_auteur,$Publisher,$id);

            
            //Database::disconnect();
            header("Location: crud_index_auteur.php");
        }
    } else {
           $auteur = new Auteurcore();

      $data = $auteur->Recupere_auteur_id($id);
        
        $nom = $data['NOM'];
        $image = $data['IMAGE'];
        $text_auteur = $data['text_auteur'];
        $Publisher = $data['PUBLISHER'];
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
 <?php  

 require_once "header.php"

 ?>







      <div class="container">
     
                <div class="span10 offset1">
                    <div class="row">
                        <h3>Update a Customer</h3>
                    </div>
             



                    <form class="form-horizontal" action="update_auteur.php?id=<?php echo $id?>" method="post">
             
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

                      <div class="control-group <?php echo !empty($imageError)?'error':'';?>">
                        <label class="control-label">Image</label>
                        <div class="controls">
                            <input name="image" type="file"  placeholder="Image" value="<?php echo !empty($image)?$image:'';?>">
                            <?php if (!empty($imageError)): ?>
                                <span class="help-inline"><?php echo $imageError;?></span>
                            <?php endif;?>
                        </div>
                      </div>

                       <div class="control-group <?php echo !empty($text_auteurError)?'error':'';?>">
                        <div <?php echo !empty($text_auteurError)?'error':'';?>">
                        <label>Text d'auteur</label>
                        <div>
                            <textarea name="text_auteur" placeholder="enter text " class="help-inline">
                                <?php echo !empty($text_auteur)?$text_auteur:'';?>
                            </textarea>
                          
                        </div>
                      </div>

                      <div class="control-group <?php echo !empty($publisherError)?'error':'';?>">
                        <label class="control-label">Publisher</label>
                        <div class="controls">
                            <input name="Publisher" type="text"  placeholder="Publisher" value="<?php echo !empty($Publisher)?$Publisher:'';?>">
                            <?php if (!empty($publisherError)): ?>
                                <span class="help-inline"><?php echo $publisherError;?></span>
                            <?php endif;?>
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