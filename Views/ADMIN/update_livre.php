<?php
    include_once 'C:/wamp64/www/AvenirCulturel/config.php';
    include_once 'C:/wamp64/www/AvenirCulturel/core/bookcore.php';
    include_once  'C:/wamp64/www/AvenirCulturel/core/auteurcore.php';
    include_once  'C:/wamp64/www/AvenirCulturel/core/categorieCore.php';



    $category = New categorieCore();
    $auteur_class = New Auteurcore();
    $book = New bookcore();
    $donnes_auteur = $auteur_class->afficher_auteur();
    $donnes_categorie = $category->Afficher_categorie();


    $id = null;



    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
        $donnes_book = $book->Get_Livre_id($id);
        $category_livre = $book->get_category_livre($id);

    }
     
    if ( null==$id ) {
        header("Location: crud_index_livre.php");
    }
     
    if ( !empty($_POST)) {
        // keep track validation errors
       $nameError = null;
        $prixError=NULL;
        $auteurError=NULL;
        $categoryError=NULL;
        $imgError = NULL;
        $dateError = NULL;
        $reductionError = NULL;
        $inviteError = null;
        $dateError = null;
                $langError = NULL;

         
        // keep track post values
        $nom = $_POST['nom'];
        $prix = $_POST['Prix'];
        $auteur = $_POST['choisir_auteur'];    

if (empty($_POST['cat']))
        $category = NULL;
        else  
        $category= $_POST['cat'];   

        $image = $_POST['img'];
        $date = $_POST['date'];
        $red = $_POST['reduction'];
        $ov = $_POST['Overview'];
        $or = $_POST['Originalite'];
        $har = $_POST['HARDCOVER'];
        $lang = $_POST['lang'];
        $ISBN = $_POST['ISBN'];
        $dim = $_POST['Dimension'];
        $couleur = $_POST['couleur'];

         






          // validate input
        $valid = true;
        if (empty($nom)) {
            $nameError = 'Please enter Name';
            $valid = false;
        }



        if (empty($prix))
        {
          $prixError="please enter a PRICE";
          $valid = false;
        }else if (preg_match('#[^0-9]#',$prix))
        {
             $prixError="please enter a numebr";
          $valid = false;
        }


        if (empty($auteur))
        {
          $auteurError = "please chose an AUTHOR";
          $valid = false;

        }

        if (empty($category))
        {
          $categoryError = "Please Chose category";
          $valid = false;
        }

        if (empty($image))
        {
          $imgError = "Please chose PHOTO";
          $valid = false;
        }

        if (empty($date))
        {
          $dateError = "please chose a date";
          $valid = false;
        }


        if ($red!='0')

        if (empty($red))
        {
          $reductionError = "Please enter a reduction";
          $valid = false;
        }else if (preg_match('#[^0-9]#',$red))
        {
          $reductionError = "Please Enter number";
          $valid = false;
        }

         if (strlen($lang)>3)
        {
          $langError = "entrer une valeur comme (fr,ang)";
          $valid = false;
        }
        
        
         
         
        // update data
        if ($valid) {
            

            $book->Update_Livre($nom,$prix,$category[0],$image,$date,$red,$auteur,$ov,$or,$har,$lang,$ISBN,$dim,$id);

            
            $book->delete_category($id);


                        $cat = "";


            foreach ($_POST['cat'] as $row) {


                      $book->insert_category($id,$row);
                        $cat .= $row;

                
              }
              $book->modifier_MAJ_category($cat,$id);

            //Database::disconnect();
            header("Location: crud_index_livre.php");
        }
    } else {
          

        $data = $book->Get_Livre_id($id);


        $nom = $data['NOM'];
        $prix = $data['PRIX'];
        $category = $data['GNERE'];
        $image = $data['IMAGE'];
        $date = $data['DATE'];
        $red = $data['REDUCTION'];
        $auteur = $data['AUTHOR'];
        $ov = $data['OVERVIEW'];
        $or = $data['ORIGINALITE'];
        $har = $data['HARDCOVER'];
        $lang = $data['LANGUAGE'];
        $ISBN = $data['ISBN'];
        $dim = $data['DIMENSION'];
        $couleur = $data['couleur'];

        
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
             



                      <form  action="update_livre.php?id=<?php echo $id ?>" method="post">
                      
                      <div <?php echo !empty($nameError)?'error':'';?>">
                        <label>Nom</label>
                        <div>
                      
                            <input name="nom" type="text"  placeholder="Nom" value="<?php  echo $donnes_book['NOM']; ?>">
                            <?php if (!empty($nameError)): ?>
                                <span class="help-inline"><?php echo $nameError;?></span>
                            <?php endif; ?>
                     
                        </div>
                      </div>

                      <div <?php echo !empty($prixError)?'error':'';?>">
                        <label>Prix</label>
                        <div>
                      
                            <input name="Prix" type="float"  placeholder="Prix" value="<?php  echo $donnes_book['PRIX']; ?>">
                            <?php if (!empty($prixError)): ?>
                                <span class="help-inline"><?php echo $prixError;?></span>
                            <?php endif; ?>
                     
                        </div>
                      </div>

                      <div <?php echo !empty($nameError)?'error':'';?>">
                        <label>Genre</label>
                        <div>
                      
                               <?php     while ($product = $donnes_categorie->fetch(PDO::FETCH_ASSOC)) :  ?>
                                        <p><input type="checkbox" name="cat[]" value="<?php echo  $product['CATEGORY'] ?>" <?php foreach ($book->get_category_livre($id) as $row) if ( $product['CATEGORY']==$row['CATEGORY'])  echo 'checked=""';   ?>><?php echo  $product['CATEGORY']  ?></p>
                                      <?php  endwhile;   ?>

                           
                            <?php if (!empty($categoryError)): ?>
                                <span class="help-inline"><?php echo $categoryError;?></span>
                            <?php endif; ?>
                     
                        </div>
                      </div>

                      <div <?php echo !empty($nameError)?'error':'';?>">
                        <label>Nom auteur</label>
                        <div>
                      
                            <input name="img" type="file"  placeholder="image" value="<?php echo $donnes_book['IMAGE']; ?>">
                            <?php if (!empty($imgError)): ?>
                                <span class="help-inline"><?php echo $imgError;?></span>
                            <?php endif; ?>
                     
                        </div>
                      </div>

                      <div <?php echo !empty($nameError)?'error':'';?>">
                        <label>Date</label>
                        <div>
                      
                            <input name="date" type="date"  placeholder="Date" value="<?php  echo $donnes_book['DATE']; ?>">
                            <?php if (!empty($dateError)): ?>
                                <span class="help-inline"><?php echo $dateError;?></span>
                            <?php endif; ?>
                     
                        </div>
                      </div>

                      <div <?php echo !empty($nameError)?'error':'';?>">
                        <label>Reduction</label>
                        <div>
                      
                            <input name="reduction" type="text"  placeholder="reduction" value="<?php  echo $donnes_book['REDUCTION']; ?>">
                            <?php if (!empty($reductionError)): ?>
                                <span class="help-inline"><?php echo $reductionError;?></span>
                            <?php endif; ?>
                     
                        </div>
                      </div>

                      <div <?php echo !empty($nameError)?'error':'';?>">
                        <label>id_auteur</label>
                        <div>
                      
                              <select class="option" name="choisir_auteur">
                                        <option value="" selected="" >choisir un auteur</option>
                                <?php     while ($product = $donnes_auteur->fetch(PDO::FETCH_ASSOC)) :  ?>

                                <option value="<?php echo $product['ID']; ?>"   >    <?php  echo "ID: ".$product['ID']." || NOM: ".$product['NOM'];     ?></option>
                                <?php   endwhile; ?>  

                            </select>               <?php if (!empty($auteurError)): ?>
                                <span class="help-inline"><?php echo $auteurError;?></span>
                            <?php endif; ?>
                     
                        </div>
                      </div>

                      <div <?php echo !empty($nameError)?'error':'';?>">
                        <label>Overview</label>
                        <div>
                      
                            <input name="Overview" type="text"  placeholder="Overview" value="<?php  echo $donnes_book['OVERVIEW']; ?>">
                            <?php if (!empty($nameError)): ?>
                                <span class="help-inline"><?php echo $nameError;?></span>
                            <?php endif; ?>
                     
                        </div>
                      </div>

                      <div <?php echo !empty($nameError)?'error':'';?>">
                        <label>Originalite</label>
                        <div>
                      
                            <input name="Originalite" type="text"  placeholder="Originalite" value="<?php  echo $donnes_book['ORIGINALITE']; ?>">
                            
                     
                        </div>
                      </div>

                      <div <?php echo !empty($nameError)?'error':'';?>">
                        <label>HARDCOVER</label>
                        <div>
                      
                            <input name="HARDCOVER" type="text"  placeholder="HARDCOVER" value="<?php  echo $donnes_book['HARDCOVER']; ?>">
                           
                     
                        </div>
                      </div>
                      
                      <div <?php echo !empty($nameError)?'error':'';?>">
                        <label>Language</label>
                        <div>
                      
                            <input name="lang" type="text"  placeholder="Language" value="<?php  echo $donnes_book['LANGUAGE']; ?>">
                             <?php if (!empty($langError)): ?>
                                <span class="help-inline"><?php echo $langError;?></span>
                            <?php endif; ?>
                     
                        </div>
                      </div>

                      <div <?php echo !empty($nameError)?'error':'';?>">
                        <label>ISBN</label>
                        <div>
                      
                            <input name="ISBN" type="text"  placeholder="ISBN" value="<?php  echo $donnes_book['ISBN']; ?>">
                            
                     
                        </div>
                      </div>

                      <div <?php echo !empty($nameError)?'error':'';?>">
                        <label>Dimension</label>
                        <div>
                      
                            <input name="Dimension" type="text"  placeholder="Dimension" value="<?php  echo $donnes_book['DIMENSION']; ?>">
                            
                     
                        </div>
                      </div>

                      <div <?php echo !empty($couleurError)?'error':'';?>">
                        <label>couleur (anglais ou code)</label>
                        <div>
                      
                            <input name="couleur" type="text"  placeholder="couleur" value="<?php  echo $donnes_book['couleur']; ?>">
                            
                     
                        </div>
                      </div>
                      



                      <div class="form-actions">
                          <button type="submit" class="btn btn-success">Update</button>
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