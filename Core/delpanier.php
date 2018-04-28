<?php
/**
 * Created by PhpStorm.
 * User: wiki
 * Date: 23/03/2018
 * Time: 04:22
 */
include '../Config.php';
include '../Entity/Panier.php';
$panier=new Panier();
if(isset($_GET['del']))
{

    $panier->del($_GET['del']);
    header('location:http://localhost/AvenirCulturel/Views/shop-cart/index.php');
}
