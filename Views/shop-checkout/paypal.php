<?php
ob_start();
session_start();
include '../../api/PayPal-PHP-SDK-master/vendor/autoload.php';
include '../../Entity/Panier.php';
include '../../Config.php';
if(isset($_GET['id']))
{
    if($_GET['id']=='1')
    {
        header('location:http://localhost/projet/core/order.php');
        echo "<input TYPE='hidden'>";
    }
}
$panier=new Panier();
$pdo=Connexion::getConnexion();
$id = array_keys($_SESSION['panier'],!0,false);
$sql = 'SELECT * FROM book where ID IN (' . implode(',', $id) . ')';
$stmt = $pdo->prepare($sql);
$product = $stmt->execute();
$product = $stmt->fetchAll(PDO::FETCH_OBJ);
$redirectUrls=new \PayPal\Api\RedirectUrls();
$redirectUrls->setReturnUrl('http://localhost/AvenirCulturel/Core/ajoutOrdre.php?id=paypal');
$redirectUrls->setCancelUrl('http://localhost/AvenirCulturel/Core/ajoutOrdre.php?id=paypal');

$list=new \PayPal\Api\ItemList();
foreach ($product as $value)
{
    $item=(new \PayPal\Api\Item())
        ->setName($value->NOM)
        ->setPrice($value->PRIX)
        ->setCurrency('EUR')
        ->setQuantity((string)$_SESSION['panier'][$value->ID])
        ->setTax(0)
        ->setDescription('book');
    var_dump($item);
    $list->addItem($item);
}
var_dump($list);

$details=(new \PayPal\Api\Details())
        ->setSubtotal($panier->total())
        ->setShipping(0)
        ->setTax(0)
        ->setShippingDiscount(0);

$amount= (new \PayPal\Api\Amount())
        ->setTotal($panier->total())
        ->setCurrency('EUR')
        ->setDetails($details);

$transaction=(new \PayPal\Api\Transaction())
        ->setItemList($list)
        ->setDescription('Bookjunky')
        ->setAmount($amount)
        ->setCustom('test')
        ->setInvoiceNumber('merchant');
var_dump($transaction);

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential('AeOYnm4AuTSjFZ2h5R6_cDysjaWV9mxtawDZrYs5yISSeiJgQEovrEfzTAlqX1oRcUzW4n_T4SQUkpF2',
    'EBB-4uJEmTW6CiElU-PQ6XYoPkwTIpWbNNW46nEgncAaKPSyEW-ODhqtSZvilM_-7TCWXRq4JyurepGR'
    ));
$payment= new \PayPal\Api\Payment();
$payment->setTransactions([$transaction]);
$payment->setRedirectUrls($redirectUrls);
$payment->setPayer((new \PayPal\Api\Payer())->setPaymentMethod('paypal'));
$payment->setIntent('sale');

$payment->create($apiContext);
var_dump($payment);
header('location:'.$payment->getApprovalLink());
?>