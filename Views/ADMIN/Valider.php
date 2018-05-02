<?php
/**
 * Created by PhpStorm.
 * User: wiki
 * Date: 05/04/2018
 * Time: 07:41
 */
include '../../Entity/Commande.php';
include '../../Config.php';
if(isset($_GET['val']))
{
    $id=(int)$_GET['val'];
    Commande::Valider($id);
    header('location:http://localhost/AvenirCulturel/Views/ADMIN/Commandes.php');
}
?>