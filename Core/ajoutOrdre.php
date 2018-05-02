<?php
/**
 * Created by PhpStorm.
 * User: wiki
 * Date: 24/04/2018
 * Time: 13:56
 */
session_start();
/**
 * Created by PhpStorm.
 * User: wiki
 * Date: 30/03/2018
 * Time: 07:51
 */
include '../Config.php';
include '../Entity/LigneCommande.php';
include '../Entity/Commande.php';
include '../Entity/Panier.php';
include "../Core/laivraisonC.php";

//include '../api/PayPal-PHP-SDK-master/vendor/autoload.php';
$panier=new Panier();
$paymentMethod='';
$etat=0;
if (isset($_GET['id']))
{
    if ($_GET['id']=='stripe')
    {
        $paymentMethod='payment par stripe';
        $etat=1;
    }
    elseif ($_GET['id']=='paypal')
    {
        $paymentMethod='payment par paypal';
        $etat=1;
    }
    elseif ($_GET['id']=='bacs')
    {
        $paymentMethod='virement bancaire';
    }
    elseif ($_GET['id']=='cheque')
    {
        $paymentMethod='payment par cheque';
    }
    elseif ($_GET['id']=='cod')
    {
        $paymentMethod='payment a la livraison';
    }
}
$pdo=Connexion::getConnexion();
$pdo2=Connexion::getConnexion();
$c=new Commande('',$_SESSION['id'],0,'',0,date('Y-m-d'));
$c->AjouterCommande();
$ids=array_keys($_SESSION['panier'],!0,false);
$idc=$c->lastid();
for($i=0;$i<count($ids);$i++)
{
    $lc=new LigneCommande((int)$idc,(int)$ids[$i],(int)$_SESSION['panier'][$ids[$i]]);
    //var_dump($lc);
    $lc->AjouterLigneCommande();
}
$c=new Commande((int)$idc,$_SESSION['id'],(float)$panier->total(),$paymentMethod,$etat,date("Y-m-d"));
$c->ModifierCommande();
$sql = 'SELECT * FROM book where ID IN (' . implode(',', $ids) . ')';
$stmt = $pdo->prepare($sql);
$product = $stmt->execute();
$product = $stmt->fetchAll(PDO::FETCH_OBJ);
foreach ($product as $livre)
{
    $sql2='UPDATE book SET `QUANTITE`=:quantite WHERE ID=:id';
    if($stmt2=$pdo2->prepare($sql2))
    {
        $quantite=(int)$livre->QUANTITE-$_SESSION['panier'][$livre->ID];
        $idlivre=(int)$livre->ID;
        $stmt2->bindValue(':quantite',$quantite);
        $stmt2->bindValue(':id',$idlivre);
    }
    $stmt2->execute();
    var_dump($quantite);
    var_dump($idlivre);
}
//var_dump($c);
var_dump($idc) ;
var_dump($_SESSION['code_livre_livraison']) ;

$livraisonn = new laivraisonC();

$livraisonn->modifier_code_livre($_SESSION['code_livre_livraison'],$idc);








header('location:http://localhost/AvenirCulturel/Views/shop-checkout/Payment.php?id='.$idc);
?>