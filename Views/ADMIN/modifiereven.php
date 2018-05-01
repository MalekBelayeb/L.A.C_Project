<?php
include_once "C:/wamp64/www/AvenirCulturel/core/evenementcore.php";
 
    $id_ev = null;
    if ( !empty($_GET['id_ev'])) {
        $id_ev = $_REQUEST['id_ev'];
    }
     
    if ( null==$id_ev ) {
        header("Location: evenement.php");
    }
     
    if ( !empty($_POST)) {
        // keep track validation errors
        $nameError = null;
        $invitelError = null;
        $dateError = null;
        $sujet_evError=null;
        $sujet_res_evError=null;
        $imageError=null;
         
        // keep track post values
        $nom_ev  = $_POST['nom_ev'];
        $invite_ev = $_POST['invite_ev'];
        $date_ev = $_POST['date_ev'];
        $sujet_ev=$_POST['sujet_ev'];
        $sujet_res_ev=$_POST['sujet_res_ev'];
        $image_ev=$_POST['image_ev'];
        $image_ev1=$_POST['image_ev1']; 
        $image_ev2=$_POST['image_ev2']; 
        $image_ev3=$_POST['image_ev3']; 



      $nowDate=date('Ymd');
        $nowDate=new DateTime($nowDate);
        $DateDate=new DateTime($date_ev);
        $interval1=date_diff($DateDate,$nowDate);


         
        // validate input
        $valid = true;
        if (empty($nom_ev)) {
            $nameError = 'entrer le nom de l evenement';
            $valid = false;
        }else if(preg_match('#[^a-zA-Z]#',$nom_ev))
        {
          $nameError = 'verifier seul des caracteres!!';
            $valid = false;
        }
         
        if (empty($invite_ev)) {
            $inviteError = 'entrer le nom de l invite';
            $valid = false;
     }else if(preg_match('#[^a-zA-Z]#',$invite_ev))
        {
          $inviteError = 'verifier seul des caracteres!!';
            $valid = false;
        }
         
        if (empty($date_ev)) {
            $dateError = 'entrer la date de l evenement';
            $valid = false;
        }


        if (empty($sujet_ev)) {
            $sujet_evError = 'entrer le sujet de l evenement';
            $valid = false;
        }

         if (empty($sujet_res_ev)) {
            $sujet_res_evError = 'entrer l objectif de l evenement';
            $valid = false;
        }     
         
if($interval1->invert==0)
{
   $dateError= 'verifier';
            $valid = false;
}
         
        // update data
        if ($valid) {
          
 $bk = new Evenement ($_POST['nom_ev'],$_POST['invite_ev'],$_POST['date_ev'],$_POST['sujet_ev'],$_POST['sujet_res_ev'],$_POST['image_ev'],$_POST['image_ev1'],$_POST['image_ev2'],$_POST['image_ev3']);
 $bk->setId_ev($id_ev);
    $core = new evenementcore();
    $core-> update_evenement($bk);
  




           /* $pdo = Config:: getConnexion();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE evenement  set nom_ev = ?, invite_ev = ?, date_ev =? ,sujet_ev=?,sujet_res_ev=?,  image_ev=? WHERE id_ev = ?";
            $q = $pdo->prepare($sql);
            $q->execute(array($nom_ev,$invite_ev,$date_ev,$sujet_ev,$sujet_res_ev,$image_ev,$id_ev));
            //Database::disconnect();*/
            header("Location: evenement.php");
        }
    } else {
            $pdo = Connexion::getConnexion();

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM evenement where id_ev = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id_ev));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        $nom_ev = $data['nom_ev'];
        $invite_ev = $data['invite_ev'];
        $date_ev = $data['date_ev'];
        $sujet_ev = $data['sujet_ev'];
        $sujet_res_ev = $data['sujet_res_ev'];

        $image_ev=$data['image_ev'];
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
 

 <?php require_once "header.php";  ?>


<!--************************************************************************************************************************************************************************--><!--************************************************************************************************************************************************************************--><!--************************************************************************************************************************************************************************--><!--************************************************************************************************************************************************************************--><!--************************************************************************************************************************************************************************-->



    <div class="container">
     
                <div class="span10 offset1">
                    <div class="row">
                        <h3>Update a Evenement</h3>
                    </div>
             
                    <form class="form-horizontal" action="modifiereven.php?id_ev=<?php echo $id_ev?>" method="post">
                      <div class="control-group <?php echo !empty($nameError)?'error':'';?>">
                        <label class="control-label">Nom de l evenement</label>
                        <div class="controls">
                            <input name="nom_ev" type="text"  placeholder="Nom" value="<?php echo !empty($nom_ev)?$nom_ev:'';?>">
                            <?php if (!empty($nameError)): ?>
                                <span class="help-inline"><?php echo $nameError;?></span>
                            <?php endif; ?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($inviteError)?'error':'';?>">
                        <label class="control-label">invite de l evenement</label>
                        <div class="controls">
                            <input name="invite_ev" type="text" placeholder="l invite" value="<?php echo !empty($invite_ev)?$invite_ev:'';?>">
                            <?php if (!empty($inviteError)): ?>
                                <span class="help-inline"><?php echo $inviteError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($dateError)?'error':'';?>">
                        <label class="control-label">date de l evenement</label>
                        <div class="controls">
                            <input name="date_ev" type="date"  placeholder="date" value="<?php echo !empty($date_ev)?$date_ev:'';?>">
                            <?php if (!empty($dateError)): ?>
                                <span class="help-inline"><?php echo $dateError;?></span>
                            <?php endif;?>
                        </div>
                      </div>

                      <div class="control-group <?php echo !empty($sujet_evError)?'error':'';?>">
                        <label class="control-label">sujet de l evnement</label>
                        <div class="controls">
                            <input name="sujet_ev" type="text"  placeholder="resume" value="<?php echo !empty($sujet_ev)?$sujet_ev:'';?>">
                            <?php if (!empty($sujet_evError)): ?>
                                <span class="help-inline"><?php echo $sujet_evError;?></span>
                            <?php endif;?>
                        </div>
                      </div>



                      <div class="control-group <?php echo !empty($sujet_res_evError)?'error':'';?>">
                        <label class="control-label">objectif de l evnement</label>
                        <div class="controls">
                           <input name="sujet_res_ev" type="text"  placeholder="resume" value="<?php echo !empty($sujet_res_ev)?$sujet_res_ev:'';?>">

                            <?php if (!empty($sujet_res_evError)): ?>
                                <span class="help-inline"><?php echo $sujet_res_evError;?></span>
                            <?php endif;?>
                        </div>
                      </div>



                      <div class="control-group <?php echo !empty($imageError)?'error':'';?>">
                        <label class="control-label">image 1 de l evenement</label>
                        <div class="controls">
                            <input name="image_ev" type="file"  placeholder="image" value="<?php echo !empty($image_ev)?$image_ev:'';?>">
                            <?php if (!empty($imageError)): ?>
                                <span class="help-inline"><?php echo $imageError;?></span>
                            <?php endif;?>
                        </div>
                      </div>


                       <div class="control-group <?php echo !empty($imageError)?'error':'';?>">
                        <label class="control-label">image 2 de l evenement</label>
                        <div class="controls">
                            <input name="image_ev1" type="file"  placeholder="image" value="<?php echo !empty($image_ev1)?$image_ev1:'';?>">
                            <?php if (!empty($imageError)): ?>
                                <span class="help-inline"><?php echo $imageError;?></span>
                            <?php endif;?>
                        </div>
                      </div>


                      <div class="control-group <?php echo !empty($imageError)?'error':'';?>">
                        <label class="control-label">image 3 de l evenement</label>
                        <div class="controls">
                            <input name="image_ev2" type="file"  placeholder="image" value="<?php echo !empty($image_ev2)?$image_ev2:'';?>">
                            <?php if (!empty($imageError)): ?>
                                <span class="help-inline"><?php echo $imageError;?></span>
                            <?php endif;?>
                        </div>
                      </div>

                            <div class="control-group <?php echo !empty($imageError)?'error':'';?>">
                        <label class="control-label">image 4 de l evenement</label>
                        <div class="controls">
                            <input name="image_ev3" type="file"  placeholder="image" value="<?php echo !empty($image_ev3)?$image_ev3:'';?>">
                            <?php if (!empty($imageError)): ?>
                                <span class="help-inline"><?php echo $imageError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                        



 <!--************************************************************************************************************************************************************************-->
 <!--************************************************************************************************************************************************************************--><!--************************************************************************************************************************************************************************--><!--************************************************************************************************************************************************************************--><!--************************************************************************************************************************************************************************-->                      

                  


                      <div class="form-actions">
                        <br>
                          <button type="submit" class="btn btn-success">Update</button>
                          <a class="btn btn-primary" href="evenement.php">Back</a>
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
