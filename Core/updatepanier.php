<?php
ob_start();
session_start();
/**
 * Created by PhpStorm.
 * User: wiki
 * Date: 21/03/2018
 * Time: 05:12
 */
include '../Config.php';
require_once '../Entity/Panier.php';
require_once 'CouponCore.php';

if (isset($_POST['update_cart'])) {
    $panier=new Panier();
    $row=$_POST['quantite'];
    var_dump($row);
    foreach ($row as $key => $value)
    {
        $panier->update($value,$key);
    }
    header('location:http://localhost/AvenirCulturel/Views/shop-cart/index.php');
}
if (isset($_POST['apply_coupon'])) {
    $coupon=new CouponCore();
    $code=$_POST['coupon_code'];
    $exist=$coupon->verif($code);
    if($exist==1)
    {
        $valeur=$coupon->getval($code);
        $_SESSION['coupon']=(int)$valeur;
        var_dump($_SESSION['coupon']);
        $panier=new Panier();
        var_dump($panier->total());
    }
    header('location:http://localhost/AvenirCulturel/Views/shop-cart/index.php');
}
$coupon=new CouponCore();
$code=$_POST['coupon_code'];
$exist=$coupon->verif($code);
if($exist==1)
{
    $valeur=$coupon->getval($code);
    $_SESSION['coupon']=(int)$valeur;
    var_dump($_SESSION['coupon']);
    $panier=new Panier();
    var_dump($panier->total());
}
