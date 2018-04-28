<?php
include_once 'C:/wamp64/www/AvenirCulturel/config.php';
    include_once 'C:/wamp64/www/AvenirCulturel/core/bookcore.php';
    include_once  'C:/wamp64/www/AvenirCulturel/core/auteurcore.php';
    include_once  'C:/wamp64/www/AvenirCulturel/core/categorieCore.php';



$category = New categorieCore();


    $donnes_categorie = $category->Afficher_categorie();






?>




<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form method="POST" action="<?php  echo $_SERVER['PHP_SELF']; ?>">

                                      <?php     while ($product = $donnes_categorie->fetch(PDO::FETCH_ASSOC)) :  ?>


                                      				<p><input type="checkbox" name="cat[]" value="<?php echo  $product['CATEGORY'] ?>"><?php echo  $product['CATEGORY']  ?></p>



                                      <?php  endwhile;  ?>


                                      <input type="submit" name="val">



                                      </form>




  <?php
  	if (isset($_POST['val']))
  	{
  		foreach ($_POST['cat'] as $row) {
  			echo $row;
  		}

  		echo $_POST['cat'][0];
  	}


  ?>


</body>
</html>