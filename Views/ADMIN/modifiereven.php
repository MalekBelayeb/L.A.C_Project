<?php
include_once "C:/wamp/www/AvenirCulturel/core/evenementcore.php";
 
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
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">Start Bootstrap</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.html">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="charts.html">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Charts</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="tables.html">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Tables</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Components</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="navbar.html">Navbar</a>
            </li>
            <li>
              <a href="cards.html">Cards</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Example Pages</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
              <a href="login.html">Login Page</a>
            </li>
            <li>
              <a href="register.html">Registration Page</a>
            </li>
            <li>
              <a href="forgot-password.html">Forgot Password Page</a>
            </li>
            <li>
              <a href="blank.html">Blank Page</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-sitemap"></i>
            <span class="nav-link-text">Menu Levels</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti">
            <li>
              <a href="#">Second Level Item</a>
            </li>
            <li>
              <a href="#">Second Level Item</a>
            </li>
            <li>
              <a href="#">Second Level Item</a>
            </li>
            <li>
              <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Third Level</a>
              <ul class="sidenav-third-level collapse" id="collapseMulti2">
                <li>
                  <a href="#">Third Level Item</a>
                </li>
                <li>
                  <a href="#">Third Level Item</a>
                </li>
                <li>
                  <a href="#">Third Level Item</a>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          <a class="nav-link" href="#">
            <i class="fa fa-fw fa-link"></i>
            <span class="nav-link-text">Link</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>


      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>





  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">gerer evenemenr</li>
      </ol>
      <!-- Area Chart Example-->
    
     
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>hello</small>
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
