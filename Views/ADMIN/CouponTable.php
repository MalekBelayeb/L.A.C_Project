<?php
session_start();
require_once 'C:/wamp64/www/AvenirCulturel/Config.php';


if ( !empty($_POST)) {
        // keep track validation errors
     

          $pourcentageError=null;
          $codeError=null;
      
         
        // keep track post values
      
        $pourcentage=$_POST['value_coupon'];
        $code=$_POST['code_coupon'];
       
      
        $valid = true;

        if (empty($pourcentage)) {
            $pourcentageError = 'entrer la pourcentage';
            $valid = false;
        }
         if (empty($code)) {
            $codeError = 'entrer le code du coupon';
            $valid = false;
        }


    
 if($pourcentage>100)
        {
             $pourcentageError = 'verifier pourcentage';
            $valid = false;

        }
          if($pourcentage<0)
        {
             $pourcentageError = 'verifier pourcentage';
            $valid = false;

        }

  if ($valid) {
include "C:/wamp64/www/AvenirCulturel/Core/CouponCore.php";
        $c=new Coupon($_POST['code_coupon'],$_POST['value_coupon']);
        $cc=new CouponCore();
        $result =$cc->AjouterCoupon($c);
        header('location:http://localhost/AvenirCulturel/Views/ADMIN/CouponTable.php');

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
    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">





<?php require_once "header.php"; ?>

    <div class="container-fluid">
















<!--***************************************************************************************************************************************************************************-->
<!--***************************************************************************************************************************************************************************-->
<!--***************************************************************************************************************************************************************************-->
<!--***************************************************************************************************************************************************************************-->
<!--***************************************************************************************************************************************************************************-->


    <!-- Breadcrumbs-->
    
    <!-- Example DataTables Card-->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-table"></i> Orders</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <div align="right">
                        <button type="button" id="add_button" data-toggle="modal" data-target="#couponModal" class="btn btn-info btn-lg">Add</button>
                    </div>
                    <br>
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Value</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Value</th>
                        <th>Delete</th>
                    </tr>
                    </tfoot>
                   <tbody>
 <?php
                
include "C:/wamp64/www/AvenirCulturel/Core/CouponCore.php";
$core = new CouponCore();
$liste = $core->affichercoupon();

                   foreach ($liste as $row) {
                            echo '<tr>';
                            echo '<td>'. $row['ID'] . '</td>';
                            echo '<td>'. $row['VALEUR'] . '</td>';

                              echo '<td width=250>';
                                echo ' ';
                                echo ' ';
                                echo '<a class="btn btn-danger" href="delCoupon.php?id='.$row['ID'].'">Delete</a>';
                                echo '</td>';
                                echo '</tr>';
                            echo '</tr>';
                   }
                  // Database::disconnect();
                  ?>



                   </tbody>

                </table>
            </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
    </div>

   

<!--*****************************************************************************************ajouter**************************************************************************************-->

    <div id="couponModal" class="modal fade">
        <div class="modal-dialog">
            <form method="post" id="coupon_form" action="CouponTable.php" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 align="centre" class="modal-title">Add Coupon</h4>
                    </div>
                    <div class="modal-body">
                       

                      
                     <h4 >Enter Code Coupon</h4>
                     <div>
                    <input type="number" name="code_coupon" id="code_coupon" placeholder="Code Coupon" class="form-control" value="<?php echo !empty($code)?$code:'';?>"></input>
 
                            <?php if (!empty($codeError)): ?>
                                <span class="help-inline"><?php echo $codeError;?></span>
                            <?php endif;?>
                        </div>


                        

                        <h4 >Enter Value</h4>
                        <div>
                         <input type="number" name="value_coupon"  placeholder="la pourcentage de reduction" id="value_coupon" class="form-control" value="<?php echo !empty($pourcentage)?$pourcentage:'';?>"></input>

                            <?php if (!empty($pourcentageError)): ?>
                                <span class="help-inline"><?php echo $pourcentageError;?></span>
                            <?php endif;?>
                        </div>

                    </div>


       
                    <div class="modal-footer">
                        <input type="hidden" name="user_id" id="user_id" />
                        <input type="hidden" name="operation" id="operation" />
                        <input type="submit" name="action" id="action" class="btn btn-success" value="Add" />
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /.container-fluid-->





<!--*****************************************************************************************ajouter**************************************************************************************-->




<!--***************************************************************************************************************************************************************************-->
<!--***************************************************************************************************************************************************************************-->
<!--***************************************************************************************************************************************************************************-->
<!--***************************************************************************************************************************************************************************-->
<!--***************************************************************************************************************************************************************************-->

















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
<!-- Page level plugin JavaScript-->
<script src="vendor/chart.js/Chart.min.js"></script>
<script src="vendor/datatables/jquery.dataTables.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.js"></script>
<!-- Custom scripts for all pages-->
<script src="js/sb-admin.min.js"></script>
<!-- Custom scripts for this page-->
<script src="js/sb-admin-datatables.min.js"></script>
<script src="js/sb-admin-charts.min.js"></script>

</body>

</html>
