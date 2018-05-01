<?php
session_start();
/**
 * Created by PhpStorm.
 * User: wiki
 * Date: 30/03/2018
 * Time: 07:51
 */
include '../Entity/LigneCommande.php';
include '../Entity/Commande.php';
include '../Entity/Panier.php';
include '../Config.php';
include '../api/PayPal-PHP-SDK-master/vendor/autoload.php';
$panier=new Panier();
if($_POST['payment_method']=='bacs')
{
    header('location:http://localhost/AvenirCulturel/Core/ajoutOrdre.php?id=bacs');
}
elseif ($_POST['payment_method']=='cheque')
{
    header('location:http://localhost/AvenirCulturel/Core/ajoutOrdre.php?id=cheque');
}
elseif ($_POST['payment_method']=='cod')
{
    header('location:http://localhost/AvenirCulturel/Core/ajoutOrdre.php?id=cod');
}
elseif ($_POST['payment_method']=='paypal')
{
    header('location:http://localhost/AvenirCulturel/Views/shop-checkout/paypal.php');
}
elseif ($_POST['payment_method']=='stripe')
{
    header('location:http://localhost/AvenirCulturel/Views/shop-checkout/stripepayment.php');
}
if (isset($_GET['id']))
{
    if ($_GET['id']=='stripe')
    {
        require_once '../api/stripe/vendor/autoload.php';
        \Stripe\Stripe::setApiKey('sk_test_bNI7fsQB4ufTrtgCRYekvTuV');
        $first_name = $_SESSION['firstname_user'];
        $last_name = $_SESSION['lastname_user'];
        $email = $_SESSION['email_user'];
        $token = $_POST['stripeToken'];
        // Create Customer In Stripe
        $customer = \Stripe\Customer::create(array(
            "email" => $email,
            "source" => $token
        ));
        // Charge Customer
        $charge = \Stripe\Charge::create(array(
            "amount" => (number_format($panier->total(),2)*100),
            "currency" => "usd",
            "description" => "Bookjunky",
            "customer" => $customer->id
        ));

        // Customer Data
        $customerData = [
            'id' => $charge->customer,
            'first_name' => $first_name,
            'last_name' => $last_name,
            'email' => $email
        ];
        //var_dump($customer);
        header('location:http://localhost/AvenirCulturel/Core/ajoutOrdre.php?id=stripe');
    }
    elseif ($_GET['id']=='paypal')
    {
        $paymentMethod='payment par paypal';
        $etat=1;
    }
}
?>