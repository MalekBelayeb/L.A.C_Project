<?php

include "C:/wamp/www/AvenirCulturel/Config.php";
include "C:/wamp/www/AvenirCulturel/core/CouponCore.php";

$id=0;
$cc=new CouponCore();
$cc->SupprimerCoupon($_GET['id']);
//$cc->SupprimerCoupon($id);
  //  $core-> delete_evenement($id_ev);

     // header('location:http://localhost/bookjunky/backoffice/views/startbootstrap-sb-admin-gh-pages/CouponTable.php');
              header("Location:CouponTable.php");

?>
