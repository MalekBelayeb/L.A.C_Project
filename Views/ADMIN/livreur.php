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
 

<?php  require_once "header.php";  ?>


    <div class="container-fluid">
      <!-- Breadcrumbs-->
      

      <?php

include "../../Entity/livreur.php";

include "../../Core/livreurC.php";


if ( isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['mail'])and isset($_POST['num_tel'])and isset($_POST['ville_actuelle'])){
  if ($_POST['ville_actuelle']=='tunis') {
  $_POST['lat']=36.8065;
  $_POST['lng']=10.1815;
}

if ($_POST['ville_actuelle']=='bizert') {
  $_POST['lat']=37.2746;
  $_POST['lng']=9.8627;
}

if ($_POST['ville_actuelle']=='kef') {
  $_POST['lat']=36.1680;
  $_POST['lng']=8.7096;
}

if ($_POST['ville_actuelle']=='sous') {
  $_POST['lat']=35.8245;
  $_POST['lng']=10.6346;
}

if ($_POST['ville_actuelle']=='mounestir') {
  $_POST['lat']=35.7643;
  $_POST['lng']=10.8113;
}

if ($_POST['ville_actuelle']=='jendouba') {
  $_POST['lat']=36.5072;
  $_POST['lng']=8.7757;
}
if ($_POST['ville_actuelle']=='gafssa') {
  $_POST['lat']=34.4311;
  $_POST['lng']=8.7757;
}

   $nameError = null;
    $prenameError = null;
    $mailError = null;
    $numtelError =null;
       
         
        // keep track post values
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $mail = $_POST['mail'];
         $num_tel = $_POST['num_tel'];

           // validate input
        $valid = true;
        if (empty($nom)) {

            $nameError = 'Please enter Name ';
          
            $valid = false;
        
            
        }else  if (preg_match('#[^a-z]#',$nom)) {
            $nameError = 'name contenir que des lettre';

            $valid = false;
        }

           if (empty($prenom)) {

            $prenameError = 'Please enter prenom ';
          
            $valid = false;
        
            
        }else  if (preg_match('#[^a-z]#',$prenom)) {
            $prenameError = 'prenom contenir que des lettre';

            $valid = false;
        }




        if ($valid) {



$laivreur1=new livreur($_POST['nom'],$_POST['prenom'],$_POST['mail'],$_POST['num_tel'],$_POST['ville_actuelle'],"0",$_POST['lat'],$_POST['lng']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$livreur1C=new livreurC();
$livreur1C->ajouterLivreur($laivreur1);
//header('Location: afficherLivreur.php');
echo "<script>location.href='afficherLivreur.php'</script>";

}
}
  





?>


 
 <h1>ajouter livreur</h1>
      <hr>
     
      <form id="register-form" action="livreur.php" method="POST">


                       
                       <!-- <label class="raed">nom       </label>
                        <input type="text" class="livraison2" name="nom" value="" placeholder="nom... " required=""><br>-->

                        <tr>
<td>
  <div <?php echo !empty($nameError)?'error':'';?>">
                        <label>Nom</label>
                        <div>
                      
                            <input name="nom" type="text"  placeholder="Nom" value="<?php echo !empty($nom)?$nom:'';?>">
                            <?php if (!empty($nameError)): ?>
                                <span class="help-inline"><?php echo $nameError;?></span>
                            <?php endif; ?>
                     
                        </div>
                      </div>
</td>
</tr>


                        <tr>
  <td>
  <div <?php echo !empty($prenameError)?'error':'';?>">
                        <label>prenom</label>
                        <div>
                      
                            <input name="prenom" type="text"  placeholder="prenom" value="<?php echo !empty($prenom)?$prenom:'';?>">
                            <?php if (!empty($prenameError)): ?>
                                <span class="help-inline"><?php echo $prenameError;?></span>
                            <?php endif; ?>
                     
                        </div>
                      </div>
</td>


</tr>


                  <tr>
  <td>
  <div <?php echo !empty($mailError)?'error':'';?>">
                        <label>prenom</label>
                        <div>
                      
                            <input name="mail" type="email"  placeholder="mail" value="<?php echo !empty($mail)?$mail:'';?>">
                            <?php if (!empty($mailError)): ?>
                                <span class="help-inline"><?php echo $mailError;?></span>
                            <?php endif; ?>
                     
                        </div>
                      </div>
</td>


</tr>

       <tr>
  <td>
  <div <?php echo !empty($numtelError)?'error':'';?>">
                        <label>prenom</label>
                        <div>
                      
                            <input name="num_tel" type="text"  placeholder="num_tel" required="" value="<?php echo !empty($num_tel)?$num_tel:'';?>">
                            <?php if (!empty($numtelError)): ?>
                                <span class="help-inline"><?php echo $numtelError;?></span>
                            <?php endif; ?>
                     
                        </div>
                      </div>
</td>


</tr>







                        <!--<label class="raed">prenom</label>
                        <input type="text" class="livraison6" name="prenom" value="" placeholder="prenom... " required=""><br>-->
                        

                       
                       <!-- <br>
                        <label class="raed">e-mail</label>
                        <input type="email" class="livraison5" name="mail" value="" placeholder="e-mail... " required=""><br>-->


                        <!--<label class="raed">num telephone</label>
                        <input type="number" class="livraison7" name="num_tel" value="" placeholder="num telephone..." required=""><br>-->

                         
                        <label class="raed">ville_actuelle</label>
                        <select name="ville_actuelle" class="select1">
                        
                        <option value="tunis"> tunis </option>
                        <option value="bizert"> bizert </option>
                        <option value="kef"> kef </option>
                         <option value="sous"> sous  </option>
                         <option value="mounestir"> mounestir  </option>
                         <option value="jendouba"> jendouba  </option>
                         <option value="gafssa"> gafssa  </option></select>
                        <br>

                        <label id="data77" class="raed">lat</label>
                        <input id="data77" type="text" class="livraison7" name="lat" value="" placeholder="lat" ><br>

                        <label id="data77" class="raed">lng</label>
                        <input id="data77" type="text" class="livraison7" name="lng" value="" placeholder="lng..." ><br>


                         
                         
                <input type="submit" name="ajouter" value="ajouter" class="button">
            

                       


                       </form>

                         <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.1.3.min.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/additional-methods.min.js"></script>


  <script type="text/javascript">
      $(function () {
    

     $("#register-form").validate({
         rules: {
      nom: {
        required: true,
        
        
      },
       prenom: {
        required: true,


        },
      
       mail: {
        "email": true,

         },
       num_tel: {
        required: true,
        "minlength": 8,
            "maxlength": 8




    }

  },

  messages: {
      nom: {
        required: 'Please enter an nom address.',
        nom: 'Please enter a <em>valid</em> nom address.',
    },
     prenom: {
        required: 'Please enter an prenom.',
        prenom: 'Please enter a <em>valid</em> prenom.',
    }


}
});

});
  </script>

   <style type="text/css">

    #data77{
      display: none;
    }


                          label.raed {
                            color:        #2F4F4F;
                          font-size: 14px;
                          font-family: arial;
                          margin-left: 7%;                         
                          
                          }
                            input.button{
                                background: rgba(255,255,255,0);
                            }
                          input.livraison1{
                            width: 30%;
                                padding: 12px 20px;
                                margin: 8px 0;
                                display: inline-block;
                                border: 1px solid #ccc;
                                border-radius: 4px;
                                box-sizing: border-box;
                                 margin-left: 10%;
                          }
                            input.livraison2{
                                width: 30%;
                                padding: 12px 20px;
                                margin: 8px 0;
                                display: inline-block;
                                border: 1px solid #ccc;
                                border-radius: 4px;
                                box-sizing: border-box;
                                 margin-left: 17%;
                            }
                            input.livraison3{
                                width: 30%;
                                padding: 12px 20px;
                                margin: 8px 0;
                                display: inline-block;
                                border: 1px solid #ccc;
                                border-radius: 4px;
                                box-sizing: border-box;
                                 margin-left: 10%;
                            }
                            input.livraison4{
                                width: 30%;
                                padding: 12px 20px;
                                margin: 8px 0;
                                display: inline-block;
                                border: 1px solid #ccc;
                                border-radius: 4px;
                                box-sizing: border-box;
                                 margin-left: 10%;
                            }
                            input.livraison5{
                                width: 30%;
                                padding: 12px 20px;
                                margin: 8px 0;
                                display: inline-block;
                                border: 1px solid #ccc;
                                border-radius: 4px;
                                box-sizing: border-box;
                                 margin-left: 16%;
                            }
                            input.livraison6{
                                width: 30%;
                                padding: 12px 20px;
                                margin: 8px 0;
                                display: inline-block;
                                border: 1px solid #ccc;
                                border-radius: 4px;
                                box-sizing: border-box;
                                 margin-left: 15%;
                            }
                            input.livraison7{
                                width: 30%;
                                padding: 12px 20px;
                                margin: 8px 0;
                                display: inline-block;
                                border: 1px solid #ccc;
                                border-radius: 4px;
                                box-sizing: border-box;
                                 margin-left: 11%;
                            }
                             input.livraison8{
                                width: 30%;
                                padding: 12px 20px;
                                margin: 8px 0;
                                display: inline-block;
                                border: 1px solid #ccc;
                                border-radius: 4px;
                                box-sizing: border-box;
                                 margin-left: 14%;
                            }
                            select.select1{
                                background-color: #9932CC; 
                                margin-left: 17%;
                            }

                            
                        </style>



                        

                      


    
                      
      <!-- Blank div to give the page height to preview the fixed vs. static navbar-->
      <div style="height: 1000px;"></div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <!-- Toggle between fixed and static navbar-->
    <script>
    $('#toggleNavPosition').click(function() {
      $('body').toggleClass('fixed-nav');
      $('nav').toggleClass('fixed-top static-top');
    });

    </script>
    <!-- Toggle between dark and light navbar-->
    <script>
    $('#toggleNavColor').click(function() {
      $('nav').toggleClass('navbar-dark navbar-light');
      $('nav').toggleClass('bg-dark bg-light');
      $('body').toggleClass('bg-dark bg-light');
    });

    </script>
</body>

</html>
