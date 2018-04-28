<?php
session_start();
/**
 * Created by PhpStorm.
 * User: wiki
 * Date: 20/03/2018
 * Time: 18:51
 */
include '../Config.php';
include '../Entity/Panier.php';

$pdo=Connexion::getConnexion();
$panier=new Panier();
$json=array('error'=>true);
if(isset($_SESSION['id']))
{
    if(isset($_GET['id']))
    {
        $sql="SELECT * FROM book where ID=:id";
        if($stmt=$pdo->prepare($sql))
        {
            $stmt->bindParam('id',$_GET['id']);
            $stmt->execute();
            $row=$stmt->fetch(PDO::FETCH_OBJ);
            if($row->QUANTITE-$_SESSION['panier'][$row->ID] >0)
            {
                $panier->add($row);
                $json['error']=false;
                $json['totale']=number_format($panier->total(),2);
                $json['qte']=$row->QUANTITE-$_SESSION['panier'][$row->ID];
                $json['id']=$row->ID;
                $json['message']="livre ajouteé a votre panier";
            }
            else
            {
                $json['message']="out of stock";
            }
            //header('location:http://localhost/projet/Views/Shop.php');
        }
    }
}
else
{
    $json['message']="Il faut connecter";
}

echo json_encode($json);

